<?php
	$items = array(
		array( 'number' => 'one',   ),
		array( 'number' => 'two',   ),
		array( 'number' => 'three', ),
		array( 'number' => 'four',  ),
		array( 'number' => 'five',  ),
		array( 'number' => 'six',  ),
	);
?>

<section class="dark500-bgd p-0 main-slider top-space wow fadeIn" data-wow-delay="0.6s">
	<div class="swiper-full-screen swiper-container w-100 white-move">
		<div class="swiper-wrapper slideshow-height">

			<?php foreach ( $items as $index => $item ) : ?>
			<!-- slider item -->
			<div class="swiper-slide slideshow-banner-<?php echo $item['number'] ?>">
				<div class="lens-overlay-slideshow"></div>
				<div class="container position-relative one-fourth-screen sm-height-400px">
					<div class="slider-typography text-center">
						<div class="slider-text-middle-main">
							<div class="slider-text-middle"></div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>

		</div>

		<!-- add pagination -->
		<div class="swiper-pagination swiper-pagination-white swiper-full-screen-pagination"></div>
		<!-- <div class="d-none swiper-button-next swiper-button-black-highlight"></div> -->
		<!-- <div class="d-none swiper-button-prev swiper-button-black-highlight"></div> -->

	</div>
</section>
