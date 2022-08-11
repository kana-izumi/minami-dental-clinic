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
            <div class="blog-main__items">
            <?php
          $information= get_posts( array(
          //ここで取得条件を指定する
          'posts_per_page' => 5 ,
          'post_type' => 'blog' ,
          ));
          if( $information):
          ?>
          <?php
          foreach( $information as $post ):
          setup_postdata( $post );
          ?>
              <a class="blog-main__item">
                <figure class="blog-main__img">
                <?php if (has_post_thumbnail()) { ?>
									<?php the_post_thumbnail('blog'); ?>
								<?php } else { ?>
									<img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/img.png')); ?>">
								<?php } ?>
                </figure>
                <div class="blog-main__body">
                  <div class="blog-main__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?></div>
                  <p class="blog-main__title"><?php the_title(); ?></p>
                  <time class="blog-main__date" datetime="2020-02-14"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </a>
              <?php
            endforeach;
            wp_reset_postdata();
            ?>
          <?php else: ?>
            <p>表示できる新着情報はありません。</p>
          <?php endif; ?>
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