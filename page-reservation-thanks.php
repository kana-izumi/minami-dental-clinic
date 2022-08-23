<?php
/*
Template Name: WEB予約完了ページ
*/
?>

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
    <section class="contact contact-thanks">
      <div class="contact-thanks__inner inner">
        <div class="contact__message contact-thanks__message">
          <p>WEBよりご予約いただき誠にありがとうございます。</p>
          <p>送信いただいた内容を確認して1営業日以内に返信いたします。</p>
          <p><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
