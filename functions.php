<?php

add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image
add_theme_support( 'menus' ); // This is to set the custom and dynamic menus

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'NextGen' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

function nextGen_styles() {
	wp_enqueue_style( 'fonts_opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic');
	wp_enqueue_style( 'fonts_raleway', 'http://fonts.googleapis.com/css?family=Raleway:400,900,500,600,700,800');
	wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'rs_plugin_settings', get_template_directory_uri() . '/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'rs_responsive', get_template_directory_uri() . '/css/rs-responsive.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'css3_css', get_template_directory_uri() . '/css/css3-menu.css' );
	wp_enqueue_style( 'isotope_css', get_template_directory_uri() . '/css/isotope.css' );
	wp_enqueue_style( 'color_scheme_css', get_template_directory_uri() . '/css/color_scheme.css' );
	wp_enqueue_style( 'flexslider_css', get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'fancybox_css', get_template_directory_uri() . '/css/jquery.fancybox.css?v=2.1.0');
}

add_action( 'wp_enqueue_scripts', 'nextGen_styles' );

//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		// wp_deregister_script('jquery');
		// wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', '', '', false );
		// wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

function nextGen_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '', true);
	wp_enqueue_script( 'flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '', true);
	wp_enqueue_script( 'isotope_js', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'fancybox_pack_js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js?v=2.1.0', array('jquery'), '', true);
	wp_enqueue_script( 'themepunch_plugins', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.plugins.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'themepunch_revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'revolution_custom_js', get_template_directory_uri() . '/js/revolution.custom.js', array('jquery'), '', true );
	// wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'nextGen_js' );

function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="center-title">',
		'after_title' => '</h4>'
	));

}

create_widget( 'About Us Sidebar', 'about', 'Displays in the About Us sidebar' );
create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function footer_widget($name, $id, $description) {
	
	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="center-title">',
		'after_title' => '</h4>'
	));
}

footer_widget( 'Footer first column', 'footer-first', 'Displays in the first footer column' );
footer_widget( 'Footer second column', 'footer-second', 'Displays in the second footer column' );
footer_widget( 'Footer third column', 'footer-third', 'Displays in the third footer column' );


?>