<?php
$clients = [
	[ 'name' => 'Самолет', 'logo' => get_theme_file_uri( 'assets/img/clients/samolet.png' ) ],
	[ 'name' => 'А101', 'logo' => get_theme_file_uri( 'assets/img/clients/a101.png' ) ],
	[ 'name' => 'Первый канал', 'logo' => get_theme_file_uri( 'assets/img/clients/pervyj-kanal.png' ) ],
	[ 'name' => 'МГТС', 'logo' => get_theme_file_uri( 'assets/img/clients/mgts.png' ) ],
	[ 'name' => 'М.Видео', 'logo' => get_theme_file_uri( 'assets/img/clients/mvideo.png' ) ],
	[ 'name' => 'Gloria Jeans', 'logo' => get_theme_file_uri( 'assets/img/clients/gloriya.png' ) ],
	[ 'name' => 'KFC', 'logo' => get_theme_file_uri( 'assets/img/clients/kfc.png' ) ],
	[ 'name' => 'Аэрофлот', 'logo' => get_theme_file_uri( 'assets/img/clients/aeroflot.png' ) ],
];
?>

<section class="section trust-us">

  <div class="container">
    <div class="section__inner">
      <h2 class="section__title">Нам доверяют</h2>

      <div class="row trust-us__list">
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">25</div>
            <div class="trust-us__description">лет на рынке</div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">50 тыс.</div>
            <div class="trust-us__description">установленных окон</div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">120</div>
            <div class="trust-us__description">человек в команде</div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">95%</div>
            <div class="trust-us__description">клиентов возвращаются</div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">120</div>
            <div class="trust-us__description">человек в команде</div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="trust-us__item">
            <div class="trust-us__number">95%</div>
            <div class="trust-us__description">клиентов возвращаются</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="clients">

    <div class="brandsCarousel container">
      <div class="carouselTrack">
		  <?php foreach ( $clients as $client ) : ?>
            <div class="brandLogo">
              <img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
            </div>
		  <?php endforeach; ?>
		  <?php foreach ( $clients as $client ) : ?>
            <div class="brandLogo">
              <img src="<?= $client['logo']; ?>" alt="<?= $client['name']; ?>">
            </div>
		  <?php endforeach; ?>
      </div>
    </div>

  </section>

</section>

