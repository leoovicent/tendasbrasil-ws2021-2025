<?php
$per_page = 100;
if ($args && $args['per_page']) $per_page = $args['per_page'];

// the query
$post_args = array('post_type' => 'uebb_blog', 'order' => 'DESC', 'posts_per_page' => $per_page);
$the_query = new WP_Query($post_args);

// start loop blog
while ($the_query->have_posts()) :
  $the_query->the_post();
  $cat_id = uebb_blog_categoria();
  $tax = null;
  $post_tags = get_the_terms(get_the_ID(), 'uebb_blog_taxonomy');

  if ($cat_id) {
    $tax = get_term($cat_id, 'uebb_blog_taxonomy');
  }
?>

  <!-- blog item -->

  <?php if ($post_tags) : ?>
    <li class="grid-item <?php foreach ($post_tags as $tag) {
                            echo $tag->slug . ' ';
                          } ?> wow zoomIn col-11 col-sm-6 col-lg-3 md-margin-50px-bottom margin-60px-bottom wow fadeInRight" data-wow-delay="0.4s" style="list-style: none;">
    <?php else : ?>
    <li class="grid-item wow zoomIn col-11 col-sm-6 col-lg-3 md-margin-50px-bottom margin-60px-bottom wow fadeInRight" data-wow-delay="0.4s" style="list-style: none;">
    <?php endif; ?>

    <div class="blog-card">
      <a href="<?php echo esc_url(get_permalink()); ?>">
        <div class="blog-card-cover" style="background-image: url('<?php echo catch_that_image(); ?>');"></div>
      </a>
      <span class="overline-text primary400-txt">
        <?php echo $tax ? $tax->name : ''; ?>
      </span>
      <a href="<?php echo esc_url(get_permalink()); ?>">
        <h3 class="body1 dark900-txt margin-10px-tb"><?php echo mb_strimwidth(get_the_title(), 0, 40, '...'); ?></h3>
      </a>
      <p class="body2 dark600-txt sm-margin-10px-bottom md-margin-15px-bottom margin-20px-bottom"><?php echo mb_strimwidth(get_field('uebb-blog-subtitulo'), 0, 94, '...'); ?></p>
      <a class="button button-text dark400-txt p-0" href="<?php echo esc_url(get_permalink()); ?>">Ver artigo <i class="uil uil-arrow-right"></i></a>
    </div>
    </li>

  <?php
endwhile;
// end loop blog

if (!$the_query->found_posts) {
  echo '<div class="body2 margin-80px-tb">Nenhum artigo ainda!</div>';
}

wp_reset_postdata();
  ?>
