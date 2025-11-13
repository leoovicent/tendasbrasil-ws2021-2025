<!-- start articles -->
<section id="fique-por-dentro" class="padding-60px-top padding-80px-bottom md-padding-40px-bottom sm-padding-20px-bottom wow fadeIn" data-wow-delay="0.2s">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-11 wow fadeInUp" data-wow-delay="0.4s">
        <p class="body2 primary400-txt margin-10px-bottom text-center">Artigos e Notícias</p>
        <h4 class="subtitle2 margin-50px-bottom text-center">Acompanhe nossas dicas e notícias e saiba mais sobre como usar e cuidar da sua tenda</h4>
      </div>
    </div>

    <div class="row justify-content-center">

      <!-- start blog items -->
      <?php echo get_template_part('part-blog-items', null, array('per_page' => 4)); ?>
      <!-- end blog items -->

    </div>

    <div class="row justify-content-center">
      <div class="col-auto md-margin-10px-top md-margin-20px-bottom sm-margin-40px-bottom">
        <a class="button btn-primary400-outline button-text" href="<?php bloginfo('url'); ?>/artigos-e-noticias">Ver mais artigos<i class="uil uil-arrow-right margin-5px-left"></i></a>
      </div>
    </div>

  </div>
</section>
<!-- end articles -->
