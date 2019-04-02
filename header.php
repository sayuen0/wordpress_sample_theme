<!doctype html>
<html <?php language_attributes();?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo("description");?>">
  <meta name=" author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>
    <?php bloginfo("name");?> |
    <?php is_front_page() ? bloginfo("description") : wp_title(); ?>
  </title>
  <!-- Bootstrap Core CSS -->
  <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
<!--  Bootswatch Minty-->
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootswatch_minty.css">
  <!-- My own Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">



  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  </style>
</head>

<body>
<?php wp_head(); ?>

  <div class="container-fluid">


<!--    ナビバー本体-->
    <h1 id="page-title" class="blog-title text-center"><a  class="p-5 d-block" href="<?php echo home_url() ?>">
        <?php bloginfo( 'name' ) ?>
      </a></h1>

    <nav class="navbar navbar-expand-md sticky-top  shadow-sm mb-5 " role="navigation">

      <!--      ページタイトル-->


      <!-- トグルボタン-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="container">
        <?php
        wp_nav_menu(array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse navbar-brand',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <?php  get_search_form(); ?>
      </div>
    </nav>
