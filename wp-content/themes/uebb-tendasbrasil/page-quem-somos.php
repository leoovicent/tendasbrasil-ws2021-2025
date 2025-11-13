<?php
/**
 * Template Name: Quem Somos
 */
?>

<?php get_header(); ?>

<!-- start pagetitle -->
<?php
  $params_pagetitle = array(
    'titulo'    => 'Quem Somos',
    'subtitulo' => 'Tendas Brasil • Quem Somos'
  );

  echo get_template_part('part-pagetitle', null, $params_pagetitle);
?>
<!-- end pagetitle -->

<!-- start content page -->
<section class="page-about-background padding-100px-tb sm-padding-80px-tb parallax wow fadeIn" data-stellar-background-ratio="0.5">
  <div class="container padding-40px-tb lg-padding-20px-tb md-no-padding-tb">
    <div class="row md-justify-content-center">

      <!-- left -->
      <div class="col-11 col-md-10 col-lg-8 col-xl-6 last-paragraph-no-margin">
        <p class="button-text primary400-txt margin-10px-bottom wow fadeIn" data-wow-delay="0.6s">Seja bem-vindo</p>
        <h1 class="header1 margin-10px-bottom wow fadeIn" data-wow-delay="0.6s">Tendas Brasil</h1>
        <p class="body1 margin-30px-bottom wow fadeIn" data-wow-delay="0.6s">Presente no envio e fornecimento para todo o território nacional, a Tendas Brasil® é uma empresa voltada à fabricação especializada em materiais de coberturas, que trabalha hoje como fornecedora principal de tendas, galpões e coberturas para multinacionais, refinarias e empresas de engenharia por todo o país.</p>
        
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">A valorização e o fortalecimento da sua marca vêm transformando a Tendas Brasil® em um dos principais atuantes deste segmento no país.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">A competitividade comercial tem exigido a exibição e o florescimento do potencial de alcance da Tendas Brasil®. Para isso, a empresa vem investindo fortemente em estratégias que alavancam o crescimento, assim como na diversidade de cases e participações especiais entre os maiores nomes em construção e desenvolvedores de projetos voltados à infraestrutura e organização de eventos. Moderno sistema de gestão, integrado ao aumento de produtividade e especialização de mão de obra, tem sido o nosso principal foco.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">A Tendas Brasil® trabalha para levar seus valores e seu comprometimento por onde passa, gerando oportunidades de trabalho locais e contribuindo para o desenvolvimento e satisfação de clientes e empresas às quais atende.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">Sediada em Goiânia/GO, na Av. Rio Verde nº 4.690, Vila Rosa - CEP 74345-100, a C F Borges (CNPJ 42.009.097/0001-43) opera sob a marca Tendas Brasil® e está sempre pronta para atender você. Entre em contato pelo telefone (62) 3290-7830 e conheça nossos serviços.</p>
        <p class="body2 dark600-txt no-margin wow fadeIn" data-wow-delay="0.6s">Esse é o nosso modelo de negócio: bom para a Tendas Brasil®, bom para todos!</p>

        <h4 class="subtitle2 margin-60px-top margin-30px-bottom md-margin-40px-top md-margin-20px-bottom wow fadeIn" data-wow-delay="0.6s">Nossa História</h4>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">Em 2006, à Tendas Brasil iniciou o seu trabalho e a cada dia mais se consolida como uma marca forte, frente ao mercado de Tendas e coberturas para: licitações, projetos, obras e eventos.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">Além da fabricação de tendas, projetos especiais em galpões e alguns outros produtos que auxiliam o cliente em suas ações promocionais ou em lazer; a Tendas Brasil também se apresenta como a melhor em preço de mercado; isso porque trabalhamos priorizando o lado sustentável e ambiental.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">Diferenciando-se em qualidade de matéria prima e ainda oferecendo aos clientes/empresas a possibilidade de personalizar seu produto e/ou revende-lo comprando diretamente da fábrica, dispomos de atendimento logístico, o que tem possibilitado a exportação de tendas para todo o país.</p>
        <p class="body2 dark600-txt wow fadeIn" data-wow-delay="0.6s">Pode-se afirmar que o crescimento alavancado de vendas nos últimos anos, deve-se a esse comprometimento, a variedade de produtos e serviços e a sua qualidade.</p>
        
        <div class="w-100 md-text-center margin-50px-top md-margin-40px-top md-margin-80px-bottom">
          <a class="button btn-primary400-outline button-text" href="<?php bloginfo('url'); ?>/produtos/tenda-piramidal">Conheça nossas tendas<i class="uil uil-arrow-right margin-5px-left"></i></a>
        </div>
      </div>

      <!-- right -->
      <div class="col-11 col-md-10 col-lg-4 col-xl-3">
        <div>
          <div class="subtitle2 primary400-txt margin-10px-bottom">Missão</div>
          <div class="body2 dark600-txt margin-40px-bottom">Cobrir os 4 cantos do país, com inteligência e responsabilidade, atendendo assim, as necessidades desse aquecido e emergente mercado.</div>
        </div>
        <div>
          <div class="subtitle2 primary400-txt margin-10px-bottom">Visão</div>
          <div class="body2 dark600-txt margin-40px-bottom">Atender todo território nacional, ser referência em levar soluções simples e eficazes, gerando resultados positivos e sanando os problemas causados pela falta de cobertura segura.</div>
        </div>
        <div>
          <div class="subtitle2 primary400-txt margin-10px-bottom">Valores</div>
          <div class="body2 dark600-txt margin-40px-bottom">Ética, Responsabilidade, Compromisso, Foco e Transparência.</div>
        </div>
        <div>
          <div class="subtitle2 primary400-txt margin-10px-bottom">Propósito</div>
          <div class="body2 dark600-txt m-0">Ter o cliente como ponto focal, cumprindo sempre com o prometido.</div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- end content page -->

<!-- start produtos -->
<?php echo get_template_part('part-tendas'); ?>
<!-- end produtos -->

<?php get_footer(); ?>
