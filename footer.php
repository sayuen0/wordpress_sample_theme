<footer class="blog-footer">
  <p>&copy; <?= Date("Y") ?> - <?php bloginfo("name") ;?></p>
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
      href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <button class="btn back-to-top btn-outline-primary">トップへ戻る</button>
  </p>

  <p>
    <a href="https://twitter.com/prog_urlife" class="btn color-twitter hover-scale">
      <i class="fab fa-twitter"></i>
    </a>
  </p>
</footer>

<?php wp_footer(); ?>

<!--jquery-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<!--popper for bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
</script>
<script src="<?php bloginfo("template_url") ;?>/js/bootstrap.js"></script>
<!--my own javascript-->
<script src="<?php bloginfo("template_url"); ?>/js/index.js"></script>

</body>

</html>