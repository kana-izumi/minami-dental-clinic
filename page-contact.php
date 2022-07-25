<?php get_header(); ?>
    <div class="mv-sub">
      <div class="mv-sub__inner inner">
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
    <!-- /.main-visual -->
    <section class="contact">
      <div class="contact__inner inner">
        <div class="contact__message">
          <p>お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<p>
          <p>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。</p>
          <p>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。</p>
          <p><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。<span></p>
        </div>
        <div class="contact__wrapper">
          <div class="section-header">
            <h2 class="section-header__title">お問い合わせ<br>フォーム</h2>
          </div>
          <form class="contact-form" action="">
            <dl class="contact-form__dl">
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-name" class="is-required">お名前</label></dt>
                    <dd class="contact-form__input"><input type="text" id="your-name" placeholder="山田 太郎"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-kana" class="is-required">フリガナ</label></dt>
                    <dd class="contact-form__input"><input type="text" id="your-kana" placeholder="ヤマダ タロウ"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-tel">電話番号</label></dt>
                    <dd class="contact-form__input"><input type="text" id="your-tel" placeholder="000-0000-0000"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-email">メールアドレス</label></dt>
                    <dd class="contact-form__input"><input type="email" id="your-email" placeholder="sample@gmail.com"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-text">お問い合わせ内容</label></dt>
                    <dd class="contact-form__text"><textarea name="" id="your-tex" placeholder="ご自由にご記入ください。"></textarea></dd>
                </div>
                <div class="contact-form__btn">
                    <input type="submit" value="送　信">
                </div>
            </dl>
        </form>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>