<?php get_header(); ?>

    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img u-mobile">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/contact/page-contact_top-sp.jpg')); ?>" alt="">
        </div>
        <div class="mv-sub__img u-desktop">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/contact/page-contact_top.jpg')); ?>" alt="">
        </div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">お問い合わせ</h2>
          <span class="mv-sub__lead">CONTACT</span>
        </div>
        <div class="bread">
          <ul class="bread__list">
            <li class="bread__item bread__item-grey"><a href="#">ホーム</a></li>
            <li class="bread__item"><a href="#">お問い合わせ完了</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.main-visual -->
    <section class="contact contact-thanks">
      <div class="contact-thanks__inner inner">
      <?php if(have_posts()): ?>
        <div class="contact__message contact-thanks__message">
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="39" title="お問い合わせ完了"]')?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

<?php get_footer(); ?>
