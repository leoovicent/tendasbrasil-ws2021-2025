<?php
	$items = array(
    array( 'tenda' => 'Tenda<br>Piramidal',	     'alt' => 'Tenda Piramidal',      'image' => 'cover-tenda-piramidal-color',       'link' => 'tenda-piramidal',     ),
    array( 'tenda' => 'Tenda<br>Sanfonada',	     'alt' => 'Tenda Sanfonada',      'image' => 'cover-tenda-sanfonada-color',       'link' => 'tenda-sanfonada',     ),    
	array( 'tenda' => 'Tenda<br>Galpão',	     'alt' => 'Tenda Galpão',         'image' => 'cover-tenda-galpao-color',          'link' => 'tenda-galpao',        ),
	array( 'tenda' => 'Tenda<br>Carpa',	  		 'alt' => 'Tenda Carpa',    	  'image' => 'cover-tenda-carpa-color',			  'link' => 'tenda-carpa',    	   ),
	array( 'tenda' => 'Tenda<br>Calhada',		 'alt' => 'Tenda Calhada',	      'image' => 'cover-tenda-calhada-color',   	  'link' => 'tenda-calhada',	   ),    
    array( 'tenda' => 'Tenda<br>para Obras',     'alt' => 'Tenda para Obras',     'image' => 'cover-tenda-para-obras-color',      'link' => 'tenda-para-obras',    ),
    array( 'tenda' => 'Tenda<br>Tensionada',     'alt' => 'Tenda Tensionada',     'image' => 'cover-tenda-tensionada-color',      'link' => 'tenda-tensionada',    ),
//  array( 'tenda' => 'Tenda<br>Chapéu',  		 'alt' => 'Tenda Chapéu',  		  'image' => 'cover-tenda-chapeu-color',    	  'link' => 'tenda-chapeu', 	   ),    //
    array( 'tenda' => 'Tenda<br>Personalizada',  'alt' => 'Tenda Personalizada',  'image' => 'cover-tenda-personalizada-color',   'link' => 'tenda-personalizada', ),
    array( 'tenda' => 'Tenda<br>Sanitária',	     'alt' => 'Tenda Sanitária',      'image' => 'cover-tenda-sanitaria-color',       'link' => 'tenda-sanitaria',     ),
//  array( 'tenda' => 'Kit<br>Ombrelone',        'alt' => 'Kit Ombrelone',        'image' => 'cover-kit-ombrelone-color',         'link' => 'kit-ombrelone',       ),
	);
?>

<!-- start spacing -->
<section class="slider-products-padding no-padding-bottom"></section>
<!-- end spacing -->

<section id="venda-e-locacao" class="slider-products no-padding-top padding-10px-bottom">
	<div class="container-fluid">
		<div class="row">

			<!-- title -->
			<div class="col-12 text-center margin-80px-bottom sm-margin-40px-bottom wow fadeInUp" data-wow-delay="0.4s">
				<h2 class="button-text primary400-txt">Venda e Locação</h2>
				<h3 class="header3 dark900-txt">Conheça nossos produtos</h3>
			</div>

			<!-- slider -->
			<div class="col-12 hover-option4 margin-5px-bottom wow fadeInUp" data-wow-delay="0.4s">
				<div class="swiper-multy-row-container overflow-hidden">

					<div class="swiper-wrapper">

						<?php foreach ( $items as $index => $item ) : ?>
						<!-- slider item -->
						<div class="swiper-slide grid-item">
							<a href="<?php bloginfo('url'); ?>/produtos/<?php echo $item['link'] ?>">
								<figure>
									<div class="portfolio-img border-radius-8"><img class=" border-radius-8" src="<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['image'] ?>.jpg" alt="<?php echo $item['alt'] ?>"/></div>
									<figcaption class="d-flex align-items-end justify-content-start text-left border-radius-8 padding-30px-all">
										<div class="portfolio-hover-content position-relative last-paragraph-no-margin">
											<h2 class="header2 dark100-txt m-0"><?php echo $item['tenda'] ?></h2>
											<span class="button button-text dark100-txt">Ver mais <i class="uil uil-plus"></i></span>
										</div>
									</figcaption>
								</figure>
							</a>
						</div>
						<?php endforeach; ?>

					</div>

					<!-- start slider pagination -->
					<div class="swiper-portfolio-prev swiper-button-black-highlight"><i class="ti-arrow-left"></i></div>
					<div class="swiper-portfolio-next swiper-button-black-highlight"><i class="ti-arrow-right"></i></div>
					<!-- end slider pagination -->

				</div>
			</div>

		</div>
	</div>
</section>
