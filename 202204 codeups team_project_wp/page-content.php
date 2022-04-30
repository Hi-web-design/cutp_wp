<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/content/subcontent-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/content/subcontent-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">事業内容</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<main class="l-sub-content">
  <div class="p-sub-content">
    <div class="p-sub-content__inner l-inner">
      <h2 class="p-sub-content__main-title">企業理念</h2>
      <p class="p-sub-content__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
      <ul class="p-sub-content__items">
        <li class="p-sub-content__item" id="content1">
          <figure class="p-sub-content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/content/content_1.jpg" alt="企業理念1の画像">
          </figure>
          <div class="p-sub-content__text">
            <h3 class="p-sub-content__heading">企業理念１</h3>
            <p class="p-sub-content__explanation"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
          </div>
        </li>
        <li class="p-sub-content__item" id="content2">
          <figure class="p-sub-content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/content/content_2.jpg" alt="企業理念2の画像">
          </figure>
          <div class="p-sub-content__text">
            <h3 class="p-sub-content__heading">企業理念２</h3>
            <p class="p-sub-content__explanation"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
          </div>
        </li>
        <li class="p-sub-content__item" id="content3">
          <figure class="p-sub-content__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/content/content_3.jpg" alt="企業理念3の画像">
          </figure>
          <div class="p-sub-content__text">
            <h3 class="p-sub-content__heading">企業理念３</h3>
            <p class="p-sub-content__explanation"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</main>

<?php get_template_part('_inc/contact'); ?>

<?php get_footer(); ?>