<?php
// ファイルの読み込み
function add_files() {
    // swiper.css
    wp_enqueue_style('swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    // リセットCSS
    // wp_enqueue_style('reset-style', 'https://unpkg.com/destyle.css@2.0.2/destyle.css');
    // Google Fonts
    wp_enqueue_style('googleleapis-fonts', 'https://fonts.googleapis.com');
    wp_enqueue_style('googlegstatic-fonts', 'https://fonts.gstatic.com');
    wp_enqueue_style('google-fonts_1', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap');
    wp_enqueue_style('google-fonts_2', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
    // メインのCSSファイル
    // wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('main-style', get_theme_file_uri().'/css/style.css', array(), '1.0.1', false);
    // JavaScript
    wp_enqueue_script('Java-Script', 'https://code.jquery.com/jquery-3.6.0.js');
    // swiper.js
    wp_enqueue_script('swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    // JavaScriptファイル
    wp_enqueue_script('main-script', get_theme_file_uri().'/js/script.js', array(), '1.0.1', true);
    wp_enqueue_script('drawer-script', get_theme_file_uri().'/js/drawer.js', array(), '1.0.1', true);
    wp_enqueue_script('swiper-script', get_theme_file_uri().'/js/swiper.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'add_files');


function display_title() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'display_title' );


function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  if ( $query->is_post_type_archive('blog') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '9' ); //表示件数を指定
  }
  if ( $query->is_tax('blog_category') ) { //カスタムタクソノミーを指定
      $query->set( 'posts_per_page', '9' ); //表示件数を指定
  }
  if ( $query->is_post_type_archive('works') ) { //カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '6' ); //表示件数を指定
  }
  if ( $query->is_tax('works_category') ) { //カスタムタクソノミーを指定
      $query->set( 'posts_per_page', '6' ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
