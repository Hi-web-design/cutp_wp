<?php get_header(); ?>

<?php get_template_part('_inc/breadcrumb--detail'); ?>

<article class="l-blog-article">
  <div class="p-blog-article">
    <div class="p-blog-article__inner l-inner">
      <h1 class="p-blog-article__title"><?php the_title();?></h1>
      <div class="p-blog-article__information p-information">
        <time class="p-information__date" datetime="2020-06-13"><?php the_time('Y.m.d'); ?></time>

        <span class="p-information__category">

          <?php
            if($terms = get_the_terms($post->ID, 'blog_category')) {
              foreach($terms as $term) {
                echo esc_html($term->name);
              }
            }
          ?>

        </span>

      </div>
      <!-- ユーザーが自分でタグを選んで投稿する部分ここから -->
      <?php the_content();?>
      <!-- ユーザーが自分でタグを選んで投稿する部分ここまで -->
    </div>
  </div>
</article>

<div class="l-pager2">
  <div class="p-pager2">
    <div class="p-pager2__inner l-inner">

    <?php
    $next_post = get_next_post();
    $prev_post = get_previous_post();
    if( $prev_post ):
    ?>
      <a class="p-pager2__btn" href="<?php echo the_permalink( $prev_post->ID ); ?>">prev</a>
      <?php
      endif;
      if( $prev_post ):
      ?>
      <a class="p-pager2__btn" href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">一覧</a>
      <a class="p-pager2__btn" href="<?php echo the_permalink( $next_post->ID ); ?>">next</a>
      <?php endif; ?>

    </div>
  </div>
</div>

<section class="l-relatives">
  <div class="p-relatives">
    <div class="p-relatives__inner l-inner">
      <h2 class="p-relatives__title">関連記事</h2>
      <div class="p-relateves__cards p-cards">
        <ul class="p-cards">

          <?php
            $blog_query = new WP_Query(
              array(
                'post_type'      => 'blog',
                'posts_per_page' => 4,
              )
            );
            ?>
          <?php if ( $blog_query->have_posts() ) : ?>
          <?php while ( $blog_query->have_posts() ) : ?>
          <?php $blog_query->the_post(); ?>

          <li class="p-cards__item p-cards__item--small">
            <a href="<?php the_permalink(); ?>" class="p-card">
              <figure class="p-card__img">
                <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
              </figure>
              <div class="p-card__body">
                <h3 class="p-card__title"><?php echo the_title(); ?></h3>
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

<?php get_template_part('_inc/contact'); ?>

<?php get_footer(); ?>