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
        <div class="grid-item item-s-10 grid-row">
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a class="shop-link padding-tiny" href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></div>
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>">News</a></div>
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_category_link_by_slug('lookbook'); ?>">Lookbooks</a></div>
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></div>
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'faq' ) ); ?>">FAQ</a></div>
          <div class="grid-item flex-grow no-gutter margin-top-tiny margin-bottom-tiny padding-top-tiny padding-bottom-tiny"><?php get_template_part('partials/cart'); ?></div>
        </div>
      </div>
    </div>
    <div class="container mobile-only mobile-header">
      <div class="grid-row padding-top-tiny padding-bottom-tiny">
        <div class="grid-item item-s-3 text-align-center">
          <a href="<?php echo home_url(); ?>" class="logo"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/rip_logo.svg'); ?></a>
        </div>
        <div class="grid-item item-s-3 offset-s-4 margin-top-small"><?php get_template_part('partials/cart'); ?></div>
        <div class="grid-item item-s-2 padding-top-small text-align-center">
          <img class="menu-toggle" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMjM1LjMxOEgyMC42ODJDOS4yNiwyMzUuMzE4LDAsMjQ0LjU3NywwLDI1NnM5LjI2LDIwLjY4MiwyMC42ODIsMjAuNjgyaDQ3MC42MzYgICAgYzExLjQyMywwLDIwLjY4Mi05LjI1OSwyMC42ODItMjAuNjgyQzUxMiwyNDQuNTc4LDUwMi43NDEsMjM1LjMxOCw0OTEuMzE4LDIzNS4zMTh6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDkxLjMxOCw3OC40MzlIMjAuNjgyQzkuMjYsNzguNDM5LDAsODcuNjk5LDAsOTkuMTIxYzAsMTEuNDIyLDkuMjYsMjAuNjgyLDIwLjY4MiwyMC42ODJoNDcwLjYzNiAgICBjMTEuNDIzLDAsMjAuNjgyLTkuMjYsMjAuNjgyLTIwLjY4MkM1MTIsODcuNjk5LDUwMi43NDEsNzguNDM5LDQ5MS4zMTgsNzguNDM5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQ5MS4zMTgsMzkyLjE5N0gyMC42ODJDOS4yNiwzOTIuMTk3LDAsNDAxLjQ1NiwwLDQxMi44NzlzOS4yNiwyMC42ODIsMjAuNjgyLDIwLjY4Mmg0NzAuNjM2ICAgIGMxMS40MjMsMCwyMC42ODItOS4yNTksMjAuNjgyLTIwLjY4MlM1MDIuNzQxLDM5Mi4xOTcsNDkxLjMxOCwzOTIuMTk3eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
        </div>

        <div id="mobile-menu" class="white-text bg-black">
          <ul class="mobile-menu-links grid-column justify-center align-items-center">
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>">Shop</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="#">Lookbooks</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'news' ) ); ?>">News</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
            <li class="margin-top-tiny margin-bottom-tiny"><a href="<?php echo get_permalink( get_page_by_path( 'faq' ) ); ?>">FAQ</a></li>
          </ul>
<?php /*
            <ul class="social-menu">
              <li class=""><a href="#">Facebook</a></li>
              <li class=""><a href="#">Twitter</a></li>
              <li class=""><a href="#">Instagram</a></li>
            </ul>
 */ ?>
          <a href="#" class="menu-toggle">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwNS45NDMsNi4wNThjLTguMDc3LTguMDc3LTIxLjE3Mi04LjA3Ny0yOS4yNDksMEw2LjA1OCw0NzYuNjkzYy04LjA3Nyw4LjA3Ny04LjA3NywyMS4xNzIsMCwyOS4yNDkgICAgQzEwLjA5Niw1MDkuOTgyLDE1LjM5LDUxMiwyMC42ODMsNTEyYzUuMjkzLDAsMTAuNTg2LTIuMDE5LDE0LjYyNS02LjA1OUw1MDUuOTQzLDM1LjMwNiAgICBDNTE0LjAxOSwyNy4yMyw1MTQuMDE5LDE0LjEzNSw1MDUuOTQzLDYuMDU4eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwNS45NDIsNDc2LjY5NEwzNS4zMDYsNi4wNTljLTguMDc2LTguMDc3LTIxLjE3Mi04LjA3Ny0yOS4yNDgsMGMtOC4wNzcsOC4wNzYtOC4wNzcsMjEuMTcxLDAsMjkuMjQ4bDQ3MC42MzYsNDcwLjYzNiAgICBjNC4wMzgsNC4wMzksOS4zMzIsNi4wNTgsMTQuNjI1LDYuMDU4YzUuMjkzLDAsMTAuNTg3LTIuMDE5LDE0LjYyNC02LjA1N0M1MTQuMDE4LDQ5Ny44NjYsNTE0LjAxOCw0ODQuNzcxLDUwNS45NDIsNDc2LjY5NHoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
          </a>
        </div>

      </div>
    </div>
  </header>
