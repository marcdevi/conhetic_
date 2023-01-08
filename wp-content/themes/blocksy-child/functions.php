<?php 
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style('blocksy-child-style', get_stylesheet_uri());
});

?>