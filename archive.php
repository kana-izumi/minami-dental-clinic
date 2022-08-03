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

    <div class="blog blog-wrapper inner">
      <article class="blog-main">
        <div class="blog-main__inner">
        <?php if(have_posts()) : ?>
          <div class="blog-main__items">
            <?php while (have_posts()) : the_post() ;?>
              <a class="blog-main__item" href="<?php the_permalink(); ?>">
                  <figure class="blog-main__img">
                    <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/blog.jpg')); ?>" alt="ブログカード1">
                  </figure>
                  <div class="blog-main__body">
                    <div class="blog-main__category">お知らせ</div>
                    <p class="blog-main__title"><?php the_title(); ?></p>
                    <time class="blog-main__date" datetime="2020-02-14"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                  </div>
              </a>
            <?php endwhile; ?>
            <div class="blog-main__pager">
              <ul class="blog-main__pagination">
                  <li class="blog-main__pre"><a href="#"><span>前へ</span></a></li>
                  <li class="blog-main__all"><a href="#" class="active"><span>1</span></a></li>
                  <li class="blog-main__all"><a href="#"><span>2</span></a></li>
                  <li class="blog-main__all"><a href="#"><span>3</span></a></li>
                  <li class="blog-main__all"><a href="#"><span>‥</span></a></li>
                  <li class="blog-main__all"><a href="#"><span>20</span></a></li>
                  <li class="blog-main__next"><a href="#"><span>次へ</span></a></li>
              </ul>
            </div>
          <?php endif; ?>
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
            <!-- pagination -->
             <div class="pagination">
            <?php
             echo
             paginate_links(
             array(
               'end_size' => 1,
               'mid_size' => 1,
               'prev_next' => true,
               'prev_text' => '<i class="fas fa-angle-left"></i>',
               'next_text' => '<i class="fas fa-angle-right"></i>',
             )
             );
              ?>
              </div><!-- /pagination -->
            <?php endif; ?>
          </div>
        </div>
      </article>
<?php get_sidebar(); ?>
    </div>

<?php get_footer();?>
