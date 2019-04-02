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
  $html = '<a href="'  . esc_url( get_permalink() ) . '" class="btn btn-outline-primary btn-sm ml-3">詳しく読む</a>';
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





/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "« ";
//  $text_before  = "‹ 前へ";
//  $text_next    = "次へ ›";
  $text_last    = "»";

  if ( $show_only && $pages === 1 ) {
    // １ページのみで表示設定が true の時
    echo '<div><span class="current pager">1</span></div>';
    return;
  }

  if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

  if ( 1 !== $pages ) {
    //２ページ以上の時
    echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
    if ( $paged > $range + 1 ) {
      // 「最初へ」 の表示
      echo '<a href="', get_pagenum_link(1) ,'" class="first btn btn-secondary">', $text_first ,'</a>';
    }
//    if ( $paged > 1 ) { 前へはいらないと判断
//      // 「前へ」 の表示
//      echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
//    }
    for ( $i = 1; $i <= $pages; $i++ ) {

      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        // $paged +- $range 以内であればページ番号を出力
        if ( $paged === $i ) {
          echo '<a class="current pager btn btn-outline-secondary disabled">', $i ,'</a>';
        } else {
          echo '<a href="', get_pagenum_link( $i ) ,'" class="pager btn btn-secondary">', $i ,'</a>';
        }
      }

    }
//    if ( $paged < $pages ) {　次へはいらないと判断
//      // 「次へ」 の表示
//      echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
//    }
    if ( $paged + $range < $pages ) {
      // 「最後へ」 の表示
      echo '<a href="', get_pagenum_link( $pages ) ,'" class="last btn btn-secondary">', $text_last ,'</a>';
    }
    echo '</div>';
  }
}