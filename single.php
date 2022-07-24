<?php get_header(); ?>

    <div class="mv-sub">
      <div class="mv-sub__inner inner">
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
    <!-- /.mv-sub -->
    <div class="blog-page blog-wrapper inner">
      <article class="blog-main">
        <div class="blog-main__inner">
          <h1 class="blog-page__title1">[見出し1]下層ページのタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
            <div class="blog-page__info">
              <div class="blog-page__date">2021.01.01</div>
              <div class="blog-page_category">カテゴリ1</div>
            </div>
            <div class="blog-page__content1">
              <div class="blog-page__text1">
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<a href="">リンクが入ります。</a>テキストが入ります。テキストが入ります。テキストが入ります。</p>
                &nbsp;
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </div>
            <div class="blog-page__content2">
              <h2 class="blog-page__title2">見出し2見出し2見出し2見出し2</h2>
              <figure class="blog-page__img">
                <img src="./src/images/blog/biog-page.jpg" alt="">
              </figure>
            </div>
            <div class="blog-page__content3">
              <h3 class="blog-page__title3">見出し3見出し3見出し3見出し3</h3>
              <div class="blog-page__text2">
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </div>
            <div class="blog-page__content4">
              <h4 class="blog-page__title4">見出し4見出し4見出し4見出し4</h4>
              <div class="blog-page__text2">
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <ul>
                  <li>リスト1</li>
                  <li>リスト2</li>
                  <li>リスト3</li>
                </ul>
            </div>
            </div>
            <div class="blog-page__pager">
              <ul class="blog-page__pagination">
                  <li class="blog-page__pagination-pre"><a href="#">前の記事へ</a></li>
                  <li class="blog-page__pagination-all"><a href="#">記事一覧</a></li>
                  <li class="blog-page__pagination-next"><a href="#">次の記事へ</a></li>
              </ul>
            </div>
        </div>
      </article>
<?php get_sidebar(); ?>
    </div>
    <!-- /.staff.blog -->
<?php get_footer(); ?>