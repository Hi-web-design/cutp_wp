<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/works/subworks-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/works/subworks-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">制作実績</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<main class="l-sub-works">
  <div class="p-sub-works">
    <div class="p-sub-works__inner l-inner">
      <div class="p-sub-works__category">
        <div class="p-category">
          <ul class="p-category__items js-category">
            <li class="p-category__item">
              <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">all</a>
            </li>
            <?php
              $taxonomy_terms = get_terms( 'works_category', array( 'hide_empty' => false ) );
              foreach ( $taxonomy_terms as $taxonomy_term ) :
            ?>
            <li class="p-category__item">
              <a href="<?php echo esc_url( get_term_link( $taxonomy_term, 'works_category' ) ); ?>">
                <?php echo esc_html( $taxonomy_term->name ); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <ul class="p-sub-works__items">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>

          <li class="p-sub-works__item">
            <a href="<?php the_permalink(); ?>" class="p-works-card">
              <div class="p-works-card__image">
              <img src="<?php echo get_field('works_img'); ?>" alt="<?php echo the_title(); ?>">
              </div>

              <div class="p-works-card__label">

                <?php
                  if($terms = get_the_terms($post->ID, 'works_category')) {
                    foreach($terms as $term) {
                      echo esc_html($term->name);
                    }
                  }
                ?>

              </div>

              
              <div class="p-works-card__title"><?php the_title();?></div>
            </a>
          </li>

          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>

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