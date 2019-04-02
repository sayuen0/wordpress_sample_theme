<div class="blog-post shadow-lg border-success p-5">
  <a href="<?php the_permalink(); ?>">
    <h2 class="blog-post-title">
      <?php if(is_single()): ?>
        <?php the_title(); ?>
      <?php else: ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

      <?php  endif; ?>

    </h2>
  </a>
  <p class="blog-post-meta"><?php the_date(); echo "|"; the_time(); ?>
    by<!--            著者情報-->
    <a href="<?php get_author_posts_url(get_the_author_meta("id")); ?>">
      <?php the_author(); ?>
    </a>
  </p>

<!--  カテゴリー-->
  <?php get_the_category(); ?>

<!--  サムネイル-->
  <?php if (has_post_thumbnail()): ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php endif; ?>

<!--  投稿か固定ページなら-->
  <?php if(is_single() || is_page())  :?>
    <!--          本文全部-->

    <?php the_content() ;?>
<!--  それ以外：一覧などなら-->
  <?php else: ?>
    <!--          代わりに短く-->

    <?php the_excerpt(); ?>
  <?php endif; ?>

  <?php if(is_single()): ?>
  <?php comment_template(); ?>
  <?php endif; ?>

</div><!-- /.blog-post -->