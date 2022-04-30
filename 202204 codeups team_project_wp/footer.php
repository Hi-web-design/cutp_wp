<div class="p-footer">
    <div class="p-footer__inner">
      <div class="p-footer__logo">
        <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>
      <div class="p-footer__nav">
        <nav class="p-footer-nav">
          <ul class="p-footer-nav__items">
            <li class="p-footer-nav__item u-mobile">
            <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/content/')); ?>">事業内容</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/overview/')); ?>">企業概要</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
            </li>
            <li class="p-footer-nav__item">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <p class="p-footer__copyright"><small> © 2021 CodeUps Inc.</small></p>
    <div class="l-top-btn js-page-top">
      <a class="c-top-btn" href="#"></a>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>