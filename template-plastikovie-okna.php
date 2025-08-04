<?php
// Template name: Пластиковые окна
get_header();

$title    = 'Пластиковые окна с установкой от профессионалов';
$subtitle = 'Сейчас самое время купить долговечные пластиковые окна у нас';
$image    = 2;

?>

<?php get_template_part( 'parts/hero', '', [
	'title'    => $title,
	'subtitle' => $subtitle,
	'image'    => $image
] ); ?>

  <section class="section section-sub">
    <div class="container">
      <h2 class="section__title">У нас всегда вы можете заказать окна ведущих марок</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="section-sub__item">
            <img src="<?= get_theme_file_uri( 'assets/img/logo-rehau.svg' ); ?>" alt="Рехау">
            <a href="<?= site_url( '/okna/plastikovye-okna/plastikovye-okna-rehau/' ); ?>">Пластиковые окна Рехау</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-sub__item">
            <img src="<?= get_theme_file_uri( 'assets/img/logo-kbe.webp' ); ?>" alt="KBE">
            <a href="<?= site_url( '/okna/plastikovye-okna/plastikovye-okna-kbe/' ); ?>">Пластиковые окна KBE</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-sub__item">
            <img src="<?= get_theme_file_uri( 'assets/img/logo-novotex.svg' ); ?>" alt="Novotex">
            <a href="<?= site_url( '/okna/plastikovye-okna/plastikovye-okna-novotex/' ); ?>">Пластиковые окна Novotex</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-sub__item">
            <img src="<?= get_theme_file_uri( 'assets/img/logo-melke.webp' ); ?>" alt="Melke">
            <a href="<?= site_url( '/okna/plastikovye-okna/plastikovye-okna-melke/' ); ?>">Пластиковые окна Melke</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-sub__item">
            <img src="<?= get_theme_file_uri( 'assets/img/logo-proplex.webp' ); ?>" alt="Проплекс">
            <a href="<?= site_url( '/okna/plastikovye-okna/plastikovye-okna-propleks/' ); ?>">Пластиковые окна Проплекс</a>
          </div>
        </div>
      </div>

    </div>
  </section>


  <main class="site-main">

    <div class="container">
		<?php the_content(); ?>
    </div>

  </main>

<?php get_footer();