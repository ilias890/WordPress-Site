<?php

function bst_enqueues() {

	/* Styles */
	
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('business-frontpage-css', get_template_directory_uri() . '/css/business-frontpage.css', false, null);
	wp_enqueue_style('business-frontpage-css');
	
	wp_register_style('animate-css', get_template_directory_uri() . '/css/animate.css', false, null);
	wp_enqueue_style('animate-css');

	/* Scripts */
	
	wp_enqueue_script( 'jquery' );

  	wp_register_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.js', false, null, true);
	wp_enqueue_script('jquery');
	
	wp_register_script('jquery-min-js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', false, null, true);
	wp_enqueue_script('jquery-min-js');

  	wp_register_script('bootstrap-min-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-min-js');

	wp_register_script('popper-js', get_template_directory_uri() . '/vendor/popper/popper.js', false, null, true);
	wp_enqueue_script('popper-js');
	
	wp_register_script('popper-min-js', get_template_directory_uri() . '/vendor/popper/popper.min.js', false, null, true);
	wp_enqueue_script('popper-min-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);

