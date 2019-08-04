<?php

//adding the css 
function load_stylesheets()
{
  

    wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrap');
   

    wp_register_style('all', get_template_directory_uri(). '/css/all.css', array(), 1, 'all' );
    wp_enqueue_style('all');

    wp_register_style('mystyle', get_template_directory_uri(). '/css/mystyle.css', array(), 1, 'all' );
    wp_enqueue_style('mystyle');
   
    wp_register_style('style', get_template_directory_uri(). '/style.css', array(), 1, 'all' );
    wp_enqueue_style('style');
    wp_register_style('custom', get_template_directory_uri(). '/css/custom.css', array(), 1, 'all' );
    wp_enqueue_style('custom');

    // wp_register_style('product', get_template_directory_uri(). '/css/products.css', array(), 1, 'all' );
    // wp_enqueue_style('product');


    
    wp_register_style('list', get_template_directory_uri(). '/css/list.css', array(), 1, 'all' );
    wp_enqueue_style('list');
 
    wp_register_style('test', get_template_directory_uri(). '/css/test.css', array(), 1, 'all' );
    wp_enqueue_style('test');
   
    wp_register_style('one3', get_template_directory_uri(). '/css/one3.css', array(), 1, 'all' );
    wp_enqueue_style('one3');

    wp_register_style('fontawesome', get_template_directory_uri(). '/css/fontawesome.css', array(), 1, 'all' );
    wp_enqueue_style('fontawesome');
    wp_register_style('content_style', get_template_directory_uri(). '/css/Content_style.css', array(), 1, 'all' );
    wp_enqueue_style('content_style');

 
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



//adding js files
function load_scripts()
{
    wp_register_script('jquery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js', array(), 1, 'all' );
    wp_enqueue_script('jquery');


    wp_register_style('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(), 1, 'all' );
    wp_enqueue_script('bootstrap');
    wp_register_style('fontawesome', get_template_directory_uri(). '/js/fontawesome.js', array(), 1, 'all' );
    wp_enqueue_script('fontawesome');

    wp_enqueue_script( 'boot1','https://use.fontawesome.com/584f61e3c1.js', array('jquery'));

}

add_action('wp_enqueue_scripts', 'load_scripts');

//adding theme support
function gt_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size( 100, 100, true );
}

add_action('after_setup_theme', 'gt_init');
add_theme_support('menus');

//register sidebar menu
register_nav_menus(
	array(
		'left-sidebar-menu' =>__('left sidebar', 'theme'),

	)

);

