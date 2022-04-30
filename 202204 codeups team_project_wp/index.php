<?php get_header(); ?>

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
  <section class="l-top-news">
    <div class="p-top-news">
      <div class="p-top-news__wrapper">
        <div class="p-news">
          <div class="p-news__information p-information">
            <time class="p-information__date" datetime="2020-07-20">2020.07.20</time>
            <div class="p-information__category">お知らせ</div>
          </div>
          <h3 class="p-news__title"><a href="#">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a></h3>
        </div>
      </div>
      <div class="p-top-news__btn">
        <a href="sub-news.html" class="c-btn c-btn--pc-small">すべて見る</a>
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
          <a href="sub-content.html" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">経営理念ページへ</p>
            </div>
          </a>
          <a href="sub-content.html#content1" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content_1.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">理念1へ</p>
            </div>
          </a>
          <a href="sub-content.html#content2" class="p-top-content__item p-content-box">
            <figure class="p-content-box__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content_2.jpg" alt="">
            </figure>
            <div class="p-content-box__body">
              <p class="p-content-box__title">理念2へ</p>
            </div>
          </a>
          <a href="sub-content.html#content3" class="p-top-content__item p-content-box">
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
              <a href="sub-works.html" class="c-btn c-btn--normal">詳しく見る</a>
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
              <a href="sub-overview.html" class="c-btn c-btn--normal">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
            <li class="p-cards__item p-cards__item--new">
              <a href="sub-blog-detail.html" class="p-card">
                <figure class="p-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog_1.jpg" alt="">
                </figure>
                <div class="p-card__body">
                  <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                  <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                  <div class="p-card__info">
                    <span class="p-card__category">カテゴリ</span>
                    <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-cards__item">
              <a href="sub-blog-detail.html" class="p-card">
                <figure class="p-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog_1.jpg" alt="">
                </figure>
                <div class="p-card__body">
                  <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                  <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                  <div class="p-card__info">
                    <span class="p-card__category">カテゴリ</span>
                    <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                  </div>
                </div>
              </a>
            </li>
            <li class="p-cards__item">
              <a href="sub-blog-detail.html" class="p-card">
                <figure class="p-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog_1.jpg" alt="">
                </figure>
                <div class="p-card__body">
                  <h3 class="p-card__title">タイトルが入ります。タイトルが入ります。</h3>
                  <p class="p-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                  <div class="p-card__info">
                    <span class="p-card__category">カテゴリ</span>
                    <time class="p-card__date" datetime="2021-07-20">2021.07.20</time>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="p-top-blog__btn">
          <a href="sub-blog-archive.html" class="c-btn c-btn--normal">詳しく見る</a>
        </div>
      </div>
    </div>
  </section>
  <section class="l-contact">
    <div class="p-contact">
      <div class="p-contact__inner">
        <div class="p-contact__head">
          <div class="c-section-title">
            <h2 class="c-section-title__ja">お問い合わせ</h2>
            <p class="c-section-title__en">Contact</p>
          </div>
        </div>
        <div class="p-contact__wrapper">
          <div class="p-contact__body">
            <p class="p-contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
          <div class="p-contact__btn">
            <a href="sub-contact.html" class="c-btn c-btn--normal">お問い合わせへ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>