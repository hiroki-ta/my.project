<?php

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//カスタムヘッダー

add_custom_image_header('','admin_header_style');
function admin_header_style() {}

//標準のヘッダー画像を指定
define('HEADER_IMAGE','%s/images/header.jpg');

//ヘッダー画像の横幅と高さを指定
define('HEADER_IMAGE_WIDTH','800');
define('HEADER_IMAGE_HEIGHT','380');

//ヘッダーの文字を隠す
define('NO_HEADER_TEXT',true);

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//カスタムメニュー

register_nav_menus(array(
	'navbar' => 'ナビゲーションバー'
	));

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//エディタ・スタイルシート

add_editor_style();

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//アイキャッチ画像

add_theme_support('post-thumbnails');

set_post_thumbnail_size(800, 180, true);
	
?>