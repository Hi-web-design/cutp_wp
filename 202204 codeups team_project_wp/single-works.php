<?php get_header(); ?>

<?php get_template_part('_inc/breadcrumb--detail'); ?>

<section class="l-sub-works-detail">
  <div class="p-sub-works-detail">
    <div class="p-sub-works-detail__inner l-inner">
      <h1 class="p-sub-works-detail__title"><?php echo the_title();?></h1>
      <div class="p-works-article__information p-information">
        <time class="p-information__date" datetime="2020-06-13"><?php echo the_time('Y.m.d'); ?></time>

        <span class="p-information__category">

          <?php
            if($terms = get_the_terms($post->ID, 'works_category')) {
              foreach($terms as $term) {
                echo esc_html($term->name);
              }
            }
          ?>

        </span>

      </div>
      <div class="p-sub-works-detail__gallery">
        <div class="p-sub-works-detail__swiper swiper-container js-gallery-slider">
          <div class="swiper-wrapper">
            
            <?php
              $photo = get_field("gallery");
              $photo_ids = array();
              if(!empty($photo)){
                preg_match_all( '/wp-image-([0-9]+)/', $photo, $matches );
                if($matches) {
                  $photo_ids = $matches[1];
                }
              }

              foreach ($photo_ids as $photo_id) {

                $attr = array(
                  "loading"=> "lazy",
                  "alt"	=> get_bloginfo( 'works' ),
                  "class" => "swiper-slide"
                );

                echo wp_get_attachment_image($photo_id, "full", 0, $attr);
              }
            ?>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

        <div class="p-sub-works-detail__swiper swiper-container js-gallery-thumbs">
          <div class="swiper-wrapper">

            <?php
              $photo = get_field("thumbs");
              $photo_ids = array();
              if(!empty($photo)){
                preg_match_all( '/wp-image-([0-9]+)/', $photo, $matches );
                if($matches) {
                  $photo_ids = $matches[1];
                }
              }

              foreach ($photo_ids as $photo_id) {

                $attr = array(
                  "loading"=> "lazy",
                  "alt"	=> get_bloginfo( 'works' ),
                  "class" => "swiper-slide"
                );

                echo wp_get_attachment_image($photo_id, "full", 0, $attr);
              }
            ?>
            
          </div>
        </div>
      </div>
      <div class="p-sub-works__body">

      <?php
        $info =  SCF::get('works__detail');
        foreach ($info as $fields ) { ?>

          <div class="p-sub-works__point">
          <dt class="p-point__title"><?php echo $fields['point__title']; ?></dt>
          <dd class="p-point__text"><?php echo $fields['point__text']; ?></dd>
          </div>
          
        <?php } ?>

      </div>
    </div>
  </div>
</section>

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
      <a class="p-pager2__btn" href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">一覧</a>
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
            $works_query = new WP_Query(
              array(
                'post_type'      => 'works',
                'posts_per_page' => 4,
              )
            );
            ?>
          <?php if ( $works_query->have_posts() ) : ?>
          <?php while ( $works_query->have_posts() ) : ?>
          <?php $works_query->the_post(); ?>

          <li class="p-cards__item p-cards__item--small">
            <a href="<?php the_permalink(); ?>" class="p-card">
              <div class="p-card__img">
              <img src="<?php echo get_field('works_img'); ?>" alt="<?php echo the_title(); ?>">
              </div>
              <div class="p-card__body">
                <h3 class="p-card__title"><?php echo the_title(); ?></h3>
                <div class="p-card__info">
                  <span class="p-card__category">

                  <?php
                    if($terms = get_the_terms($post->ID, 'works_category')) {
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