<?php
$items = array(
  array('title' => 'Tenda Piramidal',     'link' => 'tenda-piramidal',),
  array('title' => 'Tenda Sanfonada',     'link' => 'tenda-sanfonada',),
  array('title' => 'Tenda Galpão',        'link' => 'tenda-galpao',),
  array('title' => 'Tenda Sanitária',     'link' => 'tenda-sanitaria',),
  array('title' => 'Tenda Chapéu',        'link' => 'tenda-chapeu',),
  array('title' => 'Tenda Tensionada',    'link' => 'tenda-tensionada',),
  array('title' => 'Tenda para Obras',    'link' => 'tenda-para-obras',),
  array('title' => 'Tenda Personalizada', 'link' => 'tenda-personalizada',),
  array('title' => 'Kit Ombrelone',       'link' => 'tenda-kit-ombrelone',),
);
?>

<nav class="navbar navbar-default navbar-top nav-box-shadow bootsnav full-width-pull-menu header-light-transparent background-white wow fadeInDown" data-wow-delay="0.4s">
  <div class="container-fluid nav-header-container padding-50px-lr">

    <!-- start logo -->
    <div class="col col-md-auto p-0">
      <div class="row align-items-center">
        <div class="col-auto pr-0">
          <a href="<?php echo get_bloginfo('url'); ?>" title="<?php echo get_bloginfo('name'); ?>" class="logo">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo-tendas-brasil.svg" alt="<?php echo get_bloginfo('name'); ?>">
          </a>
        </div>
        <div class="col-auto pl-0 margin-20px-left">
          <p class="overline-text dark900-txt no-margin">Cobrindo os<br>quatro cantos<br>do país</p>
        </div>
      </div>
    </div>
    <!-- end logo -->

    <!-- start locale, phone & whatsapp -->
    <div class="col-auto p-0 nav-hidden-992">
      <div class="row">

        <!-- locale -->
        <div class="col-auto nav-hidden-1200">
          <a class="nav-cta" href="<?php echo uebb_maps_link(); ?>" target="_blank">
            <div class="row align-items-center">
              <div class="col-auto pr-0">
                <i class="uil uil-location-point nav-icon-phone dark600-txt"></i>
              </div>
              <div class="col pl-0 margin-5px-left">
                <p class="caption-text dark600-txt m-0">Localização</p>
                <span class="nav-number-phone dark800-txt">Onde Estamos</span>
              </div>
            </div>
          </a>
        </div>

        <!-- phone -->
        <div class="col-auto p-0">
          <a class="nav-cta" href="<?php echo uebb_phone_link(); ?>" target="_blank">
            <div class="row align-items-center">
              <div class="col-auto pr-0">
                <i class="uil uil-outgoing-call nav-icon-phone alert-y500-txt"></i>
              </div>
              <div class="col pl-0 margin-5px-left">
                <p class="caption-text dark600-txt m-0">Fale Conosco</p>
                <span class="nav-number-phone dark800-txt">Telefone</span>
              </div>
            </div>
          </a>
        </div>

        <!-- whatsapp -->
        <div class="col-auto">
          <a class="nav-cta popup-with-form" href="#whatschat">
            <div class="row align-items-center">
              <div class="col-auto pr-0">
                <i class="uil uil-whatsapp nav-icon-phone alert-g500-txt"></i>
              </div>
              <div class="col pl-0 margin-5px-left">
                <p class="caption-text dark600-txt m-0">Chamar no</p>
                <span class="nav-number-phone dark800-txt">WhatsApp</span>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
    <!-- end locale, phone & whatsapp -->

    <!-- start main menu -->
    <div class="col-auto p-0">
      <div class="row align-items-center">

        <!-- cta button -->
        <div class="col-auto padding-30px-right nav-hidden-768">
          <a class="button btn-primary400 button-text popup-with-form" href="#modal-orcamento">Orçamento Rápido<i class="uil uil-arrow-right margin-5px-left"></i></a>
        </div>

        <div class="col-auto">

          <!-- button menu -->
          <button class="navbar-toggler mobile-toggle p-0" type="button" id="open-button" data-toggle="collapse" data-target=".menu-wrap">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <!-- content menu -->
          <div class="menu-wrap full-screen d-flex">

            <!-- left -->
            <div class="col-md-4 col-lg-6 col-xl-7 p-0 d-none d-sm-block">
              <div class="full-screen">
                <div class="opacity-medium bg-extra-dark-gray" style="opacity: 0.9 !important;">
                  <!-- <img class="d-none" src="<?php echo get_bloginfo('template_url'); ?>/images/tendas-brasil_selo-15-anos_menu.png" alt="Tendas Brasil"> -->
                </div>
              </div>
            </div>

            <!-- right -->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 p-0 full-screen" style="background-color: #FFFFFF;">
              <div class="position-absolute height-100 width-100 overflow-auto">
                <div class="height-100 width-100">
                  <div class="height-100 width-100 padding-fourteen-lr d-flex align-items-center justify-content-center vertical-align-middle link-style-2">

                    <!-- start menu -->
                    <ul class="subtitle2 no-padding-left">

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/">Início</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/quem-somos">Quem Somos</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/produtos/tenda-piramidal">Nossas Tendas</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/duvidas-frequentes">Dúvidas Frequentes</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/nossos-termos-e-politicas/politica-de-privacidade">Nossos Termos e Políticas</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/trabalhe-conosco">Trabalhe Conosco</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/fale-conosco">Fale Conosco</a></li>

                      <!-- item list -->
                      <li class=""><a href="<?php bloginfo('url'); ?>/artigos-e-noticias">Blog</a></li>

                    </ul>
                    <!-- end menu -->

                  </div>
                </div>
              </div>
              <!-- close button -->
              <button class="close-button-menu" id="close-button"></button>
            </div>

          </div>

        </div>

      </div>
    </div>
    <!-- end main menu -->

  </div>
</nav>
