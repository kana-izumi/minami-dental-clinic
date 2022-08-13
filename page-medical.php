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
        <!-- 子タームのみ取得 -->
        <?php
        $taxonomy_name = 'plan_category'; //カスタムタクソノミー名
        $term_id = 166; //親タームID
        $termchildren = get_term_children( $term_id, $taxonomy_name );
        foreach ( $termchildren as $child ) :?>
         <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
         <li class="medical-menu_item"><a href="#common<?php get_the_ID(); ?>">
            <?php echo $term->name; //ターム名 ?>
          </li></a>
        <?php endforeach; ?>
        </ul>
      </div>
      <div class="medical-menu__inner inner">
        <div class="medical-menu__heading">
          <h3 class="medical-menu__title">特殊診療</h3>
          <span class="medical-menu__category medical-menu__category--red">実費</span>
        </div>
        <ul class="medical-menu__list">
        <?php
        $taxonomy_name = 'plan_category'; //カスタムタクソノミー名
        $term_id = 167; //親タームID
        $termchildren = get_term_children( $term_id, $taxonomy_name );
        foreach ( $termchildren as $child ) :?>
         <?php $term = get_term_by( 'id', $child, $taxonomy_name );?>
         <li class="medical-menu_item"><a href="#specal">
            <?php echo $term->name; //ターム名 ?>
         </a></li>
        <?php endforeach; ?>
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
          <div id="common<?php get_the_ID(); ?>" class="medical-content__items1">
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
          <div id="specal" class="medical-content__items2">
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
    </div>
  </div>
<?php get_footer(); ?>