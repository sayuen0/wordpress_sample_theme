<?php  get_header(); ?>




  <!--メインループ-->
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>


        <?php if (have_posts()): ?>
          <?php  while (have_posts()): the_post(); ?>

            <!--        content.php-->
            <?php get_template_part("content",get_post_format()); ?>

          <?php endwhile; ?>

        <?php else: ?>
          <p><?php __("NO Posts found"); ?>
          </p>
        <?php endif; ?>


        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

      </div><!-- /.blog-main -->


            <!--      サイドバー-->
      <div class="col-sm-3 offset-1 blog-sidebar">
        <?php if (is_active_sidebar("sidebar")): ?>
          <?php dynamic_sidebar("sidebar") ;?>
        <?php endif; ?>
      </div>
    </div><!-- /.row -->

  </main><!-- /.container -->
<?php get_footer();