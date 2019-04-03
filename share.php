<?php
/*
 * 記事埋め込み用　シェアリンク達
 */
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('name');
?>
<div class="share">
  <ul class="d-flex justify-content-center">
    <!--Facebookボタン-->
    <li class="mx-3">
      <a class="btn color-facebook hover-scale" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
        <i class="fab fa-facebook"></i>
      </a>
    </li>
    <!--ツイートボタン-->
    <li class=" mx-3">
      <a class="btn color-twitter hover-scale" href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <!--Google+ボタン-->
    <li class="mx-3">
      <a class="btn color-google hover-scale" href="//plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;">
        <i class="fab fa-google-plus"></i>
      </a>
    </li>
  </ul>
</div>
