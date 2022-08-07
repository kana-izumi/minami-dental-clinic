<?php get_header(); ?>
<?php get_template_part('includes/header')?>
    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img u-mobile">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/archive_top-sp.jpg')); ?>" alt="スタッフブログ画像">
        </div>
        <div class="mv-sub__img u-desktop">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/archive_top.jpg')); ?>" alt="スタッフブログ画像">
        </div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">スタッフブログ</h2>
          <span class="mv-sub__lead">STAFF BLOG</span>
        </div>
        <div class="bread">
          <ul class="bread__list">
            <li class="bread__item bread__item-grey"><a href="#">ホーム</a></li>
            <li class="bread__item"><a href="#">スタッフ紹介</a></li>
          </ul>
        </div>
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
              <div class="blog-page_category">お知らせ<?php the_category();?></div>
            </div>
            <div class="blog-page__content1">
              <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
          <div class="blog-page__pager">
            <ul class="blog-page__pagination">
              <li ><a class="blog-page__pagination-pre" href="#">前の記事へ</a></li>
              <li><a  class="blog-page__pagination-all" href="#">記事一覧</a></li>
              <li><a  class="blog-page__pagination-next" href="#">次の記事へ</a></li>
            </ul>
          </div>
          <?php
          $link = get_next_posts_link('前の記事へ');
          if ($link) {
            $link = str_replace('<a' , '<a class="blog-page__pagination-pre"' , $link);
            echo $link;
          }
          ?>
          </article>
            <?php get_sidebar(); ?>
          </div>
        </div>
<?php get_footer(); ?>