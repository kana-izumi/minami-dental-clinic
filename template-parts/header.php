<!-- //header -->
<div class="header">
    <div class="header__inner">
        <div class="header__block">
        <div class="header__logo">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/logo.svg')); ?>" alt="ロゴ画像">
        </div>
            <nav class="header-nav u-desktop">
                <ul class="header-nav__list">
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-01.png')); ?>" alt="">ホーム</li></a>
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>about"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav02.svg')); ?>" alt="">当院について</li></a>
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>medical"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav03.svg')); ?>" alt="">治療案内</li></a>
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>staff"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav04.svg')); ?>" alt="">スタッフ紹介</li></a>
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>blog"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav05.svg')); ?>" alt="">スタッフブログ</li></a>
                    <li class="header-nav__item"><a href="<?php echo esc_url(home_url('/'))?>contact"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-nav07.svg')); ?>" alt="">お問い合わせ</li></a>
                </ul>
            <div class="header__info">
                <p class="header__info-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                <p class="header__info-tel">03-1234-5678</p>
            </div>
            </nav>
        </div>

<!-- //drawer -->
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
        <!-- <?php
        $args = [
        	'theme_location' => 'drawer_menu'
        ];
        wp_nav_menu($args);
        ?> -->
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-01.svg')); ?>">
                <a href="<?php echo esc_url(home_url('/'))?>">ホーム</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-01.svg')); ?>" alt="">
                <a href="<?php echo esc_url(home_url('/'))?>about">当院について</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-03.svg')); ?>" alt="">
                <a href="<?php echo esc_url(home_url('/'))?>medical">診療案内</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-04.svg')); ?>" alt="">
                <a href="<?php echo esc_url(home_url('/'))?>staff">スタッフ紹介</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-05.svg')); ?>" alt="">
                <a href="<?php echo esc_url(home_url('/'))?>blog">スタッフブログ</a>
            </div>
            <div class="drawer__content-item">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/icon-07.svg')); ?>" alt="">
                <a href="<?php echo esc_url(home_url('/'))?>contact">お問い合わせ</a>
            </div>
            </div>
        </div>
        </div>
    </div>