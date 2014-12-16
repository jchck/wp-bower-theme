<?php

function bower_tutorial_scripts(){

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.css', false, null );

	wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.js', array('jquery'), null, true );

	wp_enqueue_script( 'bootstrap_js' );
}

add_action( 'wp_enqueue_scripts', 'bower_tutorial_scripts' );