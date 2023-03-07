<?php
// Header Section
Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Header', 'singleland' ),
    'id'               => 'header_settings_opt',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));

// Logo
Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Logo', 'singleland' ),
    'id'               => 'upload_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'singleland' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'singleland' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'singleland' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => SINGLELAND_IMAGES.'/default_logo/logo_sticky.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'singleland' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'singleland' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'singleland' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'singleland' ),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'singleland' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'singleland' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.logo_info .navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'singleland' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'singleland' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );


/**
 * Menu Settings
 */
Redux::set_section( 'singleland_opt', array(
    'title'            => esc_html__( 'Header Styling', 'singleland' ),
    'id'               => 'header_styling_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(
         array(
            'id'       => 'search_icon_toggle',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Search Icon', 'singleland'),
            'options' => array(
                'yes' => esc_html__('Yes', 'singleland'), 
                'no' => esc_html__('No', 'singleland'), 
             ), 
            'default' => 'yes'
        )

    )
));