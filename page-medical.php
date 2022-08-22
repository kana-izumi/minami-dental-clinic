<?php
/*
Template Name: 診察案内
*/
?>
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
      <div class="reservation__link">
        <a href="<?php echo esc_url(home_url('/'))?>reservation">
        <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/web-icon.svg')); ?>" alt="WEB予約はこちら">
        <p>WEB予約<br>はこちら</p>
        </a>
      </div>
    </div>

    <section class="medical-menu">
      <div class="medical-menu__inner inner">
        <div class="medical-menu__heading">
          <h3 class="medical-menu__title">一般診療</h3>
          <span class="medical-menu__category">保険対象</span>
        </div>
        <!-- 特定のカテゴリー内の特定タームの記事を表示（サブループ） -->
        <?php
            $args = array(
              'post_type' => 'plan', // カスタム投稿名を指定
              'taxonomy' => 'plan_category' ,//タクソノミー名を指定
              'term' => 'general',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
        <ul class="medical-menu__list">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="medical-menu_item">
            <a href="#medical_<?php echo the_ID(); ?>"><?php the_title();?></a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="medical-menu__inner inner">
        <div class="medical-menu__heading">
          <h3 class="medical-menu__title">特殊診療</h3>
          <span class="medical-menu__category medical-menu__category--red">実費</span>
        </div>
        <!-- 特定のカテゴリー内の特定タームの記事を表示（サブループ） -->
        <?php
            $args = array(
              'post_type' => 'plan', // カスタム投稿名を指定
              'taxonomy' => 'plan_category' ,//タクソノミー名を指定
              'term' => 'specal',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
        <ul class="medical-menu__list">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="medical-menu_item">
            <a href="#specail_<?php echo the_ID(); ?>"><?php the_title();?></a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>


    <div class="medical-content">
      <div class="medical-content__deco-top"></div>
      <div class="medical-content__bg">
        <div class="medical-content__inner inner">
          <div class="section-header">
            <h2 class="section-header__title">一般診療</h2>
          </div>
          <!-- 特定のカテゴリー内の特定タームの記事を表示（サブループ） -->
          <?php
            $args = array(
              'post_type' => 'plan', // カスタム投稿名を指定
              'taxonomy' => 'plan_category' ,//タクソノミー名を指定
              'term' => 'general',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div id="medical_<?php echo the_ID(); ?>" class="medical-content__items1">
            <div id="<?php get_the_ID(); ?>" class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title"><?php the_title(); ?></h3>
                <span class="medical-content__lead"><?php the_field( 'text' ); ?></span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p><?php echo nl2br(get_post_meta($post->ID, 'textarea', true)); ?></p>
                </div>
                <div class="medical-content__img">
                <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('medical'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/img.png')); ?>">
								<?php } ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
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
          <?php
            $args = array(
              'post_type' => 'plan', // カスタム投稿名を指定
              'taxonomy' => 'plan_category' ,//タクソノミー名を指定
              'term' => 'specal',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div id="specail_<?php echo the_ID(); ?>" class="medical-content__items2">
            <div class="medical-content__item">
              <div class="medical-content__heading">
                <h3 class="medical-content__title"><?php the_title(); ?></h3>
                <span class="medical-content__lead"><?php the_field( 'text' ); ?></span>
              </div>
              <div class="medical-content__body">
                <div class="medical-content__text">
                  <p><?php echo nl2br(get_post_meta($post->ID, 'textarea', true)); ?></p>
                </div>
                <div class="medical-content__img">
                <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('staff'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/img.png')); ?>">
								<?php } ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
        </div>
      </div>
      <div class="medical-content__deco-bottom"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>