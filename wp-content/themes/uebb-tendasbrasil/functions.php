<?php

/**
 * Remover barra de administrador.
 */
show_admin_bar(false);


/**
 * Configurações e suportes do Tema.
 */
add_action('after_setup_theme', 'uebb_digital_theme_settings');

function uebb_digital_theme_settings() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo', array('flex-width' => true) );
  add_theme_support(
    'html5',
    array('search-form', 'comment-form', 'commento-list', 'gallery', 'caption', 'style', 'script')
  );

  // add_theme_support( 'widgets' );
}


/**
 * Registrando o hook do Uébb Header Menu.
 */
add_action( 'init', 'uebb_register_menu' );

function uebb_register_menu() {
  register_nav_menus( array( 'uebb-main-menu' => __( 'Uébb Menu Principal' ) ) );
}


/**
 * Pegar o nome da categoria do post.
 */
function uebb_post_category_name() {
  $categories = get_the_category();
  if (!isset($categories[0])) { return ''; };

  $category = $categories[0];
  if (isset($category->name)) { return $category->name; };

  return '';
}


/**
 * Pegar valores das configurações de header
 */
function uebb_header($key) {
  return get_theme_mod('uebb_header_' . $key);
}


/**
 * Pegar valores das configurações de informações
 */
function uebb_information($key) {
  return get_theme_mod('uebb_information_' . $key);
}


/**
 * Pegar id de vídeo do youtube
 */
function get_youtube_id_from_url($url) {
  if (stristr($url,'youtu.be/')) {
    preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4];
  } else {
    @preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5];
  }
}

/**
 * Personalizações adicionais do Tema.
 */
require get_template_directory() . '/includes/uebb-produtos-functions.php';
require get_template_directory() . '/includes/uebb-blog-functions.php';

function catch_that_image() {
  $first_img = '';
  ob_start();
  ob_end_clean();

  if ($image = get_field('uebb-blog-imagem'))
    $first_img = $image['url'];

  if (empty($first_img) && preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', get_the_content(), $matches))
    $first_img = $matches[1][0];

  if(empty($first_img))
    $first_img = "/path/to/default.png";

  return $first_img;
}



// OTHERS FUNCTIONS



// texto telefone
function uebb_phone() { return '(62) 3290-7830'; }

// link telefone
function uebb_phone_link() { return 'tel:+556232907830'; }



// texto whatsapp
function uebb_whatsapp() { return '(62) 98145-3336'; }

// link whatsapp
function uebb_whatsapp_link() { return 'https://wa.me/5562981453336'; }



// link instagram
function uebb_instagram_link() { return 'https://www.instagram.com/tendasbrasiloficial'; }

// link facebook
function uebb_facebook_link() { return 'https://www.facebook.com/tendasbrasiloficial'; }

// link youtube
function uebb_linkedin_link() { return 'https://www.linkedin.com/company/grupo-tendas-brasil-tendas'; }



// embed google maps
function uebb_maps_embed() { return '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30564.778915053495!2d-49.3120848487793!3d-16.746929968158934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef7400030321d%3A0xa7a9ed89bbc8a9c9!2sTendas%20Brasil!5e0!3m2!1spt-BR!2sbr!4v1736871498319!5m2!1spt-BR!2sbr" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'; }

// link google maps
function uebb_maps_link() { return 'https://goo.gl/maps/C6v9xALSqp4u9sCKA'; }


// obter conteudo por pagina
function obter_conteudo_pagina_por_slug($slug) {
  // Obtém a página pelo slug
  $pagina = get_page_by_path($slug);

  // Verifica se a página foi encontrada
  if ($pagina) {
      // Obtém o ID da página
      $pagina_id = $pagina->ID;

      // Obtém o conteúdo da página pelo ID
      $conteudo_pagina = get_post_field('post_content', $pagina_id);

      // Retorna o conteúdo da página
      return $conteudo_pagina;
  } else {
      // Retorna null se a página não for encontrada
      return null; 
  }
}











