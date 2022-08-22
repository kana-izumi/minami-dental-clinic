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
          <div class="reservation__link">
        <a href="<?php echo esc_url(home_url('/'))?>reservation">
        <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/web-icon.svg')); ?>" alt="WEB予約はこちら">
        <p>WEB予約<br>はこちら</p>
        </a>
      </div>
      </div>
    </div>

    <div class="blog-page blog-wrapper inner">
      <article class="blog-page__main">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post() ;?>
          <div class="blog-main__inner">
            <h1 class="blog-page__title1"><?php the_title(); ?></h1>
            <div class="blog-page__info">
              <div class="blog-page__date"><?php echo get_the_date('Y.m.d'); ?></div>
              <div class="blog-page_category"><?php echo esc_html( get_the_terms( get_the_ID(), 'blog_category' )[0]->name ); ?></div>
            </div>
            <div class="blog-page__content1">
              <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- ページネーション -->
          <div class="blog-page__pager">
            <ul class="blog-page__pagination">
            <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
            <li>
                <a class="blog-page__pagination-pre" href="<?php echo get_permalink($nextpost->ID); ?>">
                前の記事へ
                </a>
            </li>
            <?php endif; ?>
            <li>
              <a class="blog-page__pagination-all" href="<?php echo esc_url(home_url('/'))?>archive">
              記事一覧
              </a>
            </li>
            <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
            <li>
                <a class="blog-page__pagination-next" href="<?php echo get_permalink($nextpost->ID); ?>">
                次の記事へ
                </a>
            </li>
            <?php endif; ?>
            </ul>
          </div>
          </article>
            <?php get_sidebar('blog'); ?>
          </div>
        </div>
<?php get_footer(); ?>