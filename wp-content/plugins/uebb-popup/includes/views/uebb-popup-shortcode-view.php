<?php

if ( !defined( 'ABSPATH' ) )
  die();
?>

<!-- start uebb-popup -->
<div id="uebb-popup">
  <div id="uebb-popup-main" v-if="opened" @click="closePopup()" :style="{'background-color': popup.uebb_popup_background}" class="v-cloak">
    <div id="uebb-popup-content" :style="{'width': popup.uebb_popup_largura}" v-on:click.stop class="">
      <a v-if="popup.uebb_popup_link.url" :href="popup.uebb_popup_link.url" :target="popup.uebb_popup_link.target" @click="closePopup()">
        <img :src="popup.uebb_popup_imagem_url" :alt="popup.post_title" >
      </a>
      <img v-if="!popup.uebb_popup_link.url" :src="popup.uebb_popup_imagem_url" :alt="popup.post_title" >
      <div v-if="popup.uebb_popup_conteudo" v-html="popup.uebb_popup_conteudo"></div>
    </div>
    <div id="uebb-popup-close" @click="closePopup()"></div>
  </div>
</div>
<!-- end uebb-popup -->
