<?php
/*---------------------------------------------
cssとscriptを読み込む
-----------------------------------------------*/
function my_theme_scripts(){
    wp_enqueue_style('css',get_theme_file_uri('/css/styles.css'));
    wp_enqueue_style('jquery');
    wp_enqueue_script('js', get_theme_file_uri('/js/script.js'), ['jquery']);
}
add_action('wp_enqueue_scripts' , 'my_theme_scripts');

/*---------------------------------------------
アイキャッチ画像設定
-----------------------------------------------*/
function setup_post_thumnails(){
	add_theme_support('post-thumbnails');
    add_image_size('blog', 244, 153, true);
    add_image_size('medical', 420, 315, true);
    add_image_size('staff', 280, 280, true);
    add_image_size('sidebar', 120, 90, true);
}
add_action('after_setup_theme', 'setup_post_thumnails');

/*---------------------------------------------
各テンプレートごとのメイン画像を表示
----------------------------------------------*/
function get_main_image() {
    if ( is_page(  ) ) :
        return get_the_post_thumbnail();
    elseif(is_page(  )):
    elseif(is_page( 'medical' )):
    elseif(is_page(  )):
    elseif(is_page()):
    elseif(is_page()):
    elseif(is_home( 'news' )):
    elseif(is_single( 'blog' )):

    endif;
}

/*---------------------------------------------
メインクエリの変更
----------------------------------------------*/
function topNews_posts_per_page($query){
    if(is_admin() || !$query->is_main_query()){
       return;
    }
    if($query->is_front_page()){
       $query->set('posts_per_page','1');
       return;
    }
}
add_action('pre_get_posts','topNews_posts_per_page');

/*---------------------------------------------
サンクスページへ遷移
----------------------------------------------*/

add_action( 'wp_footer', 'add_origin_thanks_page' );
  function add_origin_thanks_page() {
    echo <<< EOC
      <script>
        var thanksPage = {
          123: 'https://xxxxxxxx.com/thanks/',
          2345: 'https://xxxxxxxx.com/thanks-recruit/',
        };
       document.addEventListener( 'wpcf7mailsent', function( event ) {
         location = thanksPage[event.detail.contactFormId];
       }, false );
      </script>
    EOC;
  }