<?php get_header(); ?>

<?php 
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$content = esc_url( home_url( '/content/' ) );
$works = esc_url( home_url( '/works/' ) );
$overview = esc_url( home_url( '/overview/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

  <div class="p-mv js-mv">
    <div class="p-mv__inner">
      <div class="swiper js-mySwiper">
        <div class="p-mv__wrapper swiper-wrapper">
          <div class="swiper-slide">
            <picture class="p-mv__img swiper-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_1.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp_1.jpg" alt="image">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="p-mv__img swiper-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_2.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp_2.jpg" alt="image">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="p-mv__img swiper-img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/mv_3.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp_3.jpg" alt="image">
            </picture>
          </div>
          <div class="p-mv__block">
            <h2 class="p-mv__title">CodeUps_TeamProject</h2>
            <span class="p-mv__subtitle">team_yoshitoshi</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- デフォルト投稿 -->
  <section class="l-top-news">
    <div class="p-top-news">
      <div class="p-top-news__wrapper">
        
          <?php
            $news_query = new WP_Query(
              array(
                'post_type' => 'post',
                'posts_per_page' => 1,
              )
            );
            ?>
          <?php if ( $news_query->have_posts() ) : ?>
          <?php while ( $news_query->have_posts() ) : ?>
          <?php $news_query->the_post(); ?>

        <div class="p-news">
          <div class="p-news__information p-information">
            <time class="p-information__date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
            <div class="p-information__category"><?php the_category(); ?></div>
          </div>
          <h3 class="p-news__title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
        </div>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
        
      </div>
      <div class="p-top-news__btn">
        <a href="<?php echo $news ?>" class="c-btn c-btn--pc-small">すべて見る</a>
      </div>
    </div>
  </section>

  <section class="l-top-content">
    <div class="p-top-content">
      <div class="p-top-content__inner">
        <div class="p-top-content__line-top"></div>
        <div class="p-top-content__wrapper">
          <div class="p-top-content__head">
            <div class="c-section-title">
              <h2 class="c-section-title__ja">事業内容</h2>
              <p class="c-section-title__en">Content</p>
            </div>
          </div>
        </div>
        <div class="p-top-content__items">
          <a href="<?php echo $content ?>" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">経営理念ページへ</p>
            </div>
          </a>
          <a href="<?php echo $content ?>#content1" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content_1.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">理念1へ</p>
            </div>
          </a>
          <a href="<?php echo $content ?>#content2" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content_2.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">理念2へ</p>
            </div>
          </a>
          <a href="<?php echo $content ?>#content3" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content_3.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">理念3へ</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="l-top-works">
    <div class="p-top-works">
      <div class="p-top-works__inner">
        <div class="p-top-works__head">
          <div class="c-section-title">
            <h2 class="c-section-title__ja">制作実績</h2>
            <p class="c-section-title__en c-section-title__en--right"> Works </p>
          </div>
        </div>
        <div class="p-top-works__wrapper">
          <div class="p-top-works__swiper">
            <div class="swiper2 js-mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="p-top-works__img slide-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/works_1.jpg" alt="">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img slide-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/works_2.jpg" alt="">
                  </figure>
                </div>
                <div class="swiper-slide">
                  <figure class="p-top-works__img slide-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/works_3.jpg" alt="">
                  </figure>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="p-top-works__body">
            <h3 class="p-top-works__text-title">メインタイトルが入ります</h3>
            <p class="p-top-works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <div class="p-top-works__btn">
              <a href="<?php echo $works ?>" class="c-btn c-btn--normal">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="l-top-overview">
    <div class="p-top-overview">
      <div class="p-top-overview__inner">
        <div class="p-top-overview__line-bottom"></div>
        <div class="p-top-overview__head">
          <div class="c-section-title">
            <h2 class="c-section-title__ja">企業概要</h2>
            <p class="c-section-title__en">Overview</p>
          </div>
        </div>
        <div class="p-top-overview__wrapper">
          <figure class="p-top-overview__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/overview.jpg" alt="">
          </figure>
          <div class="p-top-overview__body">
            <h3 class="p-top-overview__text-title">メインタイトルが入ります</h3>
            <p class="p-top-overview__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <div class="p-top-overview__btn">
              <a href="<?php echo $overview ?>" class="c-btn c-btn--normal">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Advanced Custom Fields -->
  <section class="l-top-blog">
    <div class="p-top-blog">
      <div class="p-top-blog__inner l-inner">
        <div class="p-top-blog__head">
          <div class="c-section-title">
            <h2 class="c-section-title__ja">ブログ</h2>
            <p class="c-section-title__en c-section-title__en--right"> Blog </p>
          </div>
        </div>
        <div class="p-top-blog__wrapper">
          <ul class="p-cards">

          <?php
            $blog_query = new WP_Query(
              array(
                'post_type'      => 'blog',
                'posts_per_page' => 3,
              )
            );
            ?>
          <?php if ( $blog_query->have_posts() ) : ?>
          <?php while ( $blog_query->have_posts() ) : ?>
          <?php $blog_query->the_post(); ?>

            <li class="p-cards__item">
              <a href="<?php the_permalink(); ?>" class="p-card">
                <figure class="p-card__img">
                <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
                </figure>
                <div class="p-card__body">
                  <h3 class="p-card__title"><?php echo the_title();?></h3>
                  <p class="p-card__text"><?php echo the_excerpt();?></p>
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

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            
          </ul>
        </div>
        <div class="p-top-blog__btn">
          <a href="<?php echo $blog ?>" class="c-btn c-btn--normal">詳しく見る</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('_inc/contact'); ?>

  <?php get_footer(); ?>