<?php
/**
 * Common theme functions
 *
 * @package WordPress
 * @since UebbTheme 0.1
 */


function uebb_blog_imagem_destaque($size='full', $class='') {
  $attr = get_field('uebb-blog-imagem-destaque');

  if (isset($attr[0]) && $attr[0] != '') {
    $imagem    = $attr[0];
    $imagem_id = attachment_url_to_postid($imagem);
    return wp_get_attachment_image($imagem_id, $size, '', array('class' => $class));
  }

  return the_post_thumbnail($size, array('class' => $class));
}

function uebb_blog_categoria() {
  $attr = get_field('uebb-blog-categoria');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return uebb_post_category_name();
}

function uebb_blog_titulo($before, $after) {
  return the_title( $before, $after, false);
}

function uebb_blog_titulo_curto($before, $after) {
  $attr = get_field('uebb-blog-titulo-curto');

  if (isset($attr[0]) && $attr[0] != '') { return $before . $attr[0] . $after; }

  return uebb_blog_titulo( $before, $after);
}

function uebb_blog_resumo() {
  $attr = get_field('uebb-blog-resumo');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return the_excerpt();
}

function uebb_blog_conteudo() {
  return the_content();
}

function uebb_blog_leia_mais() {
  $attr = get_field('uebb-blog-leia-mais');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return 'Leia Mais';
}
