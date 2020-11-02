<?php
/**
* WordPress標準機能
*
* @codex
https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
*/
function my_setup() {
add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
add_theme_support( 'html5', array( /* HTML5のタグで出力 */
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
) );
}
add_action( 'after_setup_theme', 'my_setup' );


function custom_excerpt_length( $length ) {
return 200; //表示したい文字数
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




function new_excerpt_more($more) {
$html = '<a href="' . esc_url( get_permalink() ) . '">[...続きを読む]</a>';
return $html;
}

add_filter('excerpt_more', 'new_excerpt_more');


//add_image_size( [画像サイズの名前], [幅], [高さ], [切り抜きするか（初期値:False）] );
add_image_size('thumbnail_medium',300,300,false);