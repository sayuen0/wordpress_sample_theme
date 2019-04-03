<?php get_header(); ?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h1><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></h1>

        <?php
        if( $total_results >0 ):
          if(have_posts()):
            while(have_posts()): the_post();
              ?>
            <?php get_template_part("content"); ?>

            <?php endwhile; endif; else: ?>

          <?php echo $search_query; ?> に一致する情報は見つかりませんでした。

        <?php endif; ?>

      </div><!--      .col-md-8-->

<!--        サイドバー-->
        <?php get_sidebar(); ?>

    </div><!-- .row-->

  </div><!-- .container-->

<?php get_footer() ?>
