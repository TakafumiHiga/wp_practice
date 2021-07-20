<?php

/*管理画面でのアイキャッチ画像の追加*/
add_theme_support('post-thumbnails');

/* アイキャッチ画像 サイズ指定追加 */
function my_theme_setup()
{
add_theme_support('post-thumbnails');
add_image_size('medium_thumbnail', 300, 200, true); // クロップモード
add_image_size('small_thumbnail', 90, 90, true); // クロップモード
add_image_size('large_thumbnail', 600, 400, true); // クロップモード
add_action('after_setup_theme', 'my_theme_setup');

}

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive( $args, $post_type ) {

  if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'archive'; // スラッグ名
   
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// カスタムメニューを追加
add_theme_support('menus');

register_nav_menus ( array(
 'global' => 'グローバル',
));

//カスタム投稿機能商品を追加

function cpt_add_item() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "item",
		"edit_item" => "item",
	];
	$args = [  //配列を定義
		"label" => "商品", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "商品一覧",//投稿タイプの簡潔な説明
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true, //アーカイブページ
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,//親子関係
		
		"rewrite" => [ "slug" => "item", "with_front" => true ], //スラッグをitemに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail", "customfields" ],
		'menu_icon' => 'dashicons-store',//wp公式アイコン
	];
	register_post_type( "item", $args );//カスタム投稿タイプを追加する関数
}
add_action( 'init', 'cpt_add_item' );