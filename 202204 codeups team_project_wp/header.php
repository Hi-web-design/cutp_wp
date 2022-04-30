<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="robots" content="noindex" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/')); ?>" type="image/svg+xml">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header">
    <div class="p-header js-header <?php if(is_front_page()){ echo 'js-header' ;} else {echo 'js-sub-header';}?>">
      <div class="p-header__inner">
        <div class="p-header__logo">
          <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        </div>
        <div class="p-header__hamburger p-hamburger u-mobile">
          <button type="button" class="c-hamburger js-hamburger">
            <span class="c-hamburger__line"></span>
          </button>
        </div>
        <div class="p-header__nav js-drawer-nav u-desktop">
          <nav class="p-header-nav js-drawer-nav">
            <ul class="p-header-nav__items">
              <li class="p-header-nav__item u-mobile">
                <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
              </li>
              <li class="p-header-nav__item">
                <a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a>
              </li>
              <li class="p-header-nav__item">
                <a href="<?php echo esc_url(home_url('/content/')); ?>">事業内容</a>
              </li>
              <li class="p-header-nav__item">
                <a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a>
              </li>
              <li class="p-header-nav__item">
                <a href="<?php echo esc_url(home_url('/overview/')); ?>">企業概要</a>
              </li>
              <li class="p-header-nav__item">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
              </li>
              <li class="p-header-nav__item p-header-nav__item--white">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>