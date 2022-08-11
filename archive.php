<?php get_header(); ?>
<?php get_template_part('template-parts/header')?>
    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img blog-mv"></div>
          <div class="mv-sub__heading">
            <h2 class="mv-sub__title">スタッフブログ</h2>
            <span class="mv-sub__lead">STAFF BLOG</span>
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

    <div class="blog blog-wrapper inner">
      <article class="blog-main">
        <div class="blog-main__inner">
        <?php if(have_posts()) : ?>
          <div class="blog-main__items">
            <?php while (have_posts()) : the_post() ;?>
              <a class="blog-main__item" href="<?php the_permalink(); ?>">
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
                    <time class="blog-main__date" datetime="2020-02-14"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                  </div>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- pagination -->
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
            <?php
            $args = array(
            	'mid_size' => 2,
            	'prev_text' => '前へ',
            	'next_text' => '次へ',
            	'screen_reader_text' => 'ページャー'
            );
            the_posts_pagination($args);
            ?>
            <!-- /pagination -->
            <?php endif; ?>
          </div>
        </div>
      </article>
<?php get_sidebar(); ?>
    </div>

<?php get_footer();?>
