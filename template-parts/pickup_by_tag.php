<section class="staff-blog">
      <div class="staff-blog__inner inner">
        <div class="staff-blog-header">
          <h2 class="staff-blog__title">スタッフブログ</h2>
        </div>
        <div class="staff-blog__items">
            <?php
            $pickup_posts = get_posts(array(
                'post_type' => 'post', // 投稿タイプ
                'posts_per_page' => '6', // 6件取得
                'tag' => 'pickup', // pickupタグがついたものを
                'orderby' => 'DESC', // 新しい順に
            ));
            ?>
      <?php foreach ($pickup_posts as $post) : setup_postdata($post); ?>
          <?php if(have_posts()):?>
            <?php while(have_posts()): the_post();?>
              <a class="staff-blog__item">
                  <figure class="staff-blog__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/staff-blog.jpg')); ?>" alt="ブログカード1">
                  </figure>
                  <div class="staff-blog__body">
                    <div class="staff-blog__category">お知らせ</div>
                    <p class="staff-blog__head"><?php the_title(); ?></p>
                    <time class="staff-blog__date" datetime="2020-02-14"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
              </a>
            <?php endwhile; ?>
          <?php endif;?>
          <div class="staff-blog__link">
            <a href="" class="staff-blog__link-btn">スタッフブログ一覧はこちら</a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
