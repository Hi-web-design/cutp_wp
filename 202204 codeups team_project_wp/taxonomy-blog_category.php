<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog/subblog-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/subblog-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">ブログ</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<section class="l-sub-blog-archive">
  <div class="p-sub-blog-archive">
    <div class="p-sub-blog-archive__inner l-inner">
      <div class="p-sub-blog-archive__category">
        <div class="p-category">
          <ul class="p-category__items js-category">
            <li class="p-category__item">
              <a href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">すべて</a>
            </li>
            <?php
              $taxonomy_terms = get_terms( 'blog_category', array( 'hide_empty' => false ) );
              foreach ( $taxonomy_terms as $taxonomy_term ) :
            ?>
            <li class="p-category__item">
              <a href="<?php echo esc_url( get_term_link( $taxonomy_term, 'blog_category' ) ); ?>">
                <?php echo esc_html( $taxonomy_term->name ); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div class="p-sub-blog-archive__items">
        <ul class="p-cards">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

          <li class="p-cards__item">
            <a href="<?php the_permalink(); ?>" class="p-card">
              <figure class="p-card__img">
                <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
              </figure>
              <div class="p-card__body">
                <h3 class="p-card__title"><?php echo the_title();?></h3>
                <div class="p-card__text"><?php echo the_excerpt();?></div>
                <div class="p-card__info">
                  <span class="p-card__category">

                    <?php
                      if($terms = get_the_terms($post->ID, 'blog_category')) {
                        foreach($terms as $term) {
                          echo esc_html($term->name);
                        }
                      }
                    ?>

                  </span>

                  <time class="p-card__date" datetime="2021-07-20"><?php echo the_time('Y.m.d'); ?></time>
                </div>
              </div>
            </a>
          </li>

          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>

        </ul>
      </div>
    </div>
  </div>
</section>

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