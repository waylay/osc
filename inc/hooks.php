<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {

		$site_info = "<small class='flex-fill text-center'>Copyright ".date('Y')." | Outpatient Surgery Center. All Rights Reserved.  Website Designed & Managed by <a href='http://redapplesmedia.com/' target='_blank'>Red Apples Media<a></small><small class='text-center text-lg-right mt-4 mt-lg-0'><a href='/admissions/notice-of-privacy/'>Privacy Policy</small>";

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
