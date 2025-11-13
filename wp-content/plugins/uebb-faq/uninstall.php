<?php

/**
 * Executado quando o plugin e desinstalado.
 *
 * Usado para excluir os posts criados, para nao ficar lixo no banco de dados.
 *
 * @since   1.0.0
 * @package uebb-slideshow
 */

// Se a desistalacao nao for chamada pelo Wordpress, entao aborta!
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  exit;
}


/*
 * Pegando todos os posts do tipo 'uebb_slideshow' para serem deletados.
 */
$posts = get_posts(array( 'post_type' => 'uebb_faq', 'numberposts' => -1 ));


/*
 * Loop para deletar todos os posts.
 */
if ( !empty( $posts ) ) {
  foreach( $posts as $post ) {
    wp_delete_post( $post->ID );
  }
}
