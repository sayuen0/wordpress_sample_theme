<?php

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
  // file does not exist... return an error.
  return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
  // file exists... require it.
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

//省略表示の長さ
function twpp_change_excerpt_length( $length ) {
  return 100;
}


function twpp_setup_theme() {
//サムネイル
  add_theme_support( 'post-thumbnails' );


//  ナヴィゲーション
  register_nav_menus( array(
    'primary' => __( 'Primary Menu')
  ) );

//投稿フォーマット
  add_theme_support("post-formats",array("aside","gallery"));

}
add_action( 'after_setup_theme', 'twpp_setup_theme' );


add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//もっと読む
function twpp_change_excerpt_more( $more ) {
  $html = '<a href="'  . esc_url( get_permalink() ) . '" class="btn btn-outline-primary btn-sm">Read More</a>';
  return $html;
}

add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );


//サイドバー
function wpb_init_widgets($id){
  register_sidebar(array(
    "name"=> "Sidebar",
    "id"=> "sidebar",
    "before_widget"=> "<div class='sidebar-module'>",
    "after_widget"=> "</div>",
    "before_title"=>"<h3 class='sidebar-header'>",
    "after_title"=>"</h3>"
  ));
}

add_action("widgets_init","wpb_init_widgets");


