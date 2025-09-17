<?php
/**
 * This file adds functions to the Auctor WordPress theme.
 *
 * @package auctor
 * @author  Jasper Frumau
 * @license GNU General Public License v2 or later
 * @link    https://imagewize.com/auctor
 */

namespace Auctor;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );

	// Add custom image sizes.
	add_image_size('featured-landscape', 740, 400, true);
	add_image_size('featured-large', 485, 650, true);
	add_image_size('featured-vertical', 388, 525, true);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( sanitize_title( __NAMESPACE__ ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue block-specific styles
	wp_enqueue_style(
		sanitize_title( __NAMESPACE__ ) . '-blocks',
		get_template_directory_uri() . '/css/blocks.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/list'         => array(
			'list-check'        => __( 'Check', 'auctor' ),
			'list-check-circle' => __( 'Check Circle', 'auctor' ),
			'list-boxed'        => __( 'Boxed', 'auctor' ),
		),
		'core/code'         => array(
			'dark-code' => __( 'Dark', 'auctor' ),
		),
		'core/cover'        => array(
			'blur-image-less' => __( 'Blur Image Less', 'auctor' ),
			'blur-image-more' => __( 'Blur Image More', 'auctor' ),
			'rounded-cover'   => __( 'Rounded', 'auctor' ),
		),
		'core/column'       => array(
			'column-box-shadow' => __( 'Box Shadow', 'auctor' ),
		),
		'core/post-excerpt' => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'auctor' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'auctor' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'auctor' ),
		),
		'core/group'        => array(
			'column-box-shadow' => __( 'Box Shadow', 'auctor' ),
			'background-blur'   => __( 'Background Blur', 'auctor' ),
		),
		'core/separator'    => array(
			'separator-dotted' => __( 'Dotted', 'auctor' ),
			'separator-thin'   => __( 'Thin', 'auctor' ),
		),
		'core/image'        => array(
			'rounded-full' => __( 'Rounded Full', 'auctor' ),
			'media-boxed'  => __( 'Boxed', 'auctor' ),
		),
		'core/preformatted' => array(
			'preformatted-dark' => __( 'Dark Style', 'auctor' ),
		),
		'core/post-terms'   => array(
			'term-button' => __( 'Button Style', 'auctor' ),
		),
		'core/video'        => array(
			'media-boxed' => __( 'Boxed', 'auctor' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );


/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "auctor-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );


/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'auctor/card'           => array(
			'label' => __( 'Cards', 'auctor' ),
		),
		'auctor/call-to-action' => array(
			'label' => __( 'Call To Action', 'auctor' ),
		),
		'auctor/features'       => array(
			'label' => __( 'Features', 'auctor' ),
		),
		'auctor/hero'           => array(
			'label' => __( 'Hero', 'auctor' ),
		),
		'auctor/pages'          => array(
			'label' => __( 'Pages', 'auctor' ),
		),
		'auctor/posts'          => array(
			'label' => __( 'Posts', 'auctor' ),
		),
		'auctor/pricing'        => array(
			'label' => __( 'Pricing', 'auctor' ),
		),
		'auctor/testimonial'    => array(
			'label' => __( 'Testimonials', 'auctor' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Remove last separator on blog/archive if no pagination exists.
 */
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .archive .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .search .wp-block-post-template .wp-block-post:last-child .wp-block-post-excerpt + .wp-block-separator { display: none; }</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\is_paginated' );


/**
 * Add a Sidebar template part area
 *
 * @param array $areas Array of template part areas.
 * @return array
 */
function template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'auctor' ),
		'description' => __( 'The Sidebar template defines a page area that can be found on the Page (With Sidebar) template.', 'auctor' ),
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );


/**
 * Add custom image sizes to the block editor
 * This makes our custom image sizes available in the block editor's image size dropdown
 */
function add_image_sizes_to_block_editor() {
	add_filter('block_editor_settings_all', function($settings) {
		// Define all custom sizes with their display names
		$custom_sizes = [
			'featured-landscape' => __('Featured Landscape', 'auctor'),
			'featured-large' => __('Featured Large', 'auctor'),
			'featured-vertical' => __('Featured Vertical', 'auctor')
		];

		// Add each custom size to the editor settings
		foreach ($custom_sizes as $slug => $name) {
			$settings['imageSizes'][] = [
				'slug' => $slug,
				'name' => $name
			];
		}

		return $settings;
	});
}
add_action('init', __NAMESPACE__ . '\add_image_sizes_to_block_editor');


/**
 * Enqueue custom block editor assets
 */
function enqueue_block_editor_assets() {
	wp_enqueue_script(
		'auctor-custom-blocks',
		get_template_directory_uri() . '/assets/js/custom-blocks.js',
		array('wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components', 'wp-compose', 'wp-hooks'),
		filemtime(get_template_directory() . '/assets/js/custom-blocks.js'),
		true
	);

	// Enqueue block styles for the editor
	wp_enqueue_style(
		'auctor-editor-blocks',
		get_template_directory_uri() . '/css/blocks.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action('enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets');


/**
 * Include block extensions if file exists
 */
$block_extensions = get_template_directory() . '/inc/block-extensions.php';
if ( file_exists( $block_extensions ) ) {
	require $block_extensions;
}
