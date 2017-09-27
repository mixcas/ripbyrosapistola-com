<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function shop_widgets_init() {

	register_sidebar( array(
		'name'          => 'Shop Sidebar',
		'id'            => 'shop_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'shop_widgets_init' );

add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
/**
 * woo_hide_page_title
 *
 * Removes the "shop" title on the main shop page
 *
 * @access      public
 * @since       1.0
 * @return      void
*/
function woo_hide_page_title() {
	return false;
}
?>
