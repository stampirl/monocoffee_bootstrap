<?php

// THEME SUPPORTS
function monocoffee_bootstrap_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

    load_theme_textdomain( 'monocoffee_bootstrap' );
    // Editor Color Palette
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'White', 'textdomain' ),
            'slug'  => 'white',
            'color'	=> '#FFFFFF',
        ),
        array(
                'name'	=> __( 'Black', 'textdomain' ),
                'slug'	=> 'black',
                'color'	=> '#000000',
        ),
        array(
                'name'  => __( 'Orange', 'textdomain' ),
                'slug'  => 'orange',
                'color'	=> '#FF8300',
        ),
        array(
                'name'  => __( 'Red', 'textdomain' ),
                'slug'  => 'red',
                'color'	=> '#D9000D',
        ),
    ) );

    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'monocoffee_bootstrap_theme_support' );

//REGISTER STYLES & SCRIPTS

function monocoffee_bootstrap_register_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'monocoffee_bootstrap-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'monocoffee_bootstrap_register_styles' );

function monocoffee_bootstrap_register_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'monocoffee_bootstrap-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), $theme_version, false );
	wp_script_add_data( 'monocoffee_bootstrap-js', 'async', true );
}
add_action( 'wp_enqueue_scripts', 'monocoffee_bootstrap_register_scripts' );

//REGISTER MENUS
function monocoffee_bootstrap_menus() {
    $locations = [
        'primary' => __( 'Main Menu', 'monocoffee_bootstrap'),
        'footer' => __( 'Footer Menu', 'monocoffee_bootstrap'),
    ];

    register_nav_menus( $locations );
}

//Register sidebars
function monocoffee_bootstrap_sidebars() {
    register_sidebar( [
        'name'          => __( 'Footer Left column', 'monocoffee_bootstrap' ),
        'id'            => 'footer-left-widget',
        'description'   => __( 'Left column of footer', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ] );
    register_sidebar( [
        'name'          => __( 'Footer Center column', 'monocoffee_bootstrap' ),
        'id'            => 'footer-center-widget',
        'description'   => __( 'Center column of footer', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ] );
    register_sidebar( [
        'name'          => __( 'Footer Right column', 'monocoffee_bootstrap' ),
        'id'            => 'footer-right-widget',
        'description'   => __( 'Right column of footer', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ] );
}
add_action( 'widgets_init', 'monocoffee_bootstrap_sidebars' );

add_action( 'init', 'monocoffee_bootstrap_menus');

load_theme_textdomain('monocoffee_bootstrap', get_template_directory() . '/languages');