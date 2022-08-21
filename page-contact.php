<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
<div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img contact-mv"></div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">お問い合わせ</h2>
          <span class="mv-sub__lead">CONTACT</span>
        </div>
        <?php if (!is_front_page()) { ?>
          <?php if (function_exists('bcn_display')) { ?>
            <div class="bread" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display();?>
            </div>
          <?php } ?>
          <?php } ?>
      </div>
      <div class="reservation__link">
        <a href="<?php echo esc_url(home_url('/'))?>reservation">
        <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/web-icon.svg')); ?>" alt="WEB予約はこちら">
        <p>WEB予約<br>はこちら</p>
        </a>
      </div>
    </div>
    <section class="contact">
      <div class="contact__inner inner">
        <div class="contact__message">
          <p>お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<p>
          <p>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。</p>
          <p>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。</p>
          <p><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。<span></p>
        </div>
        <div class="contact__wrapper">
          <?php if(have_posts()): ?>
            <div class="contact-header">
              <h2 class="contact-header__title">お問い合わせ<br>フォーム</h2>
            </div>
            <?php while(have_posts()) : the_post(); ?>
            <form class="contact-form" action="">
              <?php the_content(); ?>
              <?php echo do_shortcode('[contact-form-7 id="33" title="お問い合わせ"]')?>
            </form>
            <?php endwhile;?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>