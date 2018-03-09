<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Mag_lite
 */


if ( ! function_exists( 'mag_lite_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}
endif;

add_action( 'mag_lite_action_doctype', 'mag_lite_doctype', 10 );

if ( !function_exists( 'mag_lite_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">  
	<?php
	}
endif;

add_action( 'mag_lite_action_head', 'mag_lite_head', 10 );

if ( ! function_exists( 'mag_lite_page_start' ) ) :
	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_page_start() {
	?>
    <div id="page" class="hfeed site">
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mag-lite' ); ?></a>
    <?php
	}
endif;
add_action( 'mag_lite_action_before', 'mag_lite_page_start' );

if ( ! function_exists( 'mag_lite_page_end' ) ) :
	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_page_end() {
	?></div><!-- #page --><?php
	}
endif;

add_action( 'mag_lite_action_after', 'mag_lite_page_end' );

if ( ! function_exists( 'mag_lite_content_start' ) ) :
	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_content_start() {
	?><div id="content" class="site-content"><?php
	}
endif;
add_action( 'mag_lite_action_before_content', 'mag_lite_content_start' );


if ( ! function_exists( 'mag_lite_content_end' ) ) :
	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_content_end() {
	?></div><!-- #content --><?php
	}
endif;
add_action( 'mag_lite_action_after_content', 'mag_lite_content_end' );


if ( ! function_exists( 'mag_lite_header_start' ) ) :
	/**
	 * Header Start
	 *
	 * @since 1.0.0
	 */
	function mag_lite_header_start() {
	?><header id="masthead" class="site-header"> <!-- header starting from here --><?php	
	}
endif;

add_action( 'mag_lite_action_before_header', 'mag_lite_header_start', 10 );


if ( ! function_exists( 'mag_lite_header_end' ) ) :
	/**
	 * Header End
	 *
	 * @since 1.0.0
	 */
	function mag_lite_header_end() {
	?></header><!-- header ends here --><?php	
	}
endif;
add_action( 'mag_lite_action_after_header', 'mag_lite_header_end', 10 );

if ( ! function_exists( 'mag_lite_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_footer_start() {
	?><footer id="colophon" class="site-footer"> <!-- footer starting from here --> 
	<?php
	}
endif;
add_action( 'mag_lite_action_before_footer', 'mag_lite_footer_start' );


if ( ! function_exists( 'mag_lite_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function mag_lite_footer_end() {
	?></footer><!-- #colophon --><?php
	}
endif;
add_action( 'mag_lite_action_after_footer', 'mag_lite_footer_end' );