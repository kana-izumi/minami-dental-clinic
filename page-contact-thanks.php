<?php
/*
Template Name: お問い合わせ完了ページ
*/
get_header();
?>

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
			  <?php bcn_display(); ?>
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
          <p>お問い合わせありがとうございました。</p>
          <p>3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</p>
          <p><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
