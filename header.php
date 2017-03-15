<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
get_template_part('partials/globie');
get_template_part('partials/seo');
?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.ico">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.png">

  <?php if (is_singular() && pings_open(get_queried_object())) { ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php } ?>
  <?php get_template_part('partials/header-scripts'); ?>
  <?php wp_head(); ?>
  <?php debug_page_request(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

<section id="main-container" class="grid-column justify-between">

  <header id="header" class="bg-black white-text">
    <div class="desktop-header">
      <div class="grid-row container">
        <div class="grid-item item-s-2 logo">
          <h1 class="u-hidden"><?php bloginfo('name'); ?></h1>
          <a class="u-inline-block margin-top-tiny margin-bottom-tiny" href="<?php echo home_url(); ?>"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/rip_logo.svg'); ?></a>
        </div>
        <div class="grid-item item-s-2 margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a class="shop-link padding-tiny" href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></div>
        <div class="grid-item item-s-2 margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>">News</a></div>
        <div class="grid-item item-s-2 margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_category_link_by_slug('lookbook'); ?>">Lookbooks</a></div>
        <div class="grid-item item-s-2 margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></div>
        <div class="grid-item item-s-2 margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><?php get_template_part('partials/cart'); ?></div>
      </div>
    </div>
    <div class="container mobile-only mobile-header">
      <div class="grid-row">
        <div class="grid-item item-s-12 padding-top-small padding-bottom-small text-align-center">
          <a href="#" class="menu-toggle logo"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/rip_logo.svg'); ?></a>
        </div>

        <div id="mobile-menu" class="white-text bg-black">
          <ul class="">
            <li class=""><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class=""><a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></li>
            <li class=""><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
            <li class=""><a href="#">Lookbooks</a></li>
            <li class=""><a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>">News</a></li>
            <li class=""><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
          </ul>
          <div class="">
            <ul class="social-menu">
              <li class=""><a href="#">Facebook</a></li>
              <li class=""><a href="#">Twitter</a></li>
              <li class=""><a href="#">Instagram</a></li>
            </ul>
          </div>
          <a href="#" class="menu-toggle">X</a>
        </div>

      </div>
    </div>
  </header>
