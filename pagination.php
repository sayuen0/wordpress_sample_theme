<?php
/* 個別テンプレート ページネーション
*
*  */

?>

<nav class="blog-pagination">
<?php
if ( function_exists( 'pagination' ) ) :
  pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
endif;
?>
</nav>
