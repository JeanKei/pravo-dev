    <footer class="footer">
      <div class="footer__top">
        <div class="container">
          <div class="footer__wrap">
            <div class="footer__item">
              <a href="/">
                <img class="footer__logo" src="<?php echo get_template_directory_uri() ?>/app/img/logo.svg" alt="Логотип">
              </a>
            </div>
            <div class="footer__item">
              <span class="footer__title">Ваш Консультант</span>
              <?php
                if (has_nav_menu('head_menu')) {
                  wp_nav_menu(array(
                    'theme_location' => 'head_menu',
                    'depth' => 1,
                    'container' => false,
                    'menu_class' => 'menu',
                  ));
                }
                ?>
            </div>
            <div class="footer__item footer__item--contacts">
              <span class="footer__title">Контакты</span>
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
            <div class="footer__item footer__item--online">
              <span class="footer__title">Вход в онлайн-версии</span>
              <a href="https://login.consultant.ru/?authType=login" class="main-btn footer__btn" target="_blank">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Вход по паролю</span>
              </a>
              <a href="https://login.consultant.ru/?authType=usb" class="main-btn footer__btn" target="_blank">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Вход по ключу</span>
              </a>
              <a href="https://login.consultant.ru/?authType=login" class="main-btn footer__btn" target="_blank">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Многопользовательская версия</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="footer__copyright-wrap">
            <div class="footer__copyright-text-wrap">
              <a class="footer__copyright-link" href="/privacy-policy/">Политика конфиденциальности</a>
            </div>
            <div class="footer__copyright-text-wrap">
              <a class="footer__copyright-link" href="/polzovatelskoe-soglashenie/">Пользовательское соглашение</a>
            </div>
            <div>
              <p class="footer__copyright-text"><?php echo date("Y"); ?> © Все права защищены.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <!-- СПАСИБО-->
  <div class="graph-modal">
    <div class="graph-modal__container graph-modal__content--more graph-modal__container-sps" role="dialog"
      aria-modal="true" data-graph-target="thanks">
      <button class="btn-reset js-modal-close graph-modal__close more-btn more-btn-sps"
        aria-label="Закрыть модальное окно">
        <img src="<?php echo get_template_directory_uri() ?>/assets/app/img/close.svg" alt="Закрыть">
      </button>
      <div class="graph-modal__content graph-modal__content-sps">
        <span class="send__title-sps">Спасибо!</span>
        <div class="send__descr-sps">
            Заявка успешно <br> отправлена
        </div>
      </div>
    </div>
  <!--КОНЕЦ СПАСИБО-->
    <!-- МОДАЛКА-->
    <div class="graph-modal__container graph-modal__container--lead" role="dialog" aria-modal="true"
      data-graph-target="lead">
      <button class="btn-reset js-modal-close graph-modal__close more-btn" aria-label="Закрыть модальное окно">
        <img src="<?php echo get_template_directory_uri() ?>/app/img/close.svg" alt="Закрыть">
      </button>
      <section class="send">
        <div class="container">
          <span class="send__title">Оставьте заявку и мы с вами свяжемся</span>
          <form class="send__form-wrapper form-1" method="post" id="form">
            <label class="form__label">
              <input class="send__data input-data" data-validate-field="data" name="Раздел" type="hidden" value="">
            </label>
            <label class="form__label">
              <input class="send__name input-name" placeholder="Введите имя" data-validate-field="name" name="Имя"
                type="text">
            </label>
            <label class="form__label">
              <input class="send__tel input-tel" placeholder="Введите номер телефона" data-validate-field="tel" name="Телефон"
                type="tel">
            </label>
            <div class="send__button-group">
              <input class="btn-platimir btn-dark btn-platimir-send header__cta btn-reset" value="Отправить" type="submit">
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
  <!-- КОНЕЦ МОДАЛКА -->
    <?php wp_footer() ?>
  </body>
</html>
