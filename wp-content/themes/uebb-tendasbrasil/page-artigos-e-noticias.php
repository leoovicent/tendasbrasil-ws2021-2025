<?php
/**
* Template Name: Artigos e Notícias
*/
?>

<?php
$items = array(
    array( 'image' => 'cover-blog-artigo-1.jpg', 'category' => 'Inovação',         'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-2.jpg', 'category' => 'Economia',         'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-3.jpg', 'category' => 'Maio Ambiente',    'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-4.jpg', 'category' => 'Sustentabilidade', 'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-4.jpg', 'category' => 'Tecnologia',       'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-3.jpg', 'category' => 'Brasil',           'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-2.jpg', 'category' => 'Goiás',            'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
    array( 'image' => 'cover-blog-artigo-1.jpg', 'category' => 'Tecnologia',       'link' => 'lorem-ipsum-dolor-sit-amet-consecte-adipiscing', 'title' => 'Lorem ipsum dolor sit amet consecte adipiscing rhoncus sit amet semper non auctor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit etiam ipsum mi, rhoncus sit amet semper non, auctor ac felis morbi interdum vitae quam ut commodo', ),
);
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
	$params_pagetitle = array(
		'titulo'    => 'Artigos e Notícias',
		'subtitulo' => 'Tendas Brasil • Artigos e Notícias'
	);

	echo get_template_part( 'part-pagetitle', null, $params_pagetitle );
?>
<!-- end pagetitle -->

<!-- start content page -->
<section class="padding-80px-top md-padding-60px-top sm-padding-50px-top padding-20px-bottom wow fadeIn" data-wow-delay="0.4s">
	<div class="container">

		<!-- filters -->
		<div class="row justify-content-center margin-60px-bottom md-margin-50px-bottom sm-margin-40px-bottom">
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Todas as categorias</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Inovação</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Tecnologia</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Sustentabilidade</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Meio Ambiente</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Economia</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Goiás</a></div>
			<div class="col-auto p-0 margin-10px-right margin-10px-bottom sm-margin-5px-right sm-margin-5px-bottom"><a class="button small-button btn-dark900-outline body2" href="#">Brasil</a></div>
		</div>

		<!-- articles -->
		<div class="row justify-content-center">

			<?php foreach ( $items as $index => $item ) : ?>
		    <!-- item list -->
            <div class="col-11 col-sm-6 col-lg-3 md-margin-50px-bottom margin-60px-bottom wow fadeInRight" data-wow-delay="0.4s">
                <div class="blog-card">
                    <a href="<?php bloginfo('url'); ?>/artigos-e-noticias/<?php echo $item['link'] ?>"><div class="blog-card-cover" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['image'] ?>');"></div></a>
                    <span class="overline-text primary400-txt"><?php echo $item['category'] ?></span>
                    <a href="<?php bloginfo('url'); ?>/artigos-e-noticias/<?php echo $item['link'] ?>"><h3 class="body1 dark900-txt margin-10px-tb"><?php echo $item['title'] ?></h3></a>
                    <p class="body2 dark600-txt sm-margin-10px-bottom md-margin-15px-bottom margin-20px-bottom"><?php echo $item['description'] ?></p>
                    <a class="button button-text dark400-txt p-0" href="<?php bloginfo('url'); ?>/artigos-e-noticias/<?php echo $item['link'] ?>">Ver artigo <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>

		</div>

	</div>
</section>
<!-- end content page -->

<?php get_footer(); ?>
