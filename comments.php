
<div class="comments">
  <h2>コメント</h2>
  <?php

  $args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'reply_text'        => '返信する',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // テーマが 'HTML5' をサポートしないなら 'xhtml'
    'short_ping'        => false,   // バージョン3.6以降
    'echo'              => true     // 真偽値、デフォルトが true
  ); ?>

<?php
wp_list_comments($args, $comments);
$comments_args = array(
        // 送信ボタンのタイトルを変更
        'label_submit'=>'コメントを残す',
        // 返信セクションのタイトルを変更
        'title_reply'=>'コメントを残しましょう',
        // "Text or HTML to be displayed after the set of comment fields" を削除
        'comment_notes_after' => '',
        // オリジナルの textarea (コメント本文入力欄) を再定義
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);

?>
</div>
