<?php
// Panel ID
$panel_id = 'kira_lite_services';

// Prefix
$prefix = 'kira_lite';

/***********************************************/
/***************** SERVICES  *******************/
/***********************************************/
$wp_customize->add_panel( $panel_id,
	array(
		'priority'			=> 110,
		'capability'		=> 'edit_theme_options',
		'theme_supports'	=> '',
		'title'				=> esc_html__( 'Services', 'kira-lite' )
	)
);

/**
 *	General Section
 */
$wp_customize->add_section( $prefix . '_services_general' ,
	array(
		'title'		=> esc_html__( 'General', 'kira-lite' ),
		'priority'	=> 1,
		'panel'		=> $panel_id
	)
);

// Show this section?
$wp_customize->add_setting(
	$prefix . '_services_general_show',
	array(
		'sanitize_callback'	=> $prefix . '_sanitize_checkbox',
		'default'			=> 1,
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_services_general_show',
	array(
		'type'				=> 'checkbox',
		'label'				=> esc_html__('Show this section?', 'kira-lite'),
		'section'			=> $prefix . '_services_general',
		'priority'			=> 1,
		'active_callback'	=> 'is_front_page'
	)
);

// Title
$wp_customize->add_setting(
	$prefix . '_services_general_title',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'What we can to do', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_services_general_title',
	array(
		'label'				=> esc_html__( 'Title', 'kira-lite' ),
		'section'			=> $prefix . '_services_general',
		'priority'			=> 2,
		'active_callback'	=> 'is_front_page'
	)
);

// Button Text
$wp_customize->add_setting(
	$prefix . '_services_general_button_text',
	array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> esc_html__( 'View all services', 'kira-lite' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control(
	$prefix . '_services_general_button_text',
	array(
		'label'				=> esc_html__( 'Button Text', 'kira-lite' ),
		'section'			=> $prefix . '_services_general',
		'priority'			=> 3,
		'active_callback'	=> 'is_front_page'
	)
);

// Button URL
$wp_customize->add_setting(
	$prefix . '_services_general_button_url',
	array(
		'sanitize_callback'	=> 'esc_url',
		'default'			=> esc_url( '#' ),
		'transport'			=> 'postMessage'
	)
);

$wp_customize->add_control( $prefix . '_services_general_button_url',
	array(
		'label'				=> esc_html__( 'Button URL', 'kira-lite' ),
		'section'			=> $prefix . '_services_general',
		'settings'			=> $prefix . '_services_general_button_url',
		'priority'			=> 4,
		'active_callback'	=> 'is_front_page'
	)
);