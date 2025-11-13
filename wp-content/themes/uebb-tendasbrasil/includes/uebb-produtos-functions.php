<?php
/**
 * Common theme functions
 *
 * @package WordPress
 * @since UebbTheme 0.1
 */


/**
 * Pegar imagem de destaque do produtos.
 */
function uebb_produtos_imagem_destaque($size='full', $class='') {
  $produtos_id = get_the_ID();
  $attr    = get_post_meta($produtos_id, 'uebb-produtos-imagem-destaque');

  if (isset($attr[0]) && $attr[0] != '') {
    $imagem    = $attr[0];
    $imagem_id = attachment_url_to_postid($imagem);
    return wp_get_attachment_image($imagem_id, $size, '', array('class' => $class));
  }

  return the_post_thumbnail($size, array('class' => $class));
}


/**
 * Pegar categoria do produtos.
 */
function uebb_produtos_categoria() {
  $produtos_id = get_the_ID();
  $attr    = get_post_meta($produtos_id, 'uebb-produtos-categoria');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return uebb_post_category_name();
}


/**
 * Pegar o titulo do produtos.
 */
function uebb_produtos_titulo($before='', $after='') {
  return the_title( $before, $after, false);
}


/**
 * Pegar o titulo curto do produtos.
 */
function uebb_produtos_titulo_curto($before, $after) {
  $produtos_id = get_the_ID();
  $attr    = get_post_meta($produtos_id, 'uebb-produtos-titulo-curto');

  if (isset($attr[0]) && $attr[0] != '') { return $before . $attr[0] . $after; }

  return uebb_produtos_titulo( $before, $after);
}


/**
 * Pegar o resumo do produtos.
 */
function uebb_produtos_resumo() {
  $produtos_id = get_the_ID();
  $attr    = get_post_meta($produtos_id, 'uebb-produtos-resumo');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return the_excerpt();
}


/**
 * Pegar o conteudo do produtos.
 */
function uebb_produtos_conteudo() {
  return the_content();
}


/**
 * Pegar o campos do produto.
 */
function uebb_produtos_campo($campo) {
  return the_field($campo);
}


/**
 * Pegar o campos do produto.
 */
function uebb_produtos_dados_campo($campo) {
  return get_field($campo);
}


/**
 * Pegar o texto do leia mais do produtos.
 */
function uebb_produtos_leia_mais() {
  $produtos_id = get_the_ID();
  $attr    = get_post_meta($produtos_id, 'uebb-produtos-leia-mais');

  if (isset($attr[0]) && $attr[0] != '') { return $attr[0]; }
  return 'Leia Mais';
}
