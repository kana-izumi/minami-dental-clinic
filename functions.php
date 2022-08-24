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
管理画面「投稿」名前変更
----------------------------------------------*/

  function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );


/*---------------------------------------------
サンクスページへ遷移
----------------------------------------------*/