<?php
// Checl if woocomerce is actibe
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  $count = WC()->cart->cart_contents_count;

  if ($count > 0) {
    $link = WC()->cart->get_cart_url();
?>
    <a class="shopping-cart-icon" href="<?php echo $link; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
    <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/shopping-cart.svg'); ?>
      <span>(<?php echo $count; ?>)</span>
    </a>
<?php
  }
}
?>
