<?php  get_header(); ?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h2>
        投稿一覧
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
    <?php get_sidebar(); ?>
  </div><!-- /.row -->


</main><!-- /.container -->
<?php get_footer();?>

