<?php

/**
 * Template Name: Single Artigos
 */
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
while (have_posts()) :
  the_post();

  $params_pagetitle = array(
    'titulo'    => 'Artigos e Notícias',
    'subtitulo' => 'Tendas Brasil • Artigos e Notícias • ' . get_the_title()
  );

  echo get_template_part('part-pagetitle', null, $params_pagetitle);

  $cat_id = uebb_blog_categoria();
  $tax = null;

  if ($cat_id) {
    $tax = get_term($cat_id, 'uebb_blog_taxonomy');
  }
?>
  <!-- end pagetitle -->

  <!-- start content page -->
  <section class="padding-50px-top md-padding-30px-top padding-60px-bottom md-padding-40px-bottom wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-md-9 col-lg-8">

          <p class="button-text primary400-txt margin-30px-top margin-10px-bottom wow fadeIn" data-wow-delay="0.8s"><?php echo $tax->name; ?></p>
          <h1 class="header2 margin-10px-bottom wow fadeIn" data-wow-delay="1.0s"><?php the_title(); ?></h1>
          <p class="subtitle2 dark600-txt margin-30px-bottom wow fadeIn" data-wow-delay="1.2s"><?php echo get_field('uebb-blog-subtitulo'); ?></p>
          <img class="margin-30px-bottom border-radius-4 wow fadeIn" data-wow-delay="1.4s" src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
          <div class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s"><?php the_content(); ?></div>

        </div>
      </div>
    </div>
  </section>

  <!-- nav post -->
  <?php echo get_template_part('part-nav-post'); ?>
  <!-- nav post -->

  <!-- end content page -->
<?php endwhile;  ?>

<?php get_footer(); ?>
