<?php
$items = array(
  array('active' => 'active', 'cliente'  => 'Andrade Gutierrez', 'logo'  => 'logo-andrade-gutierrez', 'text'  => 'Parceria de longa data com a Tendas Brasil. Sempre nos ajudando com as tendas que precisamos.',),
  array('active' => '',       'cliente'  => 'Petrobras',         'logo'  => 'logo-petrobras',         'text'  => 'Sempre que surge uma necessidade de tenda ou coberturas, não importando o tamanho ou formato, eles nos ajudam. Agradecemos a qualidade e atendimento nos projetos.',),
  array('active' => '',       'cliente'  => 'Vale',              'logo'  => 'logo-vale',              'text'  => 'Demandamos diversos tipos e modelos de tendas. Nunca nos deixaram na mão em nossas necessidades. ',),
  array('active' => '',       'cliente'  => 'Coca-Cola',         'logo'  => 'logo-coca-cola',         'text'  => 'Temos demandas específicas em nossos projetos. Toda agilidade, profissionalismo e qualidade são superados quando precisamos. Parabéns pessoal da Tendas Brasil!',),
  array('active' => '',       'cliente'  => 'FGR Incorporações', 'logo'  => 'logo-fgr',               'text'  => 'Nossas tendas para canteiros de obras e também as tendas de eventos maiores são fornecidas por eles. Sempre muito prestativos e atenciosos em nossos projetos.',),
);
?>

<section class="padding-80px-top padding-70px-bottom sm-padding-50px-bottom">
  <div class="container">
    <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.2s">
      <div class="col-12 sm-no-padding-lr">
        <div class="subtitle1 dark900-txt margin-40px-bottom text-center">Clientes Tendas Brasil</div>

        <!-- disable /// start slider testimonials --
        <div class="d-none carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <?php foreach ($items as $index => $item) : ?>
              !-- item slider --
              <div class="carousel-item <?php echo $item['active'] ?>" data-interval="3000">
                <div class="row justify-content-center m-0">
                  <div class="col-12 col-lg-9 text-center sm-padding-40px-lr">
                    <p class="body1 txt-italic dark600-txt">"<?php echo $item['text'] ?>"</p>
                    <img class="height-5625rem" src="<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['logo'] ?>.png" title="<?php echo $item['cliente'] ?>">
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>

        </div>
        !-- disable /// end slider testimonials -->

        <!-- start slider testimonials -->
        <div class="row position-relative sm-padding-30px-lr">
          <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
            <div class="swiper-wrapper">

              <?php foreach ($items as $index => $item) : ?>
              <!-- item list -->
              <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                <div class="border-radius-8 margin-half-all dark200-bgd box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                  <p class="body1 txt-italic dark600-txt">"<?php echo $item['text'] ?>"</p>
                  <img class="height-80px sm-height-60px" src="<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['logo'] ?>.png" title="<?php echo $item['cliente'] ?>">
                </div>
              </div>
              <?php endforeach; ?>

            </div>                        
            <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
          </div>
        </div>
        <!-- end slider testimonials -->

      </div>
    </div>

  </div>
</section>
