<?php

// dynamic title tag

function tester_theme_support() {
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-background");
    add_theme_support("custom-header");
    add_theme_support("custom-footer");
    add_theme_support("widgets");
}

add_action("after_setup_theme", "tester_theme_support");

// enable menus

function tester_menus() {
    $locations = array(
        "primary" => "Desktop View Header",
        "richmond" => "Richmond Menu"
    );

    register_nav_menus($locations);
}

add_action("init", "tester_menus");


// get CSS styles

function tester_styles() {
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("tester-css", get_template_directory_uri() . "/style.css", array(), $version, "all");
    wp_enqueue_style("tester-fonts", "https://use.typekit.net/wwk0nxz.css");
}

add_action( "wp_enqueue_scripts", "tester_styles" );

// get JS scripts

function tester_scripts() {
    wp_enqueue_script("tester-scripts", get_template_directory_uri() . "/js/scripts.js", array(), "1.0", true);
}

add_action( "wp_enqueue_scripts", "tester_scripts" );


// sidebar

function widgets() {    
    register_sidebar( array(
    'name' => __( 'Index - About Image', 'index' ),
    'id' => 'index-about-image',
    'before_widget' => '',
    'after_widget' => '',
));

    register_sidebar( array(
        'name' => __( 'Index - About Content', 'indexa2' ),
        'id' => 'index-about-content',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Index - Contact Content', 'indexb1' ),
        'id' => 'index-contact-content',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Index - Contact Form', 'indexb2' ),
        'id' => 'index-contact-form',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Footer - Content', 'footer' ),
        'id' => 'footer-content',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Gallery - Banner', 'contactbanner' ),
        'id' => 'gallery-banner',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'About - Banner', 'aboutbanner' ),
        'id' => 'about-banner',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Contact - Banner', 'contactbanner' ),
        'id' => 'contact-banner',
        'before_widget' => '',
        'after_widget' => '',
    ));
    
    register_sidebar( array(
        'name' => __( 'Contact - Content', 'contactcontent' ),
        'id' => 'contact-content',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action( 'widgets_init', 'widgets' );

if ( function_exists( 'register_block_pattern_category' ) ) {
    register_block_pattern_category(
      'oits',
      array( 'label' => __( 'Out in the Street', 'text-domain' ) )
   );
}
?>