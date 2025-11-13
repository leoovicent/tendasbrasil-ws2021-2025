<?php
	$titulo    = $args['titulo'];
	$subtitulo = $args['subtitulo'];
?>

<section class="top-space padding-80px-tb md-padding-90px-tb sm-padding-100px-tb parallax dark300-bgd wow fadeIn" style="background-image: url('<?php bloginfo('template_url'); ?>/images/img-pagetitle.jpg');" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
				<p class="header4 dark600-txt no-margin"><?php echo $titulo ?></p>
				<p class="caption-text dark600-txt no-margin"><?php echo $subtitulo ?></p>
			</div>
		</div>
	</div>
</section>
