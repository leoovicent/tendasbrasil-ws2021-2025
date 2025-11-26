<?php

if ( !defined( 'ABSPATH' ) )
  die();

add_shortcode('uebb-popup', 'uebb_popup_shortcode');

function uebb_popup_shortcode( $atts = array(), $content = '' ) {
  extract( shortcode_atts( array(), $atts ) );

  uebb_popup_import_scripts();

  ob_start();
  include( UEBB_POPUP_PATH . 'includes/views/uebb-popup-shortcode-view.php' );
  $out = ob_get_contents();
  ob_end_clean();

  return $out;
}

function uebb_popup_import_scripts() {
  // importando scripts
  wp_enqueue_script( 'uebb_popup_vue' );
  wp_enqueue_script( 'uebb_popup_shortcode' );
  wp_localize_script( 'uebb_popup_vue', 'UebbPopupAssets', [
    'url'   => admin_url( 'admin-ajax.php' ),
    'nonce' => wp_create_nonce( 'uebb_popup_nonce' )
  ] );

  // importando styles
  wp_enqueue_style( 'uebb_popup' );

  // dados personalizados
  $inline_script = "var uebbPopupConfig = { host: '" . esc_js( get_bloginfo('url') ) . "' };";
  wp_add_inline_script( 'uebb_popup_shortcode', $inline_script, 'before' );
}
