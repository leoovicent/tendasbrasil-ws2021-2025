<?php
$items = array(
  array('title' => 'Agricultura<br> e pecuária',       'icon' => 'icon-traktor'),
  array('title' => 'Canteiros<br> de obras',           'icon' => 'icon-engineer'),
  array('title' => 'Construção<br> civil',             'icon' => 'icon-build'),
  array('title' => 'Festas, eventos<br> e convenções', 'icon' => 'icon-drink'),
);
?>


<section id="nossas-tendas" class="padding-80px-tb dark200-bgd">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="0.4s">
        <h3 class="button-text primary400-txt text-center">Seja para venda ou locação</h3>
        <h2 class="header3 dark900-txt text-center sm-margin-20px-bottom margin-40px-bottom">Soluções em coberturas é aqui</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">

          <?php foreach ($items as $index => $item) : ?>
            <!-- item list -->
            <div class="col-10 col-sm-6 col-lg-3 padding-10px-all padding-40px-bottom sm-padding-5px-tb wow fadeInUp" data-wow-delay="0.4s">
              <div class="dark100-bgd border-radius-8 padding-40px-tb padding-20px-lr text-center" style="box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.05);">
                <div class="margin-20px-bottom"><img class="height-6250rem" src="<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['icon'] ?>.svg"></div>
                <p class="body2 dark900-txt no-margin">Tendas para</p>
                <h3 class="subtitle2 dark900-txt no-margin"><?php echo $item['title'] ?></h3>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

      <div class="col-12 text-center padding-40px-top wow fadeInUp" data-wow-delay="0.6s">
        <a class="button btn-primary400-outline button-text" href="<?php bloginfo('url'); ?>/produtos/tenda-piramidal">Conheça nossas tendas<i class="uil uil-arrow-right margin-5px-left"></i></a>
      </div>

    </div>

  </div>
</section>
