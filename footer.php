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
              <a href="/news/" class="main-btn footer__btn">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Вход по паролю</span>
              </a>
              <a href="/news/" class="main-btn footer__btn">
                <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
                <span>Вход по ключу</span>
              </a>
              <a href="/news/" class="main-btn footer__btn">
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
            <div>
              <p class="footer__copyright-text"><?php echo date("Y"); ?> © Все права защищены.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer() ?>
  </body>
</html>
