<?php

add_action('wp_enqueue_scripts', function(){
    //Fonts
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Merriweather:400,700|Sail', array(), '1.0.0');
    // Styles
    wp_enqueue_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    // JS
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js', array(),'', true);
    wp_enqueue_script('bootstrap-script', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(),'', true);
});

add_action('init', function(){
    add_theme_support('menus');
    add_theme_support('custom-logo');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('footer', 'Footer Navigation');
    register_nav_menu('mobile', 'Mobile Navigation');

    register_sidebar(array(
        'name' => 'Top Slider',
        'id' => 'paprikas2018_top_slider',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
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
        'name' => 'Footer Right',
        'id' => 'paprikas2018_footer_right',
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


require_once get_template_directory() . '/inc/Walker_Nav_Menu_With_Separator.php';
require_once get_template_directory() . '/inc/Walker_Nav_Menu_Mobile.php';
