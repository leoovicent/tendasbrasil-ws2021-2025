<?php
/*
Plugin Name: Uebb Floating Box
Plugin URI: https://uebbdigital.com.br/
Description: Script para deixar elemento flutuando no site. Insira a classe "<strong>.uebb-floating-box</strong>" na DIV principal da área do scroll e "<strong>.uebb-floating-content</strong>" na DIV do conteúdo flutante.
Version: 1.0.0
Author: Diego Vieira
*/

function uebb_floating_enqueue() {
  wp_enqueue_style(
    'uebb-floating-style',
    plugin_dir_url(__FILE__) . 'uebb-floating-style.css'
  );

  wp_enqueue_script(
    'uebb-floating-script',
    plugin_dir_url(__FILE__) . 'uebb-floating-script.js',
    array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts', 'uebb_floating_enqueue' );
