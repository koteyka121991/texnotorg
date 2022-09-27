<?php
/**
 * master Theme Customizer
 *
 * @package master
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function master_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'master_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'master_customize_partial_blogdescription',
			)
		);

		/*Main custom panel for theme settings*/
		$wp_customize->add_panel(
			'master_panel',
			array(
				'priority'   => 10,
				'capability' => 'edit_theme_options',
				'title'      => __( 'Master Options', 'master' ),
			)
		);

		/*Footer Options*/
		$wp_customize->add_section(
			'footer_section',
			array(
				'title' => __( 'Footer Options', 'master' ),
				'panel' => 'master_panel',
			)
		);

		/*Copyright Text*/
		$wp_customize->add_setting(
			'master-copyright-text',
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => __( 'Copyright All Rights Reserved', 'master' ),
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'master-copyright-text',
			array(
				'label'       => __( 'Copyright Text', 'master' ),
				'description' => __( 'Enter your copyright text here.', 'master' ),
				'section'     => 'footer_section',
				'type'        => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'master_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function master_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function master_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function master_customize_preview_js() {
	wp_enqueue_script( 'master-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _MASTER_VERSION, true );
}
add_action( 'customize_preview_init', 'master_customize_preview_js' );
