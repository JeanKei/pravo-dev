<?php
/*
Template Name: контакты
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
    <section class="info contacts-page">
      <div class="container">
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
        <div class="contacts-page__map-wrap">
          <div class="contacts-page__content">
            <span class="contacts-page__content-main-title">Чита</span>
            <span class="contacts-page__content-title">Адрес</span>
            <span class="contacts-page__content-text">672000, Забайкальский край, г. Чита, ул. Анохина,91, корп.2 офис 401</span>
            <span class="contacts-page__content-title">Телефон</span>
            <span class="contacts-page__content-text">(3022) 400-400, 210-090</span>
            <span class="contacts-page__content-title">E-mail:</span>
            <span class="contacts-page__content-text">ric508@chitacons.ru</span>
          </div>
          <div class="contacts-page__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa6c69db78f921cdf3919ca6f93d24fd9cf6d7eb6447f29971fe941f3e6358d1a&amp;width=100%25&amp;height=320&amp;lang=ru_RU&amp;scroll=false"></script>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
