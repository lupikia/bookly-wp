<?php// load configuration filerequire_once get_parent_theme_file_path( 'pbs_config.php' );// load helper functionsrequire_once get_parent_theme_file_path( 'includes/pbs_helpers.php' );// load theme pebasrequire_once get_parent_theme_file_path( 'includes/pbs_functions.php' );// load theme related functionsrequire_once get_parent_theme_file_path( 'includes/pbs_theme_functions.php' );require_once get_parent_theme_file_path( 'includes/pbs_global.php' );//-->custom resource filesfunction custom_css(){	wp_enqueue_style( 'override-css',get_template_directory_uri().'/../lisner-child/style.css' );}add_action( 'wp_print_styles', 'custom_css',4);add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 3 );function theme_enqueue_styles() {	$option    = get_option( 'pbs_option' );	$direction = isset( $option['site-direction'] ) ? $option['site-direction'] : '';	//echo "theme path ". get_template_directory_uri(). " the direction ". $direction;	if ( 'rtl' != $direction ) {		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );	}}