<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>お問い合わせフォーム</title>
  <meta name="description" content="街の皆さまの笑顔を守るアットホームな歯医者さん" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="./css/styles.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script defer src="./js/script.js"></script>
</head>
<body>
  <!-- <div class="section-header">
      <span class="section-header__icon-left1"></span>
      <span class="section-header__icon-left2"></span>
      <span class="section-header__icon-left3"></span>
      <span class="section-header__icon-left4"></span>
      <span class="section-header__icon-left5"></span>
      <h2 class="section-header__title">当院の3つのおすすめ</h2>
      <span class="section-header__icon-right1"></span>
      <span class="section-header__icon-right2"></span>
      <span class="section-header__icon-right3"></span>
      <span class="section-header__icon-right4"></span>
      <span class="section-header__icon-right5"></span>
  </div> -->

  <div class="header">
    <div class="header__inner">
      <div class="header__block">
        <div class="header__logo">
          <img src="./images/common/logo.svg" alt="ロゴ画像">
        </div>
          <nav class="header-nav u-desktop">
            <ul class="header-nav__list">
              <li><img src="/src/images/common/icon-nav01.svg" alt=""><a href="">ホーム</li></a>
              <li><img src="/src/images/common/icon-nav02.svg" alt=""><a href="">当院について</li></a>
              <li><img src="/src/images/common/icon-nav03.svg" alt=""><a href="">診療案内</li></a>
              <li><img src="/src/images/common/icon-nav04.svg" alt=""><a href="">スタッフ紹介</li></a>
              <li><img src="/src/images/common/icon-nav05.svg" alt=""><a href="">スタッフブログ</li></a>
              <li><img src="/src/images/common/icon-nav07.svg" alt=""><a href="">お問い合わせ</li></a>
            </ul>
            <div class="header__info">
              <p class="header__info-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
              <p class="header__info-tel">03-1234-5678</p>
            </div>
          </nav>
      </div>

      <!-- drawer -->
      <div class="drawer u-mobile">
        <div class="drawer__inner inner">
          <div class="drawer__header-logo">
            <img src="./images/common/logo-drawer.svg" alt="ロゴ画像">
          </div>
            <div class="drawer__icon">
              <div class="drawer__icon-bars">
                <div class="drawer__icon-bar1"><a href=""></a></div>
                <div class="drawer__icon-bar2"><a href=""></a></div>
                <div class="drawer__icon-bar3"><a href=""></a></div>
              </div>
            </div>
        </div>
      </div>

  <div class="drawer__content">
    <div class="drawer__content-items">
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-01.svg">
            <a href="">ホーム</a>
          </div>
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-02.svg" alt="">
            <a href="">当院について</a>
          </div>
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-03.svg" alt="">
            <a href="">診療案内</a>
          </div>
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-04.svg" alt="">
            <a href="">スタッフ紹介</a>
          </div>
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-05.svg" alt="">
            <a href="">スタッフブログ</a>
          </div>
          <div class="drawer__content-item">
            <img src="./src/images/common/icon-07.svg" alt="">
            <a href="">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- /.header -->

    <div class="mv-sub">
      <div class="mv-sub__inner inner">
        <div class="mv-sub__img u-mobile">
          <img src="./src/images/contact/page-contact_top-sp.jpg" alt="">
        </div>
        <div class="mv-sub__img u-desktop">
          <img src="./src/images/contact/page-contact_top.jpg" alt="">
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
        <div class="contact__message contact-thanks__message">
          <p>WEBよりご予約いただき誠にありがとうございます。</p>
          <p>送信いただいた内容を確認して1営業日以内に返信いたします。</p>
          <p><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__inner inner">
        <div class="footer-info">
          <div class="footer-info__body">
            <div class="footer-info__logo">
              <img src="./src/images/common/logo.svg" alt="">
            </div>
            <div class="footer-info__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
            <div class="footer-info__tel">03-1234-5678</div>
            <div class="footer-info__time">(年中無休 AM9:00〜PM22:00)</div>
            <div class="footer-info__contact">
            <div class="footer-info__contact-web">
              <a href="">WEB予約</a>
            </div>
            <div class="footer-info__contact-mail">
              <a href="">お問い合わせ</a>
            </div>
          </div>
          <div class="footer-info__medical-time">
            <img src="./src/images/top/medical-time-pc.jpg" alt="">
          </div>
        </div>
          <div class="footer-info-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.865606084968!2d139.6339344152595!3d35.70492468018874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1655384440199!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </div>
    <!-- /.footer-info -->
      <nav class="footer-nav">
        <div class="footer-nav__item">
          <ul>
            <li><a href="">TOP</a></li>
          </ul>
        </div>
        <div class="footer-nav__item">
          <dt>当院について</dt>
          <dd>
            <ul class="footer-nav__item-list">
              <li><a href="">ポリシーと特徴</a></li>
              <li><a href="">当院の様子</a></li>
            </ul>
          </dd>
        </div>
        <div class="footer-nav__item">
          <dt>スタッフ紹介</dt>
          <dd>
            <ul class="footer-nav__item-list">
              <li><a href="">院長のあいさつ</a></li>
              <li><a href="">スタッフ</a></li>
              <li><a href="">スタッフブログ</a></li>
            </ul>
          </dd>
        </div>
        <div class="footer-nav__item">
          <dt>治療内容</dt>
          <div class="footer-nav__item-flex">
            <dd>
              <ul class="footer-nav__item-list">
                <li><a href="">一般歯科</a></li>
                <li><a href="">小児歯科</a></li>
                <li><a href="">予防歯科</a></li>
                <li><a href="">入れ歯</a></li>
              </ul>
            </dd>
            <dd>
              <ul class="footer-nav__item-list footer-nav__sub">
                <li><a href="">矯正歯科</a></li>
                <li><a href="">ホワイトニング</a></li>
                <li><a href="">口腔外科</a></li>
                <li><a href="">レーザー治療</a></li>
              </ul>
            </dd>
          </div>
        </div>
        <div class="footer-nav__item">
          <dt>お問い合わせ</dt>
          <dd>
            <ul class="footer-nav__item-list">
              <li><a href="">お問い合わせフォーム</a></li>
              <li><a href="">WEB予約</a></li>
            </ul>
          </dd>
        </div>
      </nav>
    </div>
      <div class="footer__copyright">
        <small>&copy;2020-2021 みなみ歯科クリニック</small>
      </div>
  </footer>
    <!-- /.footer -->
</body>
</html>