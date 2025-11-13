<?php
  $cores = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
  $items = array(
    array('produto' => 'Tenda Piramidal', 'image' => 'prod-slider-tenda-piramidal-001', 'active' => 'active',),
    array('produto' => 'Tenda Piramidal', 'image' => 'prod-slider-tenda-piramidal-002', 'active' => '',),
    array('produto' => 'Tenda Piramidal', 'image' => 'prod-slider-tenda-piramidal-003', 'active' => '',),
    array('produto' => 'Tenda Piramidal', 'image' => 'prod-slider-tenda-piramidal-004', 'active' => '',),
    array('produto' => 'Tenda Piramidal', 'image' => 'prod-slider-tenda-piramidal-005', 'active' => '',),
  );
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
  $params_pagetitle = array(
    'titulo'    => 'Nossos Produtos',
    'subtitulo' => 'Tendas Brasil • Nossos Produtos • ' . uebb_produtos_titulo()
  );

  echo get_template_part('part-pagetitle', null, $params_pagetitle);
?>
<!-- end pagetitle -->

<?php
// start loop
while (have_posts()) :
  the_post();
?>

<!-- start content page -->
<section class="padding-100px-tb sm-padding-80px-tb parallax wow fadeIn" data-wow-delay="0.4s">
  <div class="container padding-40px-tb lg-padding-20px-tb md-no-padding-tb">
    <div class="row justify-content-center">

      <!-- left -->
      <div class="col-11 col-md-10 col-lg-6 col-xl-5 padding-50px-right md-padding-15px-right">
        <p class="button-text primary400-txt margin-10px-bottom wow fadeIn" data-wow-delay="0.8s">Venda e Locação</p>
        <h1 class="header1 margin-10px-bottom wow fadeIn" data-wow-delay="1.0s"><?php echo uebb_produtos_titulo(); ?></h1>
        <p class="body1 margin-30px-bottom wow fadeIn" data-wow-delay="1.2s"><?php echo uebb_produtos_resumo(); ?></p>
        <div class="body2 dark600-txt margin-30px-bottom wow fadeIn" data-wow-delay="1.4s"><?php uebb_produtos_conteudo(); ?></div>
      </div>

      <!-- right -->
      <div class="col-11 col-md-10 col-lg-6 col-xl-7">
        <div class="row">

          <!-- slider -->
          <div class="col-12 padding-30px-bottom wow fadeIn" data-wow-delay="0.6s">

            <?php
            $images = uebb_produtos_dados_campo('uebb-produtos-galeria');
            
            if ($images) :
                 if (is_array($images)) {
                    // Se já for um array, extrair os IDs diretamente
                    $images = array_map(function ($image) {
                        return is_array($image) && isset($image['id']) ? $image['id'] : $image;
                    }, $images);
                } else {
                    // Se for string, separar pelos IDs com explode
                    $images = explode(",", $images);
                }
            ?>

              <div id="slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                  <?php
                  $idx_images = 0;
                  if (count($images) > 0) :
                    foreach ($images as $image) : ?>

                      <div class="carousel-item <?php echo ($idx_images == 0) ? 'active' : '' ?>" data-interval="3000">
                        <div class="row">
                          <div class="col-12">
                            <?php $img_atts = wp_get_attachment_image_src($image, "full"); ?>
                            <div class="produto-slide-image" style="background-image: url(<?php echo $img_atts[0]; ?>)"></div>
                          </div>
                        </div>
                      </div>

                  <?php
                      $idx_images++;
                    endforeach;
                  endif;
                  ?>

                  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

                </div>
              </div>
            <?php endif; ?>
          </div>

          <!-- colors -->
          <div class="col-12 margin-30px-bottom wow fadeIn" data-wow-delay="0.6s">
            <p class="body1 dark900-txt margin-10px-bottom">Cores disponíveis</p>
            <div class="row padding-15px-lr">

              <?php foreach ($cores as $item) : ?>
                <?php $cor = uebb_produtos_dados_campo('uebb-produtos-cor-' . $item); ?>
                <?php if ($cor) : ?>
                  <div class="col-auto product-tag-col-padding">
                    <div class="product-tag-color" style="background-color: <?php echo $cor; ?>;"></div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>

            </div>
          </div>

          <!-- informacoes -->
          <div class="col-12 uebb-produtos-informacoes wow fadeIn" data-wow-delay="0.6s">
            <?php uebb_produtos_campo('uebb-produtos-informacoes'); ?>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?php
// end loop
endwhile;
?>

<!-- start contact form -->
<?php echo get_template_part('part-index-contact-form'); ?>
<!-- end contact form -->

<!-- start produtos -->
<?php echo get_template_part('part-tendas'); ?>
<!-- end produtos -->

<!-- end content page -->

<?php get_footer(); ?>
