<?php
/**
 * Template Name: Política de Cookies
 */
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
  $params_pagetitle = array(
    'titulo'    => 'Política de Cookies',
    'subtitulo' => 'Tendas Brasil • Política de Cookies'
  );

  echo get_template_part('part-pagetitle', null, $params_pagetitle);
?>
<!-- end pagetitle -->

<!-- start content section -->
<section class="dark200-bgd padding-100px-tb sm-padding-80px-tb wow fadeIn" data-wow-delay="0.4s">
  <div class="container padding-40px-tb lg-padding-20px-tb md-no-padding-tb">
    <div class="row justify-content-center">

      <!-- left col -->
      <div class="col-11 col-lg-7 col-xl-8 dark600-txt wow fadeInUp" data-wow-delay="0.4s">
        <?php
          $slug_pagina = 'nossos-termos-e-politicas/politica-de-cookies';
          $conteudo_pagina = obter_conteudo_pagina_por_slug($slug_pagina);
          echo $conteudo_pagina;
        ?>
      </div>

      <!-- right col -->
      <div class="col-11 col-lg-5 col-xl-4 md-margin-80px-top wow fadeInUp" data-wow-delay="0.6s">
        <?php echo get_template_part('part-page-side-menu-policies'); ?>
      </div>

    </div>
  </div>
</section>
<!-- end content section -->

<!-- start produtos -->
<?php echo get_template_part('part-tendas'); ?>
<!-- end produtos -->

<?php get_footer(); ?>
