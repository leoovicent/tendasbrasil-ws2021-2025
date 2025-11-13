<?php
/**
* Template Name: Fale Conosco
*/
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
	$params_pagetitle = array(
		'titulo'    => 'Fale Conosco',
		'subtitulo' => 'Tendas Brasil • Fale Conosco'
	);

	echo get_template_part( 'part-pagetitle', null, $params_pagetitle );
?>
<!-- end pagetitle -->

<!-- start content page -->
<section class="padding-100px-tb sm-padding-80px-tb parallax wow fadeIn" data-wow-delay="0.4s">
  <div class="container padding-40px-tb lg-padding-20px-tb md-no-padding-tb">
    <div class="row justify-content-center">
			<div class="col-11 col-md-10 col-lg-9 col-xl-8 text-center">
				<p class="button-text primary400-txt margin-30px-top margin-10px-bottom wow fadeIn" data-wow-delay="0.8s">Contato</p>
				<h1 class="header4 margin-10px-bottom wow fadeIn" data-wow-delay="1.0s">Como podemos ajudar</h1>
				<p class="body1 dark600-txt margin-60px-bottom wow fadeIn" data-wow-delay="1.2s">Preencha o formulário abaixo e mande sua mensagem para a nossa equipe, todos os e-mails são respondidos o mais rápido possível.</p>
				<p class="subtitle1 margin-40px-bottom wow fadeIn" data-wow-delay="1.4s">Deixe sua mensagem</p>

				<!-- contact form -->
				<div class="wow fadeIn" data-wow-delay="1.6s">
					<?php echo do_shortcode('[contact-form-7 id="f9429a7" title="Fale Conosco"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="p-0">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<?php echo uebb_maps_embed(); ?>
			</div>
		</div>
	</div>
</section>
<!-- end content page -->

<?php get_footer(); ?>