<?php
/*
 * Template Name: functions.php
 */

/* style.cssの読み込み */
function register_style() {
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '2025/1/1'
    );
    wp_enqueue_style( 'cdn_font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/style.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'register_style' );

/* アイキャッチ画像を有効化 */
function enable_post_thumbnails() {
    add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を有効化
    set_post_thumbnail_size( 150, 150, true ); // サムネイルのサイズを指定 (幅, 高さ, トリミング)
}
add_action( 'after_setup_theme', 'enable_post_thumbnails' );