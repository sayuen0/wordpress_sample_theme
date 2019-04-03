

<?php if( $comments = get_comments(array('status'=>'approve', 'order'=>'asc', 'post_id'=>$post->ID)) ) : ?>

  <div>
    <h3>Comments</h3>
    <?php
    foreach($comments as $comment):
      $post = get_post($comment->comment_post_ID);
      ?>
      <dl>
        <dt>
          <span><i></i><?php comment_author_link(); ?>より</span>
          <span><i></i><?php comment_date("Y.m.d"); ?></span>
        </dt>
        <dd><?php comment_text(); ?></dd>
      </dl>
    <?php endforeach; ?>
  </div>
<?php endif; ?>