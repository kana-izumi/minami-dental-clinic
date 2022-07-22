<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="format-detection" content="telephone=no" />
<!-- meta情報 -->
<title><?php bloginfo('name')?></title>
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
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/styles.css')); ?>">
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script defer src="<?php echo esc_url(get_theme_file_uri('/js/script.js')); ?>"></script>
<?php wp_head();?>
</head>
<body>
<?php wp_body_open(); ?>
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
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="ロゴ画像">
        </div>
            <nav class="header-nav u-desktop">
                <ul class="header-nav__list">
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav01.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">ホーム</li></a>
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav02.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">当院について</li></a>
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav03.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">治療案内</li></a>
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav04.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">スタッフ紹介</li></a>
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav05.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">スタッフブログ</li></a>
                    <li><a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav07.svg')); ?>" alt="<?php echo esc_url(home_url('/'))?>">お問い合わせ</li></a>
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
                <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo-drawer.svg')); ?>" alt="ロゴ画像">
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
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-01.svg')); ?>">
                <a href="">ホーム</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-01.svg')); ?>" alt="">
                <a href="">当院について</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-03.svg')); ?>" alt="">
                <a href="">診療案内</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-04.svg')); ?>" alt="">
                <a href="">スタッフ紹介</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-05.svg')); ?>" alt="">
                <a href="">スタッフブログ</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-07.svg')); ?>" alt="">
                <a href="">お問い合わせ</a>
            </div>
            </div>
        </div>
        </div>
    </div>
<!-- /.header -->