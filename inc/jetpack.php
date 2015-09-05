<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Judokan 2016
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function judokan_2016_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'judokan_2016_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function judokan_2016_jetpack_setup
add_action( 'after_setup_theme', 'judokan_2016_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function judokan_2016_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function judokan_2016_infinite_scroll_render
