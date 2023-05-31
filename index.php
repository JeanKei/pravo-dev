<?php get_header(); ?>
  <main class="main">
    <section class="hero">
      <div class="container">
        <div class="hero__wrapper">
          <div class="hero__content">
            <h1 class="hero__title">Региональный центр КонсультантПлюс в забайкальском крае</h1>
            <span class="hero__subtitle">Поможем Вашей организации использовать все преимущества системы КонсультантПлюс</span>
            <div class="hero__btn-group">
              <button class="main-btn hero__btn">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Заказать звонок</span>
              </button>
              <a href="/service" class="main-btn hero__btn hero__btn--last">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Наши услуги</span>
              </a>
            </div>
          </div>
          <div class="hero__img">
            <img src="<?php echo get_template_directory_uri() ?>/app/img/hero.png" alt="Консультант плюс">
            <div class="hero__absolute">
              <span class="hero__absolute-title">Ваш Консультант -</span>
              <span class="hero__absolute-subtitle">официальный дилерский центр разработчика КонсультантПлюс</span>
            </div>
          </div>
          <div class="hero__btn-group hero__btn-group--mobile">
            <button class="main-btn hero__btn">
              <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
              <span>Заказать звонок</span>
            </button>
            <a href="/service" class="main-btn hero__btn hero__btn--last">
              <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
              <span>Наши услуги</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="consult">
      <div class="container">
        <div class="consult__wrapper">
          <div class="consult__card">
            <div class="consult__card-wrap">
              <img class="consult__img" src="<?php echo get_template_directory_uri() ?>/app/img/consult1.png" alt="Консультант плюс">
              <span class="consult__title">Консультант плюс</span>
              <span class="consult__subtitle">Условия и тарифы справочно-правовой системы</span>
            </div>
          </div>
          <div class="consult__card">
          <div class="consult__card-wrap consult__card-wrap--middle">
            <img class="consult__img" src="<?php echo get_template_directory_uri() ?>/app/img/consult2.png" alt="Линия консультации">
              <span class="consult__title">Линия консультации</span>
              <span class="consult__subtitle">Профессиональная поддержка вашего бизнеса</span>
            </div>
          </div>
          <div class="consult__card">
            <div class="consult__card-wrap">
              <img class="consult__img" src="<?php echo get_template_directory_uri() ?>/app/img/consult3.png" alt="Семинары">
              <span class="consult__title">Семинары</span>
              <span class="consult__subtitle">Проф. обучение по актуальным вопросам</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>

