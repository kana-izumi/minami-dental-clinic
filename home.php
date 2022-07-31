<?php get_header(); ?>

    <div class="mv-sub">
      <div class="mv-sub__inner">
        <div class="mv-sub__img u-mobile">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/archive_top-sp.jpg')); ?>" alt="スタッフブログ画像">
        </div>
        <div class="mv-sub__img u-desktop">
          <img src="<?php echo esc_url(get_theme_file_uri('/src/images/blog/archive_top.jpg')); ?>" alt="スタッフブログ画像">
        </div>
        <div class="mv-sub__heading">
          <h2 class="mv-sub__title">お知らせ一覧</h2>
          <span class="mv-sub__lead">NEWS</span>
        </div>
        <?php if(!is_front_page()) { ?>
          <?php if(function_exists('bcn_display')) { ?>
        <div class="bread" vocab="http://schema.org/" typeof="BreadcrumbList">
        </div>
          <?php } ?>
        <?php } ?>
          <ul class="bread__list">
            <li class="bread__item bread__item-grey"><a href="#">ホーム</a></li>
            <li class="bread__item"><a href="#">スタッフ紹介</a></li>
          </ul>
      </div>
    </div>

    <div class="blog blog-wrapper inner">
      <article class="blog-main">
        <div class="blog-main__inner">
          <div class="blog-main__items">
          <?php if(have_posts()): ?>
            <ul>
              <?php while(have_posts()): the_post(); ?>
              <li>
                <time class="news__info-date"><?php echo get_the_date('Y.m.d'); ?></time>
                <a class="news__info-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
              <?php endwhile;?>
            </ul>
          <?php endif; ?>
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
<?php get_sidebar();?>
    </div>
<?php get_footer(); ?>