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

    <div class="blog-page blog-wrapper inner">
      <article class="blog-main">
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
          <div class="blog-page__pager">
            <ul class="blog-page__pagination">
              <li >
              <?php
              $link = get_previous_posts_link('前の記事へ');
              if ($link) {
                $link = str_replace('<a' , '<a class="blog-page__pagination-pre"' , $link);
                echo $link;
              }
              ?>
              </li>
              <li><a class="blog-page__pagination-all" href="<?php echo esc_url(home_url('/'))?>archive">記事一覧</a></li>
              <li>
              <?php
              $link = get_next_posts_link('前の記事へ');
              if ($link) {
                $link = str_replace('<a' , '<a class="blog-page__pagination-next"' , $link);
                echo $link;
              }
              ?>
              </li>
            </ul>
          </div>
          </article>
            <?php get_sidebar(); ?>
          </div>
        </div>
<?php get_footer(); ?>