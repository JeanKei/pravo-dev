<?php
/*
Template Name: семинары
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
    <section class="seminars-page">
      <div class="container">
        <div class="seminars-page__descr">
          <?php the_content(); ?>
        </div>
        <h2 class="title breadcrumb__title">Расписание семинаров </h2>
        <div class="seminars-page__cards">
          <?php if( have_rows('seminars-page-card') ): while( have_rows('seminars-page-card') ) : the_row(); ?>
            <div class="seminars-page__card">
              <div class="seminars-page__img">
                <img class="info__card-img" src="<?php echo get_sub_field('seminars-page-card-img'); ?>" alt="Лектор">
              </div>
              <div class="seminars-page__content">
                <span class="seminars-page__content-title"><?php echo get_sub_field('seminars-page-card-title'); ?></span>
                <span class="seminars-page__content-subtitle">Лектор</span>
                <span class="seminars-page__content-lector"><?php echo get_sub_field('seminars-page-card-lector'); ?></span>
                <span class="seminars-page__content-subtitle seminars-page__content-subtitle--tesis">Разбираем следующие вопросы:</span>
                <?php if( have_rows('seminars-page-tesis') ): while( have_rows('seminars-page-tesis') ) : the_row(); ?>
                  <ul class="seminars-page__content-list">
                    <li class="seminars-page__content-link">
                      <img class="seminars-page__check" src="<?php echo get_template_directory_uri() ?>/app/img/check.svg" alt="галочка">
                      <span> <?php echo get_sub_field('seminars-page-tesis-text'); ?></span>
                    </li>
                  </ul>
                <?php endwhile; endif; ?>
                <div class="seminars-page__bottom-group">
                  <div class="seminars-page__time-wrap">
                    <div class="seminars-page__time-wrap-left">
                      <img class="seminars-page__check" src="<?php echo get_template_directory_uri() ?>/app/img/date.svg" alt="Дата">
                      <span><?php echo get_sub_field('seminars-page-card-date'); ?></span>
                    </div>
                    <div class="seminars-page__time-wrap-right">
                      <img class="seminars-page__check" src="<?php echo get_template_directory_uri() ?>/app/img/time.svg" alt="Время">
                      <span><?php echo get_sub_field('seminars-page-card-time'); ?></span>
                    </div>
                  </div>
                  <button class="main-btn seminars-page__btn data-madal" data-graph-path="lead" data-nametitle="Заявка на участие: <?php echo get_sub_field('seminars-page-card-title'); ?>">
                    <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                    <span>Заявка на участие</span>
                  </button>
                </div>
              </div>
            </div>
          <?php   endwhile;  ?>
          <?php else:
            echo '<p class="seminars-page__not">Извините, на данный момент нет доступных для записи семинаров, которыми вы интересуетесь </p>';
          endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
