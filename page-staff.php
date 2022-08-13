<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img staff-mv"></div>
          <div class="mv-sub__heading">
            <h2 class="mv-sub__title">スタッフ紹介</h2>
            <span class="mv-sub__lead">STAFF</span>
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
    <!-- /.mv-sub -->
    <div class="greeting-boss">
      <div class="greeting-boss__inner inner">
        <div class="section-header">
          <h2 class="section-header__title">院長のあいさつ</h2>
        </div>
        <div class="greeting-boss__content">
          <div class="greeting-boss__message">
            <p class="greeting-boss__message-title">
              気軽に相談できる<br>街の歯医者さんでありたい。
            </p>
            <p class="greeting-boss__message-text">
              当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br>
              &nbsp;
              「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
            </p>
            <p class="greeting-boss__messageーauthor">
              みなみ歯科クリニック<br>
              院長  南 俊雄
            </p>
            <div class="greeting-boss__img--sp"></div>
            <div class="greeting-boss__career">
              <dl class="greeting-boss__career-list">
                <dt>経歴</dt>
                <dd>2004年 東京医科歯科大学歯学部 卒業</dd>
                <dd>2008年 東京歯科大学歯学研究科大学院修了<br>
                  博士(歯学)取得</dd>
                <dd>2012年 みなみ歯科クリニック 開院</dd>
              </dl>
              <dl class="greeting-boss__career-list">
                <dt>資格</dt>
                <dd>歯科医師臨床研修指導歯科医</dd>
                <dd>博士(歯学)</dd>
                <dd>衛生検査技師</dd>
              </dl>
            </div>
          </div>
            <div class="greeting-boss__img--pc"></div>
        </div>
      </div>
    </div>
    <!-- /.greeting-boss -->
    <div class="greeting-staff">
      <div class="greeting-staff__inner inner">
        <div class="section-header">
          <h2 class="section-header__title">スタッフ紹介</h2>
        </div>
        <div class="greeting-staff__content">
          <h4 class="greeting-staff__title">歯科衛生士</h4>
          <!-- 特定のカテゴリー内の特定タームの記事を表示（サブループ） -->
          <?php
            $args = array(
              'post_type' => 'staffs', // カスタム投稿名を指定
              'taxonomy' => 'staffs_category' ,//タクソノミー名を指定
              'term' => 'dental-hygienist',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="greeting-staff__items">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="greeting-staff__item">
              <div class="greeting-staff__img">
              <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('staff'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/img.png')); ?>">
								<?php } ?>
              </div>
                <div class="greeting-staff__name">
                  <p><?php echo get_the_term_list( $post->ID, 'staffs_category'); ?><span><?php the_title(); ?></span></p>
                </div>
                  <table class="greeting-staff__list">
                    <tr>
                      <th>出身地</th>
                      <td><?php the_field( 'birthplace' ); ?></td>
                    </tr>
                    <tr>
                      <th>趣味</th>
                      <td><?php the_field( 'hobby' ); ?></td>
                    </tr>
                    <tr>
                      <th>好きな食べ物</th>
                      <td><?php the_field( 'text' ); ?></td>
                    </tr>
                  </table>
                </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
            </div>
          </div>
        <div class="greeting-staff__content">
          <h4 class="greeting-staff__title">歯科助手</h4>
          <!-- 特定のカテゴリー内の特定タームの記事を表示（サブループ） -->
          <?php
            $args = array(
              'post_type' => 'staffs', // カスタム投稿名を指定
              'taxonomy' => 'staffs_category' ,//タクソノミー名を指定
              'term' => 'dental-assistant',//タームのスラッグを指定
              'order' => 'ASC', //最新順'DESC'・古い順'ASC'
              'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="greeting-staff__items">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="greeting-staff__item">
              <div class="greeting-staff__img">
              <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('staff'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/img.png')); ?>">
								<?php } ?>
              </div>
                <div class="greeting-staff__name">
                  <p><?php echo get_the_term_list( $post->ID, 'staffs_category'); ?><span><?php the_title(); ?></span></p>
                </div>
                  <table class="greeting-staff__list">
                    <tr>
                      <th>出身地</th>
                      <td><?php the_field( 'birthplace' ); ?></td>
                    </tr>
                    <tr>
                      <th>趣味</th>
                      <td><?php the_field( 'hobby' ); ?></td>
                    </tr>
                    <tr>
                      <th>好きな食べ物</th>
                      <td><?php the_field( 'text' ); ?></td>
                    </tr>
                  </table>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <!-- 投稿が無い場合の処理 -->
                <?php endif; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.greeting-staff -->
  <?php get_footer(); ?>