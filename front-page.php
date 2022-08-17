<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
<div class="main-visual">
  <div class="main-visual__inner">
    <div class="main-visual__items">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="main-visual__img1 u-mobile">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-01-sp.jpg')); ?>" alt="メイン画像">
            </div>
            <div class="main-visual__img1 u-desktop">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-01.jpg')); ?>" alt="メイン画像">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="main-visual__img2 u-mobile">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-02-sp.jpg')); ?>" alt="メイン画像">
            </div>
            <div class="main-visual__img1 u-desktop">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-02.jpg')); ?>" alt="メイン画像">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="main-visual__img3 u-mobile">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-03-sp.jpg')); ?>" alt="メイン画像">
            </div>
            <div class="main-visual__img1 u-desktop">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-03.jpg')); ?>" alt="メイン画像">
            </div>
          </div>
          <div class="main-visual__catch">
            <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/top-text.svg')); ?>" alt="">
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
      </div>
      <div class="reservation__link">
        <a href="<?php echo esc_url(home_url('/'))?>reservation"><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/btn-reserve.png')); ?>" alt="WEB予約はこちら"></a>
      </div>
    <section class="news">
      <div class="news__inner">
        <div class="news__info">
          <div class="news__heading">
            <h3 class="news__heading-title">お知らせ<span class="news__heading-lead">news</span></h3>
            <p class="news__heading-link"><a href="<?php echo esc_url(home_url('/'))?>news">過去のお知らせはこちら</a></p>
          </div>
          <div class="news__body">
            <?php $argc = array(
              'post_type' => 'post' ,
              'posts_per_page' => '1'
            );
            $the_query = new WP_Query($argc);
            ?>
            <?php if($the_query -> have_posts()): ?>
            <ul>
              <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="news__body-link">
                  <time class="news__info-date"><?php echo get_the_date('Y.m.d'); ?></time>
                  <div class="news__info-text"><?php the_title(); ?></div>
              </a>
              </li>
              <?php endwhile;?>
              <?php wp_reset_postdata(); ?>
            </ul>
            <?php endif; ?>
          </div>
        </div>
        <div class="news__medical-time">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/medical-time-pc.jpg')); ?>" alt="">
        </div>
      </div>
    </section>

    <section class="about">
      <div class="about__inner inner">
        <div class="about__body">
          <span class="about__heading-lead">concept</span>
          <h3 class="about__heading-title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h3>
          <p class="about__message">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
            <div class="about__link">
              <a class="about__link-btn" href="<?php echo esc_url(home_url('/'))?>about">当院について</a>
            </div>
        </div>
      </div>
      <div class="about__img">
        <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/concept-img1.jpg')); ?>" alt="">
      </div>
    </section>
    <div class="recommend">
      <div class="recommend__inner inner">
        <div class="recommend-header">
          <h2 class="recommend-header__title">当院の3つのおすすめ</h2>
        </div>
        <div class="recommend__items">
          <div class="recommend__item">
            <div class="recommend__item-title">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-1.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-img-01.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-text">
              <p>歯の治療において、小さな違和感は大きなストレスにつながります。<br>
                私たちは常に快適な歯科医療技術の研究を行っております。</p>
            </div>
          </div>
          <div class="recommend__item">
            <div class="recommend__item-title">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-2.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-img-02.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-text">
              <p>「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
            </div>
          </div>
          <div class="recommend__item">
            <div class="recommend__item-title">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-3.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-img">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/recommend-img-03.svg')); ?>" alt="">
            </div>
            <div class="recommend__item-text">
              <p>朝から夜までお仕事をされている方のために、診療時間を見直しました。
                <p class="recommend__item-text--red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="treatment-guidance">
      <div class="treatment-guidance__deco-top"></div>
      <div class="treatment-guidance-bg">
        <div class="treatment-guidance__inner inner">
          <div class="treatment-guidance__header">
            <h2 class="treatment-guidance__title">診療案内</h2>
          </div>
          <div class="treatment-guidance__items">
            <div class="treatment-guidance__flex">
              <div class="treatment-guidance__item">
                <div class="treatment-guidance-img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/medical_1.jpg')); ?>" alt="一般治療">
                </div>
                <div class="treatment-guidance__content">
                  <p class="treatment-guidance__content-title">一般診療</p>
                  <p class="treatment-guidance__content-border"></p>
                  <p class="treatment-guidance__content-lead">虫歯・入れ歯・小児歯科</p>
                </div>
              </div>
              <div class="treatment-guidance__item">
                <div class="treatment-guidance-img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/medical_2.jpg')); ?>" alt="特殊治療">
                </div>
                <div class="treatment-guidance__content">
                  <p class="treatment-guidance__content-title">特殊診療</p>
                  <p class="treatment-guidance__content-border"></p>
                  <p class="treatment-guidance__content-lead">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</p>
                </div>
              </div>
            </div>
              <div class="treatment-guidance__text">
                当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
                痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
                <p class="treatment-guidance__text--red">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</p>
              </div>
            </div>
          </div>
      </div>
      <div class="treatment-guidance__deco-bottom"></div>
    </section>
    <section class="staff-blog">
      <div class="staff-blog__inner inner">
        <div class="staff-blog-header">
          <h2 class="staff-blog__title">スタッフブログ</h2>
        </div>
        <div class="staff-blog__items">
        <?php
          $information= get_posts( array(
          //ここで取得条件を指定する
          'posts_per_page' => 6 ,
          'post_type' => 'blog' ,
          ));
          if( $information):
          ?>
        <?php
        foreach( $information as $post ):
        setup_postdata( $post );
        ?>
              <a class="staff-blog__item" href="<?php the_permalink(); ?>">
                  <figure class="staff-blog__img">
                  <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('blog'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/20200501_noimage.jpg')); ?>">
								<?php } ?>
                  </figure>
                  <div class="staff-blog__body">
                    <div class="staff-blog__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?></div>
                    <p class="staff-blog__head"><?php the_title(); ?></p>
                    <time class="staff-blog__date" datetime="2020-02-14"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
              </a>
          <?php
            endforeach;
            wp_reset_postdata();
            ?>
          <?php else: ?>
            <p>表示できる情報はありません。</p>
          <?php endif; ?>
          <div class="staff-blog__link">
            <a href="<?php echo esc_url(home_url('/'))?>blog" class="staff-blog__link-btn">スタッフブログ一覧はこちら</a>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>