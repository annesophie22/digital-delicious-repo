<?php

/**
 * Digital Delicious Theme Customizer
 *
 * @package Digital_Delicious
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function digital_delicious_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'digital_delicious_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'digital_delicious_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'digital_delicious_customize_register');

/* Custom function added to the _s theme */
function digital_delicious_customize_remove_section($wp_customize)
{
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('title_tagline');
}
add_action('customize_register', 'digital_delicious_customize_remove_section');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function digital_delicious_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function digital_delicious_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function digital_delicious_customize_preview_js()
{
	wp_enqueue_script('digital-delicious-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), DIGITAL_DELICIOUS_VERSION, true);
}
add_action('customize_preview_init', 'digital_delicious_customize_preview_js');
