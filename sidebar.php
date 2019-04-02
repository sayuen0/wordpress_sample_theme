<?php
/*
  * 個別テンプテート　サイドバー
  * ウィジェットで登録しただけ
  */?>


<div class="col-md-3 offset-md-1 blog-sidebar">
  <?php if (is_active_sidebar("sidebar")): ?>
<?php dynamic_sidebar("sidebar") ;?>
  <?php endif; ?>
</div>
