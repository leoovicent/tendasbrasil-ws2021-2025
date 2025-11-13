<section class="no-padding-top padding-60px-bottom md-padding-40px-bottom">
  <div class="container">
    <div class="row justify-content-between">

      <?php $prev_post = get_previous_post();
      if (!empty($prev_post)) : ?>
        <div class="col-auto wow fadeInUp" data-wow-delay="0.6s"><a class="button no-icon btn-dark900-outline button-text text-center width-150px md-width-120px" href="<?php echo get_permalink($prev_post->ID); ?>">Anterior</a></div>
      <?php endif; ?>

      <?php $next_post = get_next_post();
      if (!empty($next_post)) : ?>
        <div class="col-auto wow fadeInUp" data-wow-delay="0.8s"><a class="button no-icon btn-dark900 button-text text-center width-150px md-width-120px" href="<?php echo get_permalink($next_post->ID); ?>">Próximo</a></div>
      <?php endif; ?>

    </div>
  </div>
</section>
