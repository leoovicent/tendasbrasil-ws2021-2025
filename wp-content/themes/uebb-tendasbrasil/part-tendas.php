<?php
$items = array(
  array('title' => 'Tenda<br>Piramidal',     'image' => 'icone-tendas-piramidal',      'link' => '/produtos/tenda-piramidal',),
  array('title' => 'Tenda<br>Sanfonada',     'image' => 'icone-tendas-sanfonada',      'link' => '/produtos/tenda-sanfonada',),
  array('title' => 'Tenda<br>Galpão',        'image' => 'icone-tendas-galpao',         'link' => '/produtos/tenda-galpao',),
  array('title' => 'Tenda<br>Carpa',         'image' => 'icone-tendas-carpa',          'link' => '/produtos/tenda-carpa',),
  array('title' => 'Tenda<br>Calhada',       'image' => 'icone-tendas-calhada',        'link' => '/produtos/tenda-calhada',),
  array('title' => 'Tenda<br>para Obras',    'image' => 'icone-tendas-obras',          'link' => '/produtos/tenda-para-obras',),
  array('title' => 'Tenda<br>Tensionada',    'image' => 'icone-tendas-tensionada',     'link' => '/produtos/tenda-tensionada',),
//array('title' => 'Tenda<br>Chapéu',        'image' => 'icone-tendas-chapeuchines',   'link' => '/produtos/tenda-chapeu',),
  array('title' => 'Tenda<br>Personalizada', 'image' => 'icone-tendas-personalizadas', 'link' => '/produtos/tenda-personalizada',),
  array('title' => 'Tenda<br>Sanitária',     'image' => 'icone-tendas-sanitarias',     'link' => '/produtos/tenda-sanitaria',),
//array('title' => 'Kit<br>Ombrelone',       'image' => 'icone-tendas-ombrelone',      'link' => '/produtos/kit-ombrelone',),
);
?>

<section class="secundary500-bgd padding-60px-tb footer-product-list">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-md-10 col-lg-12 col-xl-12">
        <div class="row justify-content-center">

          <?php foreach ($items as $index => $item) : ?>

          <!-- item list -->
          <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">        
            <div class="padding-10px-all text-center">
              <a href="<?php bloginfo('url'); ?><?php echo $item['link'] ?>">
                <div class="secundary400-bgd border-radius-8 padding-20px-lr padding-20px-tb footer-product-item">
                  <img src="<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $item['image'] ?>.png" title="<?php echo $item['title'] ?>" style="max-width:80%;">
                  <div class="button-text dark900-txt"><?php echo $item['title'] ?></div>
                </div>
              </a>
            </div>
          </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</section>
