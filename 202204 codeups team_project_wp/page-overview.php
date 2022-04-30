<?php get_header(); ?>

<div class="p-sub-mv js-sub-mv">
  <div class="p-sub-mv__inner">
    <div class="p-sub-mv__wrapper">
      <picture class="p-sub-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/overview/suboverview-mv_pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/overview/suboverview-mv_sp.jpg" alt="image">
      </picture>
      <div class="p-sub-mv__block">
        <h2 class="p-sub-mv__title">企業概要</h2>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/breadcrumb'); ?>

<!-- Smart Custom Fields -->
<div class="l-sub-overview"> 
  <div class="p-sub-overview">
    <div class="p-sub-overview__inner l-inner">
      <dl class="p-sub-overview__items">

      <?php
        $info =  SCF::get('overview');
        foreach ($info as $fields ) { ?>

          <div class="p-sub-overview__item">
          <dt class="p-sub-overview__term"><?php echo $fields['overview_title']; ?></dt>
          <dd class="p-sub-overview__description"><?php echo $fields['overview_text']; ?></dd>
          </div>
          
        <?php } ?>
        
      </dl>
    </div>
  </div>
</div>

<div class="l-map">
  <div class="p-map">
    <div class="p-map__inner l-inner">
      <div class="p-map__iframe">
      <?php echo get_field('overview_map'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('_inc/contact'); ?>

<?php get_footer(); ?>