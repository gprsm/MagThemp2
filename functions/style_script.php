<?php
function theme_css_js(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/Content/Css/bootstrap.css',[],'1.0.1');
    wp_enqueue_style('mdbCss',get_template_directory_uri().'/Content/Css/mdb.css',[],'1.0.1');
    wp_enqueue_style('myStyle',get_template_directory_uri().'/Content/Css/style.css',[],'1.0.36');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css',[],'1.0.45');
	wp_enqueue_script('jqueryMin',get_template_directory_uri().'/Content/js/jquery-3.6.0.min.js',[],'3.6.2',false);
    wp_enqueue_script('bootstrapJs',get_template_directory_uri().'/Content/js/bootstrap.js',[],'1.0.0',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/Content/js/popper.min.js',[],'1.0.0',true);
    wp_enqueue_script('mdb',get_template_directory_uri().'/Content/js/mdb.js',[],'1.0.0',true);
}
add_action("wp_enqueue_scripts","theme_css_js");
function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];
		if ( $script->deps ) {
// Check whether the script has any dependencies

			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
?>