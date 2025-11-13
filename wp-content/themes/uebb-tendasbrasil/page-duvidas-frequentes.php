<?php
/**
 * Template Name: Dúvidas Frequentes
 */
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
  $params_pagetitle = array(
    'titulo'    => 'Dúvidas Frequentes',
    'subtitulo' => 'Tendas Brasil • Dúvidas Frequentes'
  );

  echo get_template_part('part-pagetitle', null, $params_pagetitle);
?>
<!-- end pagetitle -->

<!-- start duvidas section -->
<section class="dark200-bgd padding-100px-tb sm-padding-80px-tb parallax wow fadeIn" data-wow-delay="0.4s">
  <div class="container padding-40px-tb lg-padding-20px-tb md-no-padding-tb">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-10 col-xl-9">
        <!-- start accordion -->
        <div class="panel-group accordion-style2" id="accordion-main">

          <?php echo do_shortcode("[uebb-faq]"); ?>

        </div>
        <!-- end accordion -->
      </div>
    </div>
  </div>
</section>
<!-- end duvidas section -->

<!-- start produtos -->
<?php echo get_template_part('part-tendas'); ?>
<!-- end produtos -->

<?php get_footer(); ?>
