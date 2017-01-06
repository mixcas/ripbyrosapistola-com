<?php

if( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

if( function_exists( 'add_image_size' ) ) {
  add_image_size( 'admin-thumb', 150, 150, false );
  add_image_size( 'opengraph', 1200, 630, true );

  add_image_size( 'gallery', 1200, 9999, false );

  add_image_size( 'background-image-1x', 1200, 800, false );
  add_image_size( 'background-image-2x', 2400, 1600, false );
}
