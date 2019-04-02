<?php  get_header(); ?>



<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <!--メインループ-->
      <?php if (have_posts()): ?>
        <?php  while (have_posts()): the_post(); ?>

          <!--        content.php-->
          <?php get_template_part("content",get_post_format()); ?>

        <?php endwhile; ?>

      <?php else: ?>
        <p><?php __("NO Posts found"); ?>
        </p>
      <?php endif; ?>

<!--記事単体にページネーションなんて必要ないよね？-->

    </div><!-- /.blog-main -->


          <!--      サイドバー-->
    <div class="col-md-3 offset-md-1 blog-sidebar">
      <?php if (is_active_sidebar("sidebar")): ?>
        <?php dynamic_sidebar("sidebar") ;?>
      <?php endif; ?>
    </div>
  </div><!-- /.row -->


</main><!-- /.container -->
<?php get_footer();?>
