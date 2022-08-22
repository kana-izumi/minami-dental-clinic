<aside class="blog-side">
    <div class="blog-side__about">
            <div class="blog-side__about-title">
              <h3>クリニックの紹介</h3>
            </div>
            <figure class="blog-side__about-img">
              <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/sidebar-img_1.jpg')); ?>" alt="">
            </figure>
            <div class="blog-side__about-text">
              <p>みなみ歯科クリニック</p>
              <p>お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
            </div>
            <div class="blog-side__about-link">
              <a href="<?php echo esc_url(home_url('/'))?>about">当院について</a>
            </div>
          </div>
          <div class="blog-side__post">
            <div class="blog-side__post-title">
              <h3>新着記事</h3>
            </div>
            <div class="blog-side__post-items">
              <!-- 新着記事表示 -->
            <?php
            $args = array(
            'post_type' => 'blog',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $new_posts = get_posts($args);
            foreach($new_posts as $post): setup_postdata( $post );
            ?>
            <div class="blog-side__post-block">
              <a class="blog-side__post-item">
                <figure class="blog-side__post-img">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('sidebar'); ?>
                    <?php } else { ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/noimg.png')); ?>">
                      <?php } ?>
                    </figure>
                  </a>
                    <a class="blog-side__body">
                      <div class="blog-side__tag"><?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?></div>
                      <p class="blog-side__title"><?php the_title(); ?></p>
                      <time class="blog-side__date" datetime="2020-02-14"><?php echo get_the_date('Y.m.d'); ?></time>
                    </a>
                </div>
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="blog-side__category">
            <h3 class="blog-side__category-title">カテゴリー</h3>
            <ul class="blog-side__category-items">
              <?php
				      $args = [
				      	'taxonomy' => 'blog_category'
				      ];
				      $terms = get_terms($args);
				      foreach ($terms as $term) {
				      	echo '<li class="blog-side__category-item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
				      }
				      ?>
            </ul>
          </div>
      </aside>