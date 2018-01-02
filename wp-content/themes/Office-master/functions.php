<?php
function office_master_support(){
	add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('slider-img',1500,500,true);
    add_image_size('sidebar_slider_img',265,192,true);
    add_image_size('page-thumb',1350,350,true);
    add_image_size('team-img',100,80,true);
	add_image_size('post-thumb',850,490,true);

	register_nav_menus(array(
		'primary_menu' => 'Primary Menu',
	));

}
add_action('after_setup_theme','office_master_support');

function theme_footer_js_activator(){
	?>
		<script>
	      new WOW().init();
	    </script>
	<?php
}
add_action('wp_footer','theme_footer_js_activator');

require_once('inc/theme_files.php');
require_once('inc/custom_posts.php');
require_once('inc/cmb2_custom_field.php');
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/office_master_theme_options.php');



function theme_fallback_menu(){
	?>
	<ul class="nav navbar-nav pull-right">
        <li class="active">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Blog</a>
        </li>
        <li>
            <a href="#">Team</a>
        </li>
        <li>
            <a href="#"><span>Contact</span></a>
        </li>
    </ul> 
	<?php
}



?>