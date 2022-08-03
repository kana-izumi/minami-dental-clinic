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

// // Contact Form7の送信ボタンをクリックした後の遷移先設定
// add_action( 'wp_footer', 'add_origin_thanks_page' );
// function add_origin_thanks_page() {
// $thanks = home_url('/contact-thanks');
// $recruit = home_url('/reservation-thanks');
//     echo <<< EOC
//     <script>
//         var thanksPage = {
//         33: '{$thanks}',
//         52: '{$recruit}',
//     };
//     document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = thanksPage[event.detail.contactFormId];
//     }, false );
//     </script>
// EOC;
// }

/*---------------------------------------------
アイキャッチ画像設定
-----------------------------------------------*/
function setup_post_thumnails(){
	add_theme_support('post-thumbnails');
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
メインクエリの変更（ブログのアーカイブページにて表示件数を10件にする）
----------------------------------------------*/
// カスタム投稿タイプ【ブログ】：メインクエリの変更（アーカイブページにて表示件数を10件にする）
function change_set_blog($query) {
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}
	if ( $query->is_post_type_archive('blog')) {
		$query->set( 'posts_per_page', '10' );
		return;
	}
}
add_action( 'pre_get_posts', 'change_set_blog' );

//カスタム投稿タイプ【ブログ】：アーカイブページ抜粋文の長さ変更
function change_excerpt_length(){
	$length = 80;
	if(is_post_type_archive('blog')){
		return 50; //リターンした時点で処理は終了する
	}
	return $length; // デフォルト110文字
}
 add_filter('excerpt_length', 'change_excerpt_length',999);
