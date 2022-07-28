<?php
/**
 * Herobiz finction and definitions
 */

if(!function_exists('herobiz_setup')) {
	function herobiz_setup(){
		load_theme_textdomain('herobiz', get_template_directory().'/languages');

		add_theme_support('automatic-feed-links');

		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');

		add_theme_support('custom-background', apply_filters('herobiz_custom_background_args', [
			'default-color' => 'ffffff',
			'default-image'=> '',
		]));

		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'galery',
			'caption'
		]);

		add_theme_support('customize-selective-refresh-widgets');

		add_theme_support('custom-logo', [
			'height' => 250,
			'width'  => 250,
			'flex-width' => true,
			'flex-height' => true,
		]);

		add_theme_support('custom-header', [
			'flex-width' => true,
			'width'  => 1600,
			'flex-height' => true,
			'height' => 450,
			'fefaul-image' => '',
		]);

		add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote',
			'video', 'audio']);

		register_nav_menus([
			'primary' => esc_html__('Primary', 'herobiz'),
			'footer' => esc_html__('Footer Menu', 'herobiz')
		]);
	}
}

add_action('after_setup_theme', 'herobiz_setup');

function herobiz_content_width(){
	$GLOBALS['content_width'] = apply_filters('herobiz_content_width', 1170);
}

add_action('after_setup_theme', 'herobiz_content_width', 0 );

function herobiz_sidebar_widgets_init() {
	register_sidebar([
		'name' =>    esc_html__('Sidebar','herobiz'),
		'id'   =>    'default-sidebar',
		'description' => esc_html__('Add widgets here', 'herobiz'),
		'before_widget' => '<section id ="%1$s" class="widget %2$s">',
		'after_widgget' => '</section>',
		'before_title' =>'<h4 class="widget-title">',
		'after-title' => '</h4>',
	]);
}

add_action('widgets_init', 'herobiz_sidebar_widgets_init');


function herobiz_public_scripts(){

	wp_enqueue_style('dafault', get_template_directory_uri().'/assets/css/default.css', [], wp_rand(), 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', [], wp_rand(), 'all');

	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.css', ['jquery'], wp_rand(), true );
}

add_action('wp_enqueue_scripts','herobiz_public_scripts');

function herobiz_admin_scripts(){

}

add_action('admin_enqueue_scripts', 'herobiz_admin_scripts');