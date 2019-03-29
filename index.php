<?php  get_header(); ?>


    <div class="row mb-2">
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--メインループ-->
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>


        <?php if(have_posts()): ?>
        <?php  while(have_posts()): the_post(); ?>

        <div class="blog-post">
          <a href="<?php the_permalink(); ?>">
            <h2 class="blog-post-title">  <?php the_title(); ?></h2>
          </a>
          <p class="blog-post-meta"><?php the_date(); echo "|"; the_time(); ?> by
<!--            著者情報-->
            <a href="<?php get_author_posts_url(get_the_author_meta("id")); ?>">
              <?php the_author(); ?>
            </a>
          </p>
          <?php if(has_post_thumbnail()): ?>
          <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
          </div>

          <?php endif; ?>


          <!--          本文全部-->
<!--          --><?php //the_content(); ?>
<!--          代わりに短く-->
          <?php the_excerpt(); ?>

        </div><!-- /.blog-post -->

        <?php endwhile; ?>

        <?php else: ?>
        <p><?php __("NO Posts found"); ?></p>
        <?php endif; ?>


        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

      </div><!-- /.blog-main -->


<!--      sidebar-->
      <div class="col-sm-3 offset-1 blog-sidebar">
  <?php if(is_active_sidebar("sidebar")): ?>
        <?php dynamic_sidebar("sidebar") ;?>
        <?php endif; ?>
      </div>
    </div><!-- /.row -->

  </main><!-- /.container -->
<?php get_footer(); ?>
