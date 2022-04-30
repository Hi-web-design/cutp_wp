<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/news/subnews-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/news/subnews-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">お知らせ</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<main class="l-sub-news">
  <div class="p-sub-news">
    <div class="p-sub-news__inner l-inner">
      <ul class="p-sub-news__list">

      <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <li class="p-sub-news__item">
          <div class="p-news">
            <div class="p-news__information p-information">
              <time class="p-information__date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
              <div class="p-information__category"><?php the_category(); ?></div>
            </div>
            <h3 class="p-news__title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
          </div>
        </li>
        
        <?php endwhile; endif; ?>
        

      </ul>
    </div>
  </div>
</main>

<div class="l-pager">
  <div class="p-pager pager__pagenavi">
    <div class="wp-pagenavi">
      <?php
        global $wp_query;
        $big = 9999999999;
        $arg = array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'current' => max( 1, get_query_var('paged') ),
          'total'   => $wp_query->max_num_pages,
          'mid_size' => 1,
          // 前後をテキスト
          'prev_text' => 'prev',
          'next_text' => 'next',
        );
        echo paginate_links($arg);
      ?>
    </div>
  </div>
</div>

<?php get_template_part('_inc/contact'); ?>

<?php get_footer(); ?>