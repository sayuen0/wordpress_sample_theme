<footer class="blog-footer">
  <p>&copy; <?= Date("Y") ?> - <?php bloginfo("name") ;?></p>
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
      href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="<?php bloginfo("template_url") ;?>/js/bootstrap.js"></script>
</body>

</html>