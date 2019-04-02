<?php  get_header(); ?>



<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h2>
        記事一覧
      </h2>



      <!--メインループ-->
      <?php if (have_posts()): ?>
      <?php  while (have_posts()): the_post(); ?>

<!--        content.php-->
      <?php get_template_part("content",get_post_format()); ?>

      <?php endwhile; ?>



<!--      ページネーション-->

      <?php get_template_part("pagination") ?>

      <?php else: ?>
      <p><?php __("NO Posts found"); ?>
      </p>
      <?php endif; ?>


    </div><!-- /.blog-main -->


    <!--      サイドバー-->
    <div class="col-md-3 offset-md-1 blog-sidebar">
      <?php if (is_active_sidebar("sidebar")): ?>
      <?php dynamic_sidebar("sidebar") ;?>
      <?php endif; ?>
    </div><!-- ./サイドバ- -->
  </div><!-- /.row -->


</main><!-- /.container -->
<?php get_footer();?>

