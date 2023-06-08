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
    <section class="slider-one">
      <div class="container">
        <div class="swiper slider-one-swiper">
          <div class="swiper-wrapper">
            <?php if( have_rows('slide-one') ): while( have_rows('slide-one') ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="slider-one__inner">
                <div class="slider-one__img-wrapper">
                  <img class="slider-one__img" src="<?php echo get_sub_field('slider-one-img'); ?>" alt="Слайд">
                </div>
                <div class="slider-one__text-wrapper">
                  <span class="title slider-one__title"><?php echo get_sub_field('slider-one-title'); ?></span>
                  <span class="slider-one__subtitle"><?php echo get_sub_field('slider-one-subtitle'); ?></span>
                  <?php if( have_rows('slide-one-btn') ): while( have_rows('slide-one-btn') ) : the_row(); ?>
                    <a href="<?php echo get_sub_field('slider-one-btn-link'); ?>" class="main-btn slider-one__btn" target="_blank">
                      <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                      <span> <?php echo get_sub_field('slider-one-btn-name'); ?></span>
                    </a>
                  <?php endwhile; endif; ?>
                </div>
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
    </section>
    <section class="about">
      <div class="container">
        <div class="about__wrapper">
          <div class="about__img">
            <img src="<?php echo get_template_directory_uri() ?>/app/img/about.png" alt="О Нас">
          </div>
          <div class="about__content">
            <h2 class="title about__title">О нас</h2>
            <p class="about__text" >Компания Правовые Технологии - официальный представитель Общероссийской сети распространения правовой информации КонсультантПлюс</p>
            <p class="about__text" >Основа нашего успеха при работе с нами - надежная справочно-правовая система КонсультантПлюс, уникальные услуги по сопровождению и адаптпции,  профессиональные дружелюбные сотрудники</p>
            <a href="/o-kompanii/" class="main-btn about__btn" target="_blank">
              <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
              <span>Подробнее</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="uslugi">
      <div class="container">
        <div class="uslugi__wrap">
          <h3 class="title uslugi__title">Наши услуги</h3>
          <div class="uslugi__card-wrap">
            <a href="#" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="uslugi__card-title">Линия консультации</span>
                <span class="uslugi__card-text">Сделает Вашу работу более эффективной
                  и комфортной. Поможет оперативно решить Ваш вопрос или профессиональную задачу
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi1.jpg" alt="Услуги">
            </a>
            <a href="#" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="uslugi__card-title">Обучение</span>
                <span class="uslugi__card-text">Поможет эффективно использовать все возможности КонсультантПлюс. Семинары
                  и курсы повышения квалификации поддержат Ваш профессионализм
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi2.jpg" alt="Услуги">
            </a>
            <a href="#" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="uslugi__card-title">Персональный менеджер</span>
                <span class="uslugi__card-text">Обеспечит работу КонсультантПлюс
                  на Вашем устройстве. Поможет ориентироваться в сервисах нашей компании
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi3.jpg" alt="Услуги">
            </a>
            <a href="#" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="uslugi__card-title">Подписаться на рассылки</span>
                <span class="uslugi__card-text">Рассылка с обзорами законодательства поможет своевременно узнать о важных
                  для Вас изменениях
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi4.jpg" alt="Услуги">
            </a>
          </div>
          <a href="/service/" class="main-btn-white uslugi__btn" target="_blank">
            <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
            <span>Посмотреть все услуги</span>
          </a>
        </div>
      </div>
    </section>
    <section class="sistem">
      <div class="container">
        <div class="sistem__wrap">

        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>

