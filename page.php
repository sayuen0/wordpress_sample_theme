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


    </div><!-- /.blog-main -->


          <!--      サイドバー-->
    <?php get_sidebar();  ?>
  </div><!-- /.row -->


</main><!-- /.container -->
<?php get_footer();?>
