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