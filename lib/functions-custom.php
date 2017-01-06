<?php

// Custom functions (like special queries, etc)
function background_image_set_css($image_id = 0) {
  $x1 = wp_get_attachment_image_src($image_id, 'background-image-1x');
  $x1 = $x1[0];

  $x2 = wp_get_attachment_image_src($image_id, 'background-image-2x');
  $x2 = $x2[0];

  $css = 'background-image: url(' . $x1 . '); ';
  $css .= 'background-image: image-set( url(' . $x1 . ') 1x, url(' . $x2 . ') 2x); ';
  $css .= 'background-image: -webkit-image-set( url(' . $x1 . ') 1x, url(' . $x2 . ') 2x); ';
  $css .= 'background-image: -moz-image-set( url(' . $x1 . ') 1x, url(' . $x2 . ') 2x); ';
  $css .= 'background-image: -o-image-set( url(' . $x1 . ') 1x, url(' . $x2 . ') 2x);';

  return $css;
}
