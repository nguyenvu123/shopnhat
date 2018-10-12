<?php 
	add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
	//For Single Product Page.
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
	//For Archives Product Page.
	add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );
	function woo_custom_cart_button_text()
	{
	    return __( 'Thêm Giỏ Hàng', 'woocommerce' );
	}
	add_image_size('img_home_category', 355, 235,true); 
	add_image_size('img_home_produce', 200, 240,true); 
	add_image_size('img_home_banner', 1700, 600,true); 
	add_image_size('img_home_hot1', 540, 585,true); 
	add_image_size('img_home_hot2', 540, 295,true); 
	add_image_size('img_home_hot3', 259, 259,true); 
	if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts', 
		'redirect' 	=> false
	));
 
}


?>