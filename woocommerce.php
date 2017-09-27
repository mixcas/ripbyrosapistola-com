<?php
get_header();
?>

<main id="main-content" class="margin-top-mid">
  <section id="posts">
    <div class="container">

<?php
if (is_shop() || is_product_category()) {
?>
      <div class="grid-row">
        <section id="sidebar" class="margin-bottom-small grid-item item-s-12 item-m-2">
<?php
  if ( is_active_sidebar( 'shop_sidebar' ) ) {
    dynamic_sidebar( 'shop_sidebar' );
  }
?>
        </section>
        <section class="grid-item item-s-12 item-m-10">
          <?php woocommerce_content(); ?>
        </section>
      </div>

<?php
  } else {
?>
      <div class="grid-row">
        <section class="grid-item item-s-12">
          <?php woocommerce_content(); ?>
        </section>
      </div>
<?php
  }
?>
    </div>
  </section>

</main>

<?php
get_footer();
?>
