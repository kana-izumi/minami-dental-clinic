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
          <h2 class="mv-sub__title">WEB予約</h2>
          <span class="mv-sub__lead">RESERVE</span>
        </div>
        <div class="bread">
          <ul class="bread__list">
            <li class="bread__item bread__item-grey"><a href="#">ホーム</a></li>
            <li class="bread__item"><a href="#">WEB予約</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.main-visual -->
    <section class="reservation">
      <div class="reservation__inner inner">
        <div class="reservation__message">
          <h2 class="reservation__title">お電話でのご予約/ご相談</h2>
          <div class="reservation__info">
            <div class="reservation__tel">03-1234-5678</div>
            <div class="reservation__time">(年中無休 AM9:00〜PM22:00)</div>
          </div>
          <p class="reservation__text">お急ぎの方は電話での連絡がスムーズです。<br>
            混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
            あらかじめご了承ください。</p>
        </div>
        <div class="reservation__message">
          <h2 class="reservation__title">メールでのご予約/ご相談</h2>
          <p class="reservation__text">【ご予約に関しての注意点】<br>
            メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
            ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
        </div>
        <div class="contact__wrapper">
        <?php if(have_posts()): ?>
          <div class="contact-header">
            <h2 class="contact-header__title">予約フォーム</h2>
          </div>
          <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="41" title="WEB予約ページ"]'); ?>
          <?php endwhile;?>
          <?php endif; ?>
        </div>
      </div>
    </section>
<?php get_footer();?>
