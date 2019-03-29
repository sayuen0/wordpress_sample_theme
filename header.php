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

  <?php wp_head(); ?>
</head>

<body>
<div class="container">
<!--  <header class="blog-header py-3">-->
<!--    <div class="row flex-nowrap justify-content-between align-items-center">-->
<!--      <div class="col-4 pt-1">-->
<!--        <a class="text-muted" href="#">Subscribe</a>-->
<!--      </div>-->
<!--      <div class="col-4 text-center">-->
<!--        <a class="blog-header-logo text-dark" href="#">Large</a>-->
<!--      </div>-->
<!--      <div class="col-4 d-flex justify-content-end align-items-center">-->
<!--        <a class="text-muted" href="#">-->
<!--          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"-->
<!--               stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"-->
<!--               viewBox="0 0 24 24" focusable="false">-->
<!--            <title>Search</title>-->
<!--            <circle cx="10.5" cy="10.5" r="7.5" />-->
<!--            <path d="M21 21l-5.2-5.2" />-->
<!--          </svg>-->
<!--        </a>-->
<!--        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>-->
<!--      </div>-->
<!--    </div>-->
<!--  </header>-->

  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
  </nav>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php bloginfo("description") ?></h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
                           about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>