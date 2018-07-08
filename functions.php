<?php

add_action('wp_enqueue_scripts', function(){
    //Fonts
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Mirza:400,700|Oleo+Script+Swash+Caps', array(), '1.0.0');

    // Styles
    wp_enqueue_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

    // JS
    //wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js', array(),'', true);
    wp_enqueue_script('bootstrap-script', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(),'', true);
    wp_enqueue_script('scrollreveal-script', get_template_directory_uri() . '/libs/scrollreveal/dist/scrollreveal.min.js', array(),'', false);
});

add_action('init', function(){
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('footer', 'Footer Navigation');
    register_nav_menu('mobile', 'Mobile Navigation');

    register_sidebar(array(
        'name' => 'Top Slider for Desktop',
        'id' => 'paprikas2018_top_slider',
        'before_widget' => '<div id="%1$s" class="hidden-xs widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => 'Top Slider for Mobile',
        'id' => 'paprikas2018_top_slider_mobile',
        'before_widget' => '<div id="%1$s" class="visible-xs widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => 'Header Left',
        'id' => 'paprikas2018_header_left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
	    'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Header Right',
        'id' => 'paprikas2018_header_right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Left',
        'id' => 'paprikas2018_footer_left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id' => 'paprikas2018_footer_center',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id' => 'paprikas2018_footer_right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Logo',
        'id' => 'paprikas2018_footer_logo',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>'
    ));
});


add_filter('get_custom_logo', function($html){
    $html = str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );
    return $html;
});

// Remove <p> tag before/after text widget
remove_filter('widget_text_content', 'wpautop');

require_once get_template_directory() . '/inc/Walker_Nav_Menu_With_Separator.php';
require_once get_template_directory() . '/inc/Walker_Nav_Menu_Mobile.php';
