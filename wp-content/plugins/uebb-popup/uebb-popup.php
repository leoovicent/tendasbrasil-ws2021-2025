<?php
/**
 * @package uebb-popup
 * @author  Diego Vieira <diegoheflavia@gmail.com>
 *
 * @wordpress-plugin
 * Plugin Name:       Uébb Popup
 * Plugin URI:        https://uebb.digital
 * Description:       Plugin de Popup do site. Shortcode:  <strong>&lt;?php echo do_shortcode(&quot;[uebb-popup]&quot;); ?&gt;</strong>
 * Version:           1.0.1
 * Author:            Diego Vieira
 * Text Domain:       uebb-popup
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/diegorikhy/uebb-popup
 */


/*
 * Se o arquivo for chamado diretamente, aborta!
 */
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'UEBB_POPUP_PATH', plugin_dir_path(__FILE__) );
define( 'UEBB_POPUP_CURRENT_VERSION', '1.0.1' );


class UebbPopup {
  static $instance = false;

  private function __construct() {
    add_action( 'init',              array( $this, 'criar_tipo_post' ) );
    add_action( 'init',               array( $this, 'registrar_campos' ) );

    add_action( 'wp_ajax_uebb_popup_get_popups',        array( $this, 'get_popups' ) );
    add_action( 'wp_ajax_nopriv_uebb_popup_get_popups', array( $this, 'get_popups' ) );

    add_action( 'wp_enqueue_scripts', array( $this, 'carregar_scripts' ) );
    register_activation_hook(   __FILE__, array( $this, 'ativar' ) );
    register_deactivation_hook( __FILE__, array( $this, 'desativar' ) );
  }

  public static function get_instance() {
    if ( ! self::$instance ) { self::$instance = new self; }
    return self::$instance;
  }


  /*
   * Hook para criar o tipo de posts.
   */
  public function criar_tipo_post() {
    /*
     * Parametros do post 'uebb_popup'.
     */
    $parametros = array(
      'labels' => array(
        'name'               => __( 'Popup',                              'uebb-popup' ),
        'menu_name'          => __( 'Popup',                              'uebb-popup' ),
        'all_items'          => __( 'Todos da popup',                     'uebb-popup' ),
        'singular_name'      => __( 'Popup',                              'uebb-popup' ),
        'add_new'            => __( 'Criar popup',                        'uebb-popup' ),
        'update_item'        => __( 'Atualizar popup',                    'uebb-popup' ),
        'edit_item'          => __( 'Editar popup',                       'uebb-popup' ),
        'new_item'           => __( 'Novo popup',                         'uebb-popup' ),
        'view_item'          => __( 'Visualizar',                          'uebb-popup' ),
        'search_items'       => __( 'Buscar',                              'uebb-popup' ),
        'add_new_item'       => __( 'Adicionar novo popup',               'uebb-popup' ),
        'not_found'          => __( 'Nenhum popup encontrado',            'uebb-popup' ),
        'not_found_in_trash' => __( 'Nenhum popup encontrado na lixeira', 'uebb-popup' ),
        'view_items'         => __( 'Popup',                              'uebb-popup' ),
        'featured_image'     => __( 'Imagem destaque',                     'uebb-popup' ),
      ),
      'supports' => array(
        'tags',
        'title',
        // 'editor',
        // 'excerpt',
        'revisions',
        // 'thumbnail',
        'taxonomies',
        'post-formats'
      ),
      'public'             => true,
      'menu_icon'          => 'dashicons-admin-page',
      'description'        => __( 'Popup do site.', 'uebb-popup' ),
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_rest'       => true,
      'show_in_menu'       => true,
      'show_in_nav_menus'  => true,
      'rewrite'            => array( 'slug' => 'atendimento-clinico', 'with_front' => false ),
      'has_archive'        => true,
      'hierarchical'       => false,
      'taxonomies'         => array( 'uebb_popup_categoria' ),
      'query_var'          => true
    );

    /*
     * Registrando os posts do tipo 'uebb_popup'.
     */
    register_post_type( 'uebb_popup', $parametros );

    /*
     * Hook para adicionar imagem de destaque aos uebb_popup.
     */
    // add_theme_support( 'post-thumbnails', array( 'uebb_popup' ) );
  }


  /*
   * Buscar destaques.
   */
  public function get_popups() {
    // Verificar nonce para proteção CSRF
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'uebb_popup_nonce' ) ) {
      wp_send_json_error( array( 'message' => 'Nonce inválido' ), 403 );
    }

    global $wpdb;

    $sqlposts = "
      SELECT post.*
      FROM $wpdb->posts AS post
      WHERE post.post_type = 'uebb_popup'
      AND post.post_status = 'publish'
      ORDER BY post.post_date ASC
      LIMIT 10";

    $rows = $wpdb->get_results( $sqlposts );

    // Sanitizar IDs com intval para prevenir SQL injection
    $post_ids = array();
    foreach ( $rows as $row ) { $post_ids[] = intval( $row->ID ); }

    // Se não houver posts, retornar vazio
    if ( empty( $post_ids ) ) {
      wp_send_json( array( 'posts' => array(), 'metas' => array() ) );
    }

    $sqlmetas = "
      SELECT pmeta.*
      FROM $wpdb->postmeta AS pmeta
      WHERE pmeta.post_id IN (" . implode(',', $post_ids) . ")";

    $rowsmetas = $wpdb->get_results( $sqlmetas );
    foreach ( $rowsmetas as $rm ) {
      if ($rm->meta_key == 'uebb_popup_link') {
        $rm->meta_value = unserialize($rm->meta_value);
      }
      // Sanitizar conteúdo HTML para prevenir XSS
      if ($rm->meta_key == 'uebb_popup_conteudo') {
        $rm->meta_value = wp_kses_post( $rm->meta_value );
      }
    }

    $results = array();
    $results['posts'] = $rows;
    $results['metas'] = $rowsmetas;
    wp_send_json( $results );
  }


  /*
   * Carregar scripts.
   */
  public function carregar_scripts() {
    $dir = plugin_dir_url( __FILE__ );

    // registrando scripts
    wp_register_script( 'uebb_popup_vue',       $dir . 'includes/assets/scripts/vue.js',                   array(), UEBB_POPUP_CURRENT_VERSION );
    wp_register_script( 'uebb_popup_shortcode', $dir . 'includes/assets/scripts/uebb-popup-shortcode.js', array( 'uebb_popup_vue' ), UEBB_POPUP_CURRENT_VERSION );

    // registrando styles
    wp_register_style( 'uebb_popup',            $dir . 'includes/assets/styles/uebb-popup.css',           array(), UEBB_POPUP_CURRENT_VERSION );

    if ( is_post_type_archive( 'uebb_popup' ) ) {
      // importando scripts
      wp_enqueue_script( 'uebb_popup_vue' );
      wp_enqueue_script( 'uebb_popup_shortcode' );
      wp_localize_script( 'uebb_popup_vue', 'UebbPopupAssets', [ 'url' => admin_url( 'admin-ajax.php' ) ] );

      // importando styles
      wp_enqueue_style( 'uebb_popup' );

      // dados personalizados
      $inline_script = "var uebbPopupConfig = { host: '" . get_bloginfo('url') . "' };";
      wp_add_inline_script( 'uebb_popup_shortcode', $inline_script, 'before' );
    }
  }


  /*
   * Registrar campos personalizados.
   */
  public function registrar_campos() {
    if( function_exists('acf_add_local_field_group') ) {
      $acf_params = array(
        'key'    => 'uebb_popup_group',
        'title'  => 'Configurações do Popup',
        'fields' => array(
          array(
            'key' => 'field_uebb_popup_largura',
            'label' => 'Largura do popup',
            'name' => 'uebb_popup_largura',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '20',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Ex. 920px',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_uebb_popup_background',
            'label' => 'Cor de fundo do popup',
            'name' => 'uebb_popup_background',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '20',
              'class' => '',
              'id' => '',
            ),
            'default_value' => 'rgba(0, 0, 0, 0.3)',
            'placeholder' => 'Ex. rgba(0, 0, 0, 0.3)',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_uebb_popup_link',
            'label' => 'Link do popup',
            'name' => 'uebb_popup_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
          ),
          array(
            'key' => 'field_uebb_popup_imagem',
            'label' => 'Imagem do Popup',
            'name' => 'uebb_popup_imagem',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'jpg,jpeg,png,webp,gif',
          ),
          array(
            'key' => 'field_uebb_popup_conteudo',
            'label' => 'Conteúdo do Popup',
            'name' => 'uebb_popup_conteudo',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'uebb_popup',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
          0 => 'the_content',
          1 => 'excerpt',
          2 => 'discussion',
          3 => 'comments',
          4 => 'slug',
          5 => 'author',
          6 => 'featured_image',
          7 => 'categories',
          8 => 'tags',
          9 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
      );
      acf_add_local_field_group($acf_params);
    }
  }


  /*
   * Hook chamado ao ativar o plugin.
   */
  public function ativar() {

    /*
     * Criar posts do tipo uebb_popup.
     */
    $this->criar_tipo_post();

    /*
     * Atualizar regras de reescrita.
     */
    flush_rewrite_rules();
  }


  /*
   * Hook chamado ao desativar o plugin
   */
  public function desativar() {

    /*
     * Cancela o registro de post do tipo 'uebb_popup'.
     */
    unregister_post_type( 'uebb_popup' );

    /*
     * Atualizar regras de reescrita.
     */
    flush_rewrite_rules();
  }
}

add_action( 'plugins_loaded', array( 'UebbPopup', 'get_instance' ) );

require_once( UEBB_POPUP_PATH . 'includes/uebb-popup-shortcode.php' );
