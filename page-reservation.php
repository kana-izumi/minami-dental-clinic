<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img reservation-mv"></div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">WEB予約</h2>
          <span class="mv-sub__lead">RESERVE</span>
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

    <section class="reservation">
      <div class="reservation__inner">
        <div class="reservation__message">
          <h2 class="reservation__title">お電話でのご予約/ご相談</h2>
          <div class="reservation__info">
            <div class="reservation__tel">03-1234-5678</div>
            <div class="reservation__time">&emsp;&emsp;(年中無休 AM9:00〜PM22:00)</div>
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
          <form class="contact-form" action="">
          <?php the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="52" title="WEB予約ページ"]'); ?>
          </form>
          <?php endwhile;?>
          <?php endif; ?>
        </div>
      </div>
    </section>
<?php get_footer();?>
