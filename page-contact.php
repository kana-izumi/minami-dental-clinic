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
            <li class="bread__item"><a href="#">お問い合わせ</a></li>
          </ul>
        </div>
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
              <h2 class="contact-header__title"><?php the_title(); ?><br>フォーム</h2>
            </div>
            <?php while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
              <?php echo do_shortcode('[contact-form-7 id="36" title="お問い合わせ"]')?>
            <?php endwhile;?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>