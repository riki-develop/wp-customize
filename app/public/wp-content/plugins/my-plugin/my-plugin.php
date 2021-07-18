<?php
/*
 * Plugin Name: マイプラグイン
 * Version: 1.0
 * Description: テストプラグイン
 * Author: Karasawa
*/

// ショートコードを定義
add_shortcode('date', function() {
	return date('Y年 n月 j日 H:i:s');
});

// パラメータを渡すショートコード記述例
add_shortcode('sum', function($atts) {
	// パラメータが空の場合はデフォルト値を返す
	$atts = shortcode_atts([
		'x' => 0,
		'y' => 0
	], $atts, 'sum');

	return $atts['x'] + $atts['y'];
});

// アクションフックinitの例：WPロード後に発火
// カスタム投稿追加の定義
add_action('init', function() {
	register_post_type('item', [
		'label' => '商品',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-store',
		'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
		'has_archive' => true,
		'show_in_rest' => true,
	]);
	// カスタム分類定義
	register_taxonomy('genre', 'item', [
		'label' => '商品ジャンル',
		'hierarchical' => true,
		'show_in_rest' => true,
	]);
});

// アクションフックget_headerの例：ヘッダーテンプレートが呼ばれる前に発火
add_action('get_header', function() {
	echo 'アクションフックが動作しました';
});
// アクションフックget_footerの例：ヘッダーテンプレートが呼ばれる前に発火
add_action('get_footer', function() {
	echo 'アクションフックが動作しました';
});