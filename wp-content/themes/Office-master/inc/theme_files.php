<?php
function theme_files(){
	//css
	//wp_enqueue_style('name',get_template_directory_uri().'/file.ext',array(),'version','all');
	wp_enqueue_style('google_font_1','//fonts.googleapis.com/css?family=Open+Sans:400,300');
	wp_enqueue_style('google_font_2','//fonts.googleapis.com/css?family=PT+Sans');
	wp_enqueue_style('google_font_3','//fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css',array(),'3.1.1','all');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0','all');
	wp_enqueue_style('main',get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css',array(),'1.0','all');
	wp_enqueue_style('style',get_stylesheet_uri());

	//js
	//wp_enqueue_script('name',get_template_directory_uri().'/file.ext',array(),'version',true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array(),'3.1.1',true);
	wp_enqueue_script('wow',get_template_directory_uri().'/js/wow.min.js',array(),'1.0.1',true);
}
add_action('wp_enqueue_scripts','theme_files');








?>