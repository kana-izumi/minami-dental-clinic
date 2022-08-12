<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
    <div class="mv-sub">
      <div class="mv-sub__inner">
      <div class="mv-sub__img medical-mv"></div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">診療案内</h2>
          <span class="mv-sub__lead">MEDICAL</span>
        </div>
        <?php if (!is_front_page()) { ?>
          <?php if (function_exists('bcn_display')) { ?>
            <div class="bread" vocab="http://schema.org/" typeof="BreadcrumbList">
            <?php bcn_display();?>
            </div>
          <?php } ?>
          <?php } ?>
      </div>
    </div>

    <section class="medical-menu">
      <div class="medical-menu__inner inner">
        <div class="medical-menu__heading">
          <h3 class="medical-menu__title">一般診療</h3>
          <span class="medical-menu__category">保険対象</span>
        </div>
        <ul class="medical-menu__list">
        <?php
        $terms = get_terms( 'plan_general', 'hide_empty=0' );
        foreach ( $terms as $term ) {
            echo '<li class="medical-menu_item"><a href="">' . $term->name . '</a></li>';
        }
        ?>
        </ul>
      </div>
      <div class="medical-menu__inner inner">
        <div class="medical-menu__heading">
          <h3 class="medical-menu__title">特殊診療</h3>
          <span class="medical-menu__category medical-menu__category--red">実費</span>
        </div>
        <ul class="medical-menu__list">
          <?php
        $terms = get_terms( 'plan_special', 'hide_empty=0' );
        foreach ( $terms as $term ) {
            echo '<li class="medical-menu_item">' . $term->name . '</li>';
        }
        ?>
        </ul>
      </div>
    </section>

    <div class="medical-content">
      <div class="medical-content__deco-top"></div>
      <div class="medical-content__bg">
        <div class="medical-content__inner inner">
          <div class="section-header">
            <h2 class="section-header__title">一般治療</h2>
          </div>
          <div id="#medical_<?php echo the_ID();?>" class="medical-content__items1">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">一般歯科</h3>
                <span class="medical-content__lead">虫歯治療、歯茎がしみるなど</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_6.jpg')); ?>" alt="一般治療">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items1">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">小児歯科</h3>
                <span class="medical-content__lead">小さいお子様の歯の治療</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_2.jpg')); ?>" alt="小児歯科">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items1">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">予防歯科</h3>
                <span class="medical-content__lead">口腔内のケア全般</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_2.jpg')); ?>" alt="小児歯科">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="medical-content__deco-bottom"></div>
  <div class="medical-content">
    <div class="medical-content__deco-top"></div>
      <div class="medical-content__bg">
        <div class="medical-content__inner inner">
          <div class="section-header">
            <h2 class="section-header__title">特殊診療</h2>
          </div>
          <div class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">入れ歯</h3>
                <span class="medical-content__lead">入れ歯を作りたい、調整したい</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    &nbsp;
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_6.jpg')); ?>" alt="入れ歯">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">矯正歯科</h3>
                <span class="medical-content__lead">歯並びが気になる</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_5.jpg')); ?>" alt="矯正歯科">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">ホワイトニング</h3>
                <span class="medical-content__lead">歯を白くしたい</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_5.jpg')); ?>" alt="ホワイトニング">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">口腔外科</h3>
                <span class="medical-content__lead">インプラント、親知らずの抜歯</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/medical/medical_7.jpg')); ?>" alt="口腔外科">
                </div>
              </div>
            </div>
          </div>
          <div class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title">レーザー治療</h3>
                <span class="medical-content__lead">口内炎を治したい</span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__body">
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    &nbsp;
                  <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="medical-content__img">
                  <img src="<?php echo esc_url(get_theme_file_uri('/src/images/about/page-about_top-sp.jpg')); ?>" alt="レーザー治療">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="medical-content__deco-bottom"></div>
    </div>
  </div>
<?php get_footer(); ?>