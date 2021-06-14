<?php

if( !defined( 'ABSPATH' ) ){
    exit();
}


/**
 * Defining theme constants.
 */
if( !defined( 'PDPF_THEME_URI' ) ){
    define( 'PDPF_THEME_URI', get_template_directory_uri() );
}

if( !defined( 'PDPF_THEME_DIR' ) ){
    define( 'PDPF_THEME_DIR', get_template_directory() );
}

if( !defined( 'PDPF_THEME_VER' ) ){
    define( 'PDPF_THEME_VER', wp_get_theme()->get( 'Version' ) );
}


/**
 * Adding theme supports.
 */
if( !function_exists( 'pdpf_theme_setup' ) ){
    add_action( 'after_setup_theme', 'pdpf_theme_setup' );
    function pdpf_theme_setup(){
        /**
         * Adding support for core custom logo.
         */
        $logo_width = 40;
        $logo_height = 40;

        add_theme_support(
            'custom-logo',
            array(
                'width'                 => $logo_width,
                'height'                => $logo_height,
                'flex-width'            => true,
                'flex-height'           => true,
                'unlink-homepage-logo'  => true
            )
        );


        /**
         * Adding custom background color.
         */
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'ffffff'
            )
        );
    }
}


/**
 * Enqueue theme styles and scripts.
 */
add_action( 'wp_enqueue_scripts', 'pdpf_enqueue_theme_scripts' );

function pdpf_enqueue_theme_scripts(){
    wp_enqueue_style( 'pdpf-style', PDPF_THEME_URI . '/style.css', array(), PDPF_THEME_VER );

    wp_enqueue_script( 'pdpf-navigation-script', PDPF_THEME_URI . '/assets/js/primary-navigation.js', array(), PDPF_THEME_VER, true );
}


/**
 * Enqueue Customizer live preview script.
 */
add_action( 'customize_preview_init', 'pdpf_customizer_live_preview' );

function pdpf_customizer_live_preview(){
    wp_enqueue_script( 'pdpf-customizer-script', PDPF_THEME_URI . '/assets/js/customizer.js', array( 'jquery', 'customize-preview' ), PDPF_THEME_VER, true );
}


/**
 * HTML tag classes.
 */
function pdpf_the_html_classes(){

}