<!-- pegando slides -->
<?php $uebb_slides = new WP_Query( array( 'post_type' => 'uebb_faq', 'posts_per_page' => -1 ) ); ?>

<?php
if( $uebb_slides->have_posts() ) :
  $cont = 0;
  while ( $uebb_slides->have_posts() ) :

    $cont++;

    $uebb_slides->the_post();

    $pergunta  = get_field("uebb_faq_pergunta");
    $resposta  = get_field("uebb_faq_resposta");

    ?>

      <!-- item list --
      <div class="d-none panel">
        <div class="panel-heading">
          <a data-toggle="collapse" data-parent="#accordion" href="#item<?php echo $cont; ?>" class="collapsed" aria-expanded="false">
            <div class="panel-title body1 dark700-txt"><strong><?php echo $pergunta; ?></strong><span class="float-right"><i class="ti-minus"></i></span></div>
          </a>
        </div>
        <div id="item<?php echo $cont; ?>" class="panel-collapse collapse <?php echo ($cont==1) ? 'show' : '';?>" data-parent="#accordion" aria-expanded="false" role="tablist">
          <div class="panel-body">
            <p class="body2 dark700-txt m-0"><?php echo $resposta; ?></p>
          </div>
        </div>
      </div> -->

      <!-- start tab content -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapse<?php echo $cont; ?>">
            <div class="panel-title">
              <span class="body1 dark900-txt sm-width-80 d-inline-block"><strong><?php echo $pergunta; ?></strong></span>
              <i class="fas fa-angle-down float-right dark400-txt"></i>
            </div>
          </a>
        </div>
        <div id="collapse<?php echo $cont; ?>" class="panel-collapse collapse <?php echo ($cont==1) ? 'show' : '';?>" data-parent="#accordion-main">
          <div class="panel-body body1 dark700-txt"><?php echo $resposta; ?></div>
        </div>
      </div>
      <!-- end tab content -->

    <?php
  endwhile;
else:
  echo 'Crie seu primeiro faq para ser exibido aqui!';
endif; ?>
