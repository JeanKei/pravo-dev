<?php get_header(); ?>
  <main class="main">
    <section class="hero">
      <div class="container">
        <div class="hero__wrapper">
          <div class="hero__content">
            <h1 class="hero__title">Региональный центр КонсультантПлюс в забайкальском крае</h1>
            <span class="hero__subtitle">Поможем Вашей организации использовать все преимущества системы КонсультантПлюс</span>
            <div class="hero__btn-group">
              <button class="main-btn hero__btn data-madal" data-graph-path="lead" data-nametitle="Заказать звонок">
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
            <button class="main-btn hero__btn data-madal" data-graph-path="lead" data-nametitle="Заказать звонок">
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
            <p class="text about__text" >Компания Правовые Технологии - официальный представитель Общероссийской сети распространения правовой информации КонсультантПлюс</p>
            <p class="text about__text" >Основа нашего успеха при работе с нами - надежная справочно-правовая система КонсультантПлюс, уникальные услуги по сопровождению и адаптпции,  профессиональные дружелюбные сотрудники</p>
            <a href="/o-kompanii/" class="main-btn about__btn">
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
            <a href="/service/consultline/" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="card-title uslugi__card-title">Линия консультации</span>
                <span class="card-text uslugi__card-text">Сделает Вашу работу более эффективной
                  и комфортной. Поможет оперативно решить Ваш вопрос или профессиональную задачу
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi1.jpg" alt="Услуги">
            </a>
            <a href="/service/obuchenie-rabote-s-sistemoj/" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="card-title uslugi__card-title">Обучение</span>
                <span class="card-text uslugi__card-text">Поможет эффективно использовать все возможности КонсультантПлюс. Семинары
                  и курсы повышения квалификации поддержат Ваш профессионализм
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi2.jpg" alt="Услуги">
            </a>
            <a href="/service/account-manager/" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="card-title uslugi__card-title">Персональный менеджер</span>
                <span class="card-text uslugi__card-text">Обеспечит работу КонсультантПлюс
                  на Вашем устройстве. Поможет ориентироваться в сервисах нашей компании
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi3.jpg" alt="Услуги">
            </a>
            <a href="/service/receive/" class="uslugi__card">
              <div class="uslugi__card-content">
                <span class="card-title uslugi__card-title">Подписаться на рассылки</span>
                <span class="card-text uslugi__card-text">Рассылка с обзорами законодательства поможет своевременно узнать о важных
                  для Вас изменениях
                </span>
              </div>
              <img class="uslugi__img" src="<?php echo get_template_directory_uri() ?>/app/img/main-uslugi4.jpg" alt="Услуги">
            </a>
          </div>
          <a href="/service/" class="main-btn-white uslugi__btn">
            <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
            <span>Посмотреть все услуги</span>
          </a>
        </div>
      </div>
    </section>
    <section class="sistem">
      <div class="container">
        <div class="sistem__wrap">
          <div class="sistem__content">
            <h4 class="title sistem__title">Надежная справочно-правовая система КонсультантПлюс</h4>
            <p class="text sistem__text">КонсультантПлюс - это эффективный инструмент и надежныйпомощник для специалиста, имеющего дело с законодательством</p>
            <p class="text sistem__text">Самая полная база правовой информации, фирменные обновляемыеразъяснения, удобный и быстрый поиск, видеосеминары,дружественный интерфейс и современные программные технологии</p>
            <div class="sistem__btn-group">
              <button href="#" class="sistem__card data-madal" data-graph-path="lead" data-nametitle="Получить бесплатный доступ">
                <div class="sistem__card-content">
                  <span class="card-title sistem__card-title  sistem__card-title--left">Получить бесплатный доступ</span>
                  <span class="card-text sistem__card-text sistem__card-text--left">Для изучения системы</span>
                </div>
                <img class="sistem__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/sistem1.png" alt="Получить бесплатный доступ">
              </button>
              <a href="/service/prices/" class="sistem__card">
                <div class="sistem__card-content">
                  <span class="card-title sistem__card-title">Рассчитать стоимость</span>
                  <span class="card-text sistem__card-text">Для вашей организации</span>
                </div>
                <img class="sistem__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/sistem2.png" alt="Рассчитать стоимость">
              </a>
            </div>
          </div>
          <div class="sistem__img-wrap">
            <img class="sistem__img" src="<?php echo get_template_directory_uri() ?>/app/img/sistembg.png" alt="система КонсультантПлюс">
          </div>
        </div>
      </div>
    </section>
    <section class="version">
      <div class="container">
        <div class="version__wrap">
          <h5 class="title version__title">выберите версию системы</h5>
          <div class="version__card-wrap">
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Версия для бухгалтера</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-buh.png" alt="Версия системы">
              </div>
            </div>
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Версия для юриста</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-ur.png" alt="Версия системы">
              </div>
            </div>
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Универсальная версия</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-un.png" alt="Версия системы">
              </div>
            </div>
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Версия для специалиста по кадрам</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-spec.png" alt="Версия системы">
              </div>
            </div>
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Версия для руководителя</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-dir.png" alt="Версия системы">
              </div>
            </div>
            <div href="#" class="version__card">
              <div class="version__card-content">
                <span class="card-title version__card-title">Версия для бюджетных организаций</span>
                <a href="/service/" class="main-btn-white version__card-btn">
                  <span>Подробнее</span>
                  <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
                </a>
              </div>
              <div class="version__img">
                <img class="version__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/ver-org.png" alt="Версия системы">
              </div>
            </div>
          </div>
          <a href="/service/" class="main-btn-white version__btn">
            <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
            <span>Посмотреть все версии</span>
          </a>
        </div>
      </div>
    </section>
    <section class="main-news">
      <div class="container">
        <h6 class="title main-news__title">Последние новостные материалы</h6>
        <div class="main-news__wrap">
          <?php	  // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => 3,
            'category'    => 1,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
                    // 							'tag'=>          'case',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post ); ?>
            <div class="main-news__card">
              <div class="main-news__card-header">
                <?php
                  if ( has_post_thumbnail() ) {

                      the_post_thumbnail( 'news-thumbnail' );

                  } else { ?>
                  <img class="main-news__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/no.png" alt="<?php the_title(); ?>" />
                <?php } ?>
                <span class="main-news__card-title-date">(Дата публикации) <?php echo get_the_date('d.m.Y'); ?> </span>
                <span href="<?php the_permalink() ?>" class="main-news__card-title"><?php the_title(); ?></span>
              </div>
              <div class="main-news__card-descr">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink() ?>" class="main-btn main-news__btn">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Подробнее</span>
              </a>

            </div>
          <?php  }
          wp_reset_postdata();
          ?>
        </div>
        <div class="main-news__btn--all-group">
          <a href="/news/" class="main-btn main-news__btn main-news__btn--all">
            <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn1.svg" alt="Кнопка">
            <span>Все новости</span>
          </a>
        </div>
      </div>
    </section>
    <section class="slider-two">
      <div class="container">
        <div class="swiper slider-two-swiper">
          <div class="swiper-wrapper">
            <?php if( have_rows('slide-two') ): while( have_rows('slide-two') ) : the_row(); ?>
            <div class="swiper-slide">
              <div class="slider-two__inner">
                <div class="slider-two__text-wrapper">
                  <span class="title slider-two__title"><?php echo get_sub_field('slider-two-title'); ?></span>
                  <span class="slider-two__subtitle"><?php echo get_sub_field('slider-two-subtitle'); ?></span>
                </div>
                <div class="slider-two__img-wrapper">
                  <img class="slider-two__img" src="<?php echo get_sub_field('slider-two-img'); ?>" alt="Слайд">
                </div>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="swiper-pagination slider-pagination"></div>
          <button class="slider-btn-prev slider-btn">
            <img class="slider-btn-img" src="<?php echo get_template_directory_uri() ?>/app/img/rightw.svg" alt="Стрелка">
          </button>
          <button class="slider-btn-next slider-btn">
            <img class="slider-btn-img" src="<?php echo get_template_directory_uri() ?>/app/img/leftw.svg" alt="Стрелка">
          </button>
        </div>
      </div>
    </section>
    <div class="prof">
      <div class="container">
        <div class="prof__wrap">
          <div class="prof__content">
            <span class="title prof__title">Консультантплюс для профильных специалистов</span>
            <span class="subtitle prof__subtitle">Благодаря богатому опыту работы с разными категориями предприятий и организаций, мы подготовили рекомендации по готовым комплектам справочных систем для профильных специалистов</span>
          </div>
          <div class="prof__card-wrap">
            <div class="prof__card">
              <img class="prof__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/prof1.png" alt="Бухгалтеру">
              <a class="prof__card-link" href="/service/buhgalteru/">Бухгалтеру</a>
            </div>
            <div class="prof__card">
              <img class="prof__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/prof2.png" alt="Юристу">
              <a class="prof__card-link" href="/service/yuristu/">Юристу</a>
            </div>
            <div class="prof__card">
              <img class="prof__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/prof3.png" alt="Руководителю">
              <a class="prof__card-link" href="/service/rukovoditelyu/">Руководителю</a>
            </div>
            <div class="prof__card">
              <img class="prof__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/prof4.png" alt="Кадровику">
              <a class="prof__card-link" href="/service/kadroviku/">Кадровику</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="info">
      <div class="container">
        <h6 class="title info__title">Информация о компании</h6>
        <div class="info__wrap">
          <div class="info__content">
            <p class="text info__text">
              Настоящий сайт является официальным сайтом Общества с ограниченной ответственностью <strong>«Правовые технологии»</strong>
            </p>
            <p class="text info__text">
            Наша компания осуществляет деятельность в области информационных технологий, включена в Реестр аккредитованных организаций, осуществляющих деятельность в области информационных технологий (номер в Реестре 3832, дата решения об аккредитации 30 мая 2014 года)
            </p>
            <p class="text info__text">
            Основной вид деятельности компании: адаптация, модификация и сопровождение Систем КонсультантПлюс (ОКВЭД 63.11.1)
            </p>
            <p class="text info__text">
            СПС КонсультантПлюс зарегистрирована в едином реестре российских программ для электронных вычислительных машин и баз данных. Запись в реестре № 212 от 18.03.2016 произведена на основании Приказа Министерства цифрового развития, связи и массовых коммуникаций Российской Федерации от 18.03.2016 № 112. Компания осуществляет также и другие виды деятельности в области информационных технологий
            </p>
          </div>
          <div class="info__content">
            <p class="text info__text info__text--title">Контактная информация:</p>
            <p class="text info__text">Общества с ограниченной ответственностью «Правовые Технологии»</p>
            <p class="text info__text">ИНН 7536132097</p>
            <p class="text info__text">ОГРН 1127536008291</p>
            <span class="text info__text info__text--icon">
              <img class="info__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/location-tick.svg" alt="Адрес">
              <span>672000, Забайкальский край, г. Чита, ул. Анохина,91, корп.2 офис 401</span>
            </span>
            <span class="text info__text info__text--icon">
              <img class="info__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/call.svg" alt="Телефон">
              <span>(3022) 400-400, 210-090</span>
            </span>
            <span class="text info__text info__text--icon">
              <img class="info__card-img" src="<?php echo get_template_directory_uri() ?>/app/img/sms.svg" alt="Почта">
              <span>ric508@chitacons.ru</span>
            </span>
          </div>
        </div>
      </div>
    </section>
    <div class="useful">
      <div class="container">
        <span class="title useful__title">Полезная информация</span>
        <div class="useful__wrap">
          <ul class="useful__list">
            <li class="useful__li">
              <a href="https://consultant.ru/document/cons_doc_LAW_434934/" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful1.png" alt="Календарь бухгалтера со сроками сдачи отчетности на 2023 год">
                <span class="useful__link-title">Календарь бухгалтера со сроками сдачи отчетности на 2023 год</span>
              </a>
            </li>
            <li class="useful__li">
              <a href="https://consultant.ru/law/ref/calendar/proizvodstvennye/2023/" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful1.png" alt="Производственный календарь на 2023 год">
                <span class="useful__link-title">Производственный календарь на 2023 год</span>
              </a>
            </li>
            <li class="useful__li">
              <a href="https://consultant.ru/document/cons_doc_LAW_435068/" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful1.png" alt="Правовой календарь на I квартал 2023 года">
                <span class="useful__link-title">Правовой календарь на I квартал 2023 года</span>
              </a>
            </li>
            <li class="useful__li">
              <a href="https://nalog.ru/rn77/" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful2.png" alt="Федеральная налоговая служба">
                <span class="useful__link-title">Федеральная налоговая служба</span>
              </a>
            </li>
            <li class="useful__li">
              <a href="https://sfr.gov.ru/" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful3.png" alt="Пенсионный фонд РФ">
                <span class="useful__link-title">Пенсионный фонд РФ</span>
              </a>
            </li>
            <li class="useful__li">
              <a href="https://ksrf.ru/ru/Pages/default.aspx" class="useful__link" target="_blank">
                <img class="useful__link-img" src="<?php echo get_template_directory_uri() ?>/app/img/useful4.png" alt="Конституционный Суд РФ">
                <span class="useful__link-title">Конституционный Суд РФ</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>

