<?php
/*
Template Name: о компании
*/
?>
<?php get_header('main'); ?>
  <main class="main">
    <div class="breadcrumb">
      <div class="container">
        <div class="breadcrumb__wrap">
          <?php echo wpcourses_breadcrumb( ' / ' ); ?>
        </div>
        <h1 class="title breadcrumb__title"><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="company-page">
      <div class="container">
        <div class="company-page__content">
          <img class="company-page__content-img" src="<?php the_field('o-nas-img'); ?>" alt="О Компании">
          <div class="company-page__content-text">
            <?php the_field('o-nas-descr'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="company-page__cards">
        <div class="company-page__card">
          <div class="company-page__card-content">
            <span class="card-title company-page__card-title"><?php the_field('card1-title'); ?></span>
            <span class="card-text company-page__card-text"><?php the_field('card1-text'); ?></span>
          </div>
          <img class="company-page__img" src="<?php the_field('card1-img'); ?>" alt="Услуги">
        </div>
        <div class="company-page__card">
          <div class="company-page__card-content">
            <span class="card-title company-page__card-title"><?php the_field('card2-title'); ?></span>
            <span class="card-text company-page__card-text"><?php the_field('card2-text'); ?></span>
          </div>
          <img class="company-page__img" src="<?php the_field('card2-img'); ?>" alt="Услуги">
        </div>
        <div class="company-page__card">
          <div class="uslugi__card-content">
            <span class="card-title company-page__card-title"><?php the_field('card3-title'); ?></span>
            <span class="card-text company-page__card-text"><?php the_field('card3-text'); ?></span>
          </div>
          <img class="company-page__img" src="<?php the_field('card3-img'); ?>" alt="Услуги">
        </div>
      </div>
      <div class="company-page__clients">
        <h2 class="title company-page__clients-title">Наши клиенты</h2>
        <span class="company-page__clients-subtitle">Нас выбирают организации любого масштаба и вида деятельности</span>
        <div class="swiper slider-onas">
          <div class="swiper-wrapper">
            <?php if( have_rows('o-nas-slide') ): while( have_rows('o-nas-slide') ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="slider-onas__inner">
                <img class="slider-one__img" src="<?php echo get_sub_field('o-nas-slide-img'); ?>" alt="Слайд">
              </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="swiper-pagination slider-pagination"></div>
          <button class="slider-btn-prev slider-btn">
            <img class="slider-btn-img" src="<?php echo get_template_directory_uri() ?>/app/img/right.svg" alt="Стрелка">
          </button>
          <button class="slider-btn-next slider-btn">
            <img class="slider-btn-img" src="<?php echo get_template_directory_uri() ?>/app/img/left.svg" alt="Стрелка">
          </button>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
