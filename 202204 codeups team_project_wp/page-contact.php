<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact/subcontact-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/subcontact-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">お問い合わせ</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<div class="l-sub-contact">
  <div class="p-sub-contact">
    <div class="p-sub-contact__inner l-inner">

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
      <!-- <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※会社名・団体名</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text" autocomplete="organization" placeholder="テキストがはいります">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※部署名</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text" autocomplete="organization" placeholder="テキストがはいります">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※お名前</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text" name="name" autocomplete="name" placeholder="テキストがはいります">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※ふりがな</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text" name="name" autocomplete="name" placeholder="テキストがはいります">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※メールアドレス</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="email" name="email" autocomplete="email" placeholder="テキストがはいります">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">※お問い合わせ内容</p>
        </div>
        <div class="p-sub-contact__item p-contact-textarea">
          <textarea class="p-contact-textarea__text" placeholder="テキストがはいります"></textarea>
        </div>
      </div>
      <div class="p-sub-contact__btn">
        <button class="c-btn c-btn--submit">送信</button>
      </div> -->
    </div>
  </div>
</div>

<?php get_footer(); ?>