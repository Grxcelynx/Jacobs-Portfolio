<?php
/**
 * Jacobs-Portfolio Theme Customizer
 *
 * @package Jacobs-Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jacobs_portfolio_customize_register( $wp_customize ) {

	$wp_customize->add_section('footer_settings', array(
        'title' => 'Footer Settings',
    ));

	$url_inputs = array(
        array('name'=> 'ig_url', 'label' => 'Instagram Url', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'linkedin_url', 'label' => 'Linkedin Url', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'github_url', 'label' => 'Github Url', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'other_media_url', 'label' => 'Other Media Url', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'other_media2_url', 'label' => 'Other Media Two Url', 'section' => 'footer_settings', 'default' => ''),
    );

	foreach($url_inputs  as $url){
        add_url_input($wp_customize, $url['name'], $url['label'], $url['section'], $url['default']);
    }

	$images = array(
        
		array('name' => 'instagram_icon', 'label' => 'Social Media Icon - Instagram', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'linkedin_icon', 'label' => 'Linkedin Icon', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'github_icon', 'label' => 'Github Icon', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'other_media_icon', 'label' => 'Other Media Icon', 'section' => 'footer_settings', 'default' => ''),
		array('name'=> 'other_media2_icon', 'label' => 'Other Media Two Icon', 'section' => 'footer_settings', 'default' => '')
	);

	foreach($images  as $image){
        add_image($wp_customize, $image['name'], $image['label'], $image['section']);
    }


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'jacobs_portfolio_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'jacobs_portfolio_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'jacobs_portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function jacobs_portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function jacobs_portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jacobs_portfolio_customize_preview_js() {
	wp_enqueue_script( 'jacobs-portfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'jacobs_portfolio_customize_preview_js' );


function add_url_input($wp_customize, $name, $label, $section, $default = '') {
    $wp_customize->add_setting($name,
        array(
            'default' => $default,
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control($name,
        array(
            'label' => $label,
            'section' => $section,
            'settings' => $name,
            'type' => 'url'
        )
    );
}

function add_image($wp_customize, $name, $label, $section){
    $wp_customize->add_setting($name, array(
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $name , array(
        'label' => $label,
        'settings'  => $name,
        'section'   => $section
    ) ));
}