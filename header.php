<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php echo wp_get_document_title() ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- ==================== HEADER  ==================== -->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="header-top__wrap">
          <a href="/">
            <img class="header-top__logo" src="<?php echo get_template_directory_uri() ?>/app/img/logo.svg" alt="Логотип">
          </a>
          <button class="main-btn header-top__btn">
            <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
            <span>Заказать звонок</span>
          </button>
        </div>
      </div>
    </div>
    <!-- === MENU  === -->
    <div class="header__top-content">
      <div class="container">
        <button class="header__btn">
          <span class="header__btn-span"></span>
          <span class="header__btn-span"></span>
          <span class="header__btn-span"></span>
        </button>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <nav class="nav nav--close">
          <button class="rightside-menu__close">
            <span class="rightside-menu__close-span"></span>
            <span class="rightside-menu__close-span"></span>
          </button>
          <div class="nav-wrap">
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
            <button class="main-btn header-top__btn-mobile">
              <img class="main-btn__arrow-btn" src="<?php echo get_template_directory_uri() ?>/app/img/arrow-btn.svg" alt="Кнопка">
              <span>Заказать звонок</span>
            </button>
          </div>
        </nav>
      </div>
    </div>
    <!-- === END MENU  === -->
  </header>
