<?php

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// アイキャッチ画像
add_theme_support('post-thumbnails');

// 基本サイズ
set_post_thumbnail_size(640, 640);

// Mサイズ
add_image_size('msize', 400, 400);

// Sサイズ
add_image_size('ssize', 120, 120, true);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//カスタムメニュー

register_nav_menus(array(
		'navbar' => 'ナビゲーションバー'
		));
?>