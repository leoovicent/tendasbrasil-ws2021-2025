<?php
$items = array(
  array('image' => 'cover-blog-artigo-1.jpg', 'category' => 'Inovação',         'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-2.jpg', 'category' => 'Economia',         'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-3.jpg', 'category' => 'Maio Ambiente',    'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-4.jpg', 'category' => 'Sustentabilidade', 'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-4.jpg', 'category' => 'Tecnologia',       'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-3.jpg', 'category' => 'Brasil',           'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-2.jpg', 'category' => 'Goiás',            'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
  array('image' => 'cover-blog-artigo-1.jpg', 'category' => 'Tecnologia',       'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo',),
);
?>

<?php
$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
$params_pagetitle = array(
  'titulo'    => 'Artigos e Notícias',
  'subtitulo' => 'Tendas Brasil • Artigos e Notícias'
);

echo get_template_part('part-pagetitle', null, $params_pagetitle);
?>
<!-- end pagetitle -->

<!-- start content page -->
<section class="padding-80px-top md-padding-60px-top sm-padding-50px-top padding-20px-bottom wow fadeIn" data-wow-delay="0.4s">
  <div class="container">

    <!-- filters -->
    <div class="blog-tags">
      <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
        <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="button small-button btn-dark900-outline body2">Todas as categorias</a></li>
        <?php
        $tags = get_terms([
          'taxonomy' => 'uebb_blog_taxonomy',
          'hide_empty' => false
        ]);

        if (!empty($tags)) {
          foreach ((array) $tags as $tag) {
            echo '<li class="nav"><a href="javascript:void(0);" data-filter=".' . $tag->slug . '" class="button small-button btn-dark900-outline body2">' . $tag->name . '</a></li>';
          }
        }
        ?>
      </ul>
    </div>

    <!-- articles -->
    <ul class="portfolio-grid portfolio-metro-grid work-4col metro-gallery hover-option10 gutter-medium lightbox-portfolio">
      <li class="grid-sizer"></li>

      <!-- start blog items -->
      <?php echo get_template_part('part-blog-items'); ?>
      <!-- end blog items -->

    </ul>

  </div>
</section>
<!-- end content page -->

<?php get_footer(); ?>
