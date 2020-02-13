<?php
/**
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */

global $woocommerce;

// WooCommerce cart

$show_cart = trim(mfn_opts_get('shop-cart'));
if ($show_cart == 1) {
	$show_cart = 'icon-bag-fine';
}
$has_cart = ($woocommerce && $show_cart) ? true : false;

// search

$header_search = mfn_opts_get('header-search');

// action button

$action_link = mfn_opts_get('header-action-link');

// WPML icon

if (has_nav_menu('lang-menu')) {
	$wpml_icon = true;
} elseif (function_exists('icl_get_languages') && mfn_opts_get('header-wpml') != 'hide') {
	$wpml_icon = true;
} else {
	$wpml_icon = false;
}

if ($has_cart || $header_search || $action_link || $wpml_icon) {
	echo '<div class="top_bar_right">';
		echo '<div class="top_bar_right_wrapper">';

		echo '<div class="contactTopbar">Contact Us +504 9959-1140</div>';
		echo '<div class="contactTopbarMobile"><img src="wp-content/themes/betheme/images/phoneTOP.png" width="20px"> &nbsp;&nbsp; <img src="wp-content/themes/betheme/images/emailTOP.png" width="20px"></div>';

		echo '</div>';
	echo '</div>';
}
