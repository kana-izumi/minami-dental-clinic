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
