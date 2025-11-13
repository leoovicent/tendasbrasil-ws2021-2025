<?php

/*
 * Como usar o shortcode
 *
 * Dentro de uma pagina ou post use:
 *   [uebb-faq]
 *
 * Dentro de um arquivo PHP use:
 *  <?php echo do_shortcode("[uebb-faq]"); ?>
 */


/*
 * Se o arquivo for chamado diretamente, aborta!
 */
if ( !defined( 'ABSPATH' ) )
  die();


/*
 * Criando o shortcode do faq
 */
add_shortcode('uebb-faq', 'uebb_faq_shortcode');

if( ! function_exists( 'uebb_faq_shortcode' ) ) {
  function uebb_faq_shortcode() {
    ob_start();
    include( UEBB_FAQ_PATH . 'includes/views/uebb-faq-view.php' );
    $out = ob_get_contents();
    ob_end_clean();

    return $out;
  }
}
