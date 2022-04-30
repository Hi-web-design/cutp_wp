<?php get_header(); ?>

<?php 
$home = esc_url( home_url( '/' ) );
?>

  <section class="l-sub-404">
    <div class="p-sub-404">
      <div class="p-sub-404__inner l-inner">
        <div class="p-sub-404__body">
          <h1 class="p-sub-404__head">404 Not Found</h1>
          <p class="p-sub-404__text"><span>お探しのページは</span><span>見つかりませんでした。</span></p>
          <div class="p-sub-404__btn u-desktop">
            <a href="<?php echo $home ?>" class="c-btn c-btn--normal">TOPへ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>