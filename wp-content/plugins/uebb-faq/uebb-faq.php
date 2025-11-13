<?php
/**
 * @package uebb-faq
 * @author  bfredd <brunofredericot@gmail.com>
 *
 * @wordpress-plugin
 * Plugin Name:       Uébb FAQ
 * Plugin URI:        https://uebb.digital
 * Description:       Configurações do FAQ do site. Shortcode: <strong>&lt;?php echo do_shortcode(&quot;[uebb-faq]&quot;); ?&gt;</strong>
 * Version:           1.0.3
 * Author:            Bfredd
 * Text Domain:       uebb-faq
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/bfredd/uebb-faq
 */


/*
 * Se o arquivo for chamado diretamente, aborta!
 */
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'UEBB_FAQ_CURRENT_VERSION', '1.0.3' );
define( 'UEBB_FAQ_PATH', plugin_dir_path(__FILE__) );


class UebbFaq {
  static $instance = false;

  private function __construct() {
    add_action( 'init',               array( $this, 'criar_tipo_post' ) );
    add_action( 'init',               array( $this, 'registrar_campos' ) );
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
     * Parametros do post 'uebb_faq'.
     */
    $parametros = array(
      'labels' => array(
        'name'               => __( 'FAQ',                          'uebb-faq' ),
        'menu_name'          => __( 'FAQ',                          'uebb-faq' ),
        'all_items'          => __( 'Todos FAQs',                    'uebb-faq' ),
        'singular_name'      => __( 'FAQ',                          'uebb-faq' ),
        'add_new'            => __( 'Criar FAQ',                        'uebb-faq' ),
        'update_item'        => __( 'Atualizar FAQ',                    'uebb-faq' ),
        'edit_item'          => __( 'Editar FAQ',                       'uebb-faq' ),
        'new_item'           => __( 'Novo FAQ',                         'uebb-faq' ),
        'view_item'          => __( 'Visualizar',                         'uebb-faq' ),
        'search_items'       => __( 'Buscar',                             'uebb-faq' ),
        'add_new_item'       => __( 'Adicionar novo FAQ',               'uebb-faq' ),
        'not_found'          => __( 'Nenhum FAQ encontrado',            'uebb-faq' ),
        'not_found_in_trash' => __( 'Nenhum FAQ encontrado na lixeira', 'uebb-faq' ),
        'view_items'         => __( 'FAQ',                          'uebb-faq' ),
        'featured_image'     => __( 'Imagem do FAQ',                'uebb-faq' ),
      ),
      'supports' => array( 'title' ),
      'public'              => true,
      'menu_icon'           => 'dashicons-format-status',
      'description'         => __( 'FAQ', 'uebb-faq' ),
      'publicly_queryable'  => false,
      'show_ui'             => true,
      'show_in_rest'        => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'exclude_from_search' => true,
      'rewrite'             => array( 'slug' => 'faqs' ),
      'has_archive'         => true,
      'hierarchical'        => false,
      'query_var'           => true,
    );

    /*
     * Registrando os posts do tipo 'uebb_faq'.
     */
    register_post_type( 'uebb_faq', $parametros );

    /*
     * Hook para adicionar imagem de destaque aos uebb_faq.
     */
    add_theme_support( 'post-thumbnails', array( 'uebb_faq' ) );
  }


  /*
   * Carregar scripts.
   */
  public function carregar_scripts() {
    $dir = plugin_dir_url( __FILE__ );

    // styles
    wp_enqueue_style( 'uebb-faq-style', $dir . 'includes/assets/uebb-faq-style.css', array(), UEBB_FAQ_CURRENT_VERSION );
  }


  /*
   * Registrar campos personalizados.
   */
  public function registrar_campos() {
    if( function_exists('acf_add_local_field_group') ) {
      $acf_params = array(
        'key'    => 'uebb_faq_group',
        'title'  => 'Configurações do FAQ',
        'fields' => array(
          array(
            'key' => 'field_uebb_faq_pergunta',
            'label' => 'Pergunta',
            'name' => 'uebb_faq_pergunta',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_uebb_faq_resposta',
            'label' => 'Resposta',
            'name' => 'uebb_faq_resposta',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'uebb_faq',
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
     * Criar posts do tipo uebb_faq.
     */
    criar_tipo_post();

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
     * Cancela o registro de post do tipo 'uebb_faq'.
     */
    unregister_post_type( 'uebb_faq' );

    /*
     * Atualizar regras de reescrita.
     */
    flush_rewrite_rules();
  }

}

add_action( 'plugins_loaded', array( 'UebbFaq', 'get_instance' ) );


/*
 * Importando a dependencias
 */
require_once( UEBB_FAQ_PATH . 'includes/uebb-faq-shortcode.php');