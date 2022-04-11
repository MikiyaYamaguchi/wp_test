<?php
//WP管理画面にメニュー設定画面を追加
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
	register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

add_theme_support('custom-header', $custom_header_defaults);

//テーマの中で使われる位置設定
if (!function_exists('lab_setup')) {
	function lab_setup()
	{

		register_nav_menus(array(
			'global' => 'グローバルナビ',
			'footer' => 'フッターメニュー'
		));
	}
}
add_action('after_setup_theme', 'lab_setup');

//WP管理画面にウィジェット設定画面追加
function sample_widgets()
{
	register_sidebar(array(
		'name' => '共通サイドバー',
		'id' => 'sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'sample_widgets');
