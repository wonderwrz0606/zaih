<?php
// Set Panel ID
$panel_id = 'illdy_panel_contact_us';

// Set prefix
$prefix = 'illdy';

/***********************************************/
/**************** CONTACT US  ******************/
/***********************************************/
/*
$wp_customize->add_panel( $panel_id,
    array(
        'priority'          => 110,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Contact us', 'illdy' ),
        'description'       => __( 'Control various options for contact us section from front page.', 'illdy' ),
    )
);
*/

/***********************************************/
/******************* General *******************/
/***********************************************/
$wp_customize->add_section( $prefix . '_contact_us_general' ,
    array(
        'title'         => __( 'Contact us', 'illdy' ),
        'description'   => __( 'Control various options for contact us section from front page.', 'illdy' ),
        'priority'      => 109
        // 'title'       => __( 'General', 'illdy' ),
        // 'panel' 	  => $panel_id
    )
);

// Show this section
$wp_customize->add_setting( $prefix . '_contact_us_general_show',
    array(
        'sanitize_callback' => $prefix . '_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix . '_contact_us_general_show',
    array(
        'type'      => 'checkbox',
        'label'     => __( 'Show this section?', 'illdy' ),
        'section'   => $prefix . '_contact_us_general',
        'priority'  => 1
    )
);

// Title
$wp_customize->add_setting( $prefix .'_contact_us_general_title',
    array(
        'sanitize_callback' => 'illdy_sanitize_html',
        'default'           => __( 'Contact us', 'illdy' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_contact_us_general_title',
    array(
        'label'         => __( 'Title', 'illdy' ),
        'description'   => __( 'Add the title for this section.', 'illdy'),
        'section'       => $prefix . '_contact_us_general',
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( $prefix .'_contact_us_general_entry',
    array(
        'sanitize_callback' => 'illdy_sanitize_html',
        'default'           => __( 'And we will get in touch as son as possible.', 'illdy' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_contact_us_general_entry',
    array(
        'label'         => __( 'Entry', 'illdy' ),
        'description'   => __( 'Add the content for this section.', 'illdy'),
        'section'       => $prefix . '_contact_us_general',
        'priority'      => 3,
        'type'          => 'textarea'
    )
);

// Address Title
$wp_customize->add_setting( $prefix .'_contact_us_general_address_title',
    array(
        'sanitize_callback' => 'illdy_sanitize_html',
        'default'           => __( 'Address', 'illdy' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_contact_us_general_address_title',
    array(
        'label'         => __( 'Address Title', 'illdy' ),
        'description'   => __( 'Add the title for address block from this section.', 'illdy'),
        'section'       => $prefix . '_contact_us_general',
        'priority'      => 4
    )
);

// Customer Support Title
$wp_customize->add_setting( $prefix .'_contact_us_general_customer_support_title',
    array(
        'sanitize_callback' => 'illdy_sanitize_html',
        'default'           => __( 'Customer Support', 'illdy' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    $prefix .'_contact_us_general_customer_support_title',
    array(
        'label'         => __( 'Customer Support Title', 'illdy' ),
        'description'   => __( 'Add the title for customer support block from this section.', 'illdy'),
        'section'       => $prefix . '_contact_us_general',
        'priority'      => 5
    )
);

// Contact Form 7
$wp_customize->add_setting( 'illdy_contact_us_general_contact_form_7',
    array(
        'sanitize_callback' => 'sanitize_key'
    )
);
$wp_customize->add_control( new Illdy_CF7_Custom_Control(
    $wp_customize,
    'illdy_contact_us_general_contact_form_7',
        array(
            'label'             => __( 'Select the contact form you\'d like to display (powered by Contact Form 7)', 'illdy' ),
            'section'           => $prefix . '_contact_us_general',
            'priority'          => 6,
            'type'              => 'illdy_contact_form_7'
        )
    )
);

// Contact Form Creation
$wp_customize->add_setting(
    $prefix . '_contact_us_general_install_contact_form_7',
    array(
        'sanitize_callback' => 'esc_html',
        'default'           => '',
        'transport'         => 'refresh'
    )
);
$wp_customize->add_control(
    new Illdy_Text_Custom_Control(
        $wp_customize, $prefix . '_contact_us_general_install_contact_form_7',
        array(
            'label'             => __( 'Contact Form Creation', 'illdy' ),
            'description'       => sprintf( '%s %s %s', __( 'Install', 'illdy' ), '<a href="https://wordpress.org/plugins/contact-form-7/" title="Contact Form 7" target="_blank">Contact Form 7</a>', __( 'and select a contact form to work this setting.', 'pixova-lite' ) ),
            'section'           => $prefix .'_contact_us_general',
            'settings'          => $prefix . '_contact_us_general_install_contact_form_7',
            'priority'          => 7,
            'active_callback'   => 'is_not_active_contact_form_7'
        )
    )
);