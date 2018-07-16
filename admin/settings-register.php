<?php // Ecod Widget - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


//function to register the widget
function ecod_register_widget() {
	register_widget( 'ecod_Cta_Widget' );
}
add_action( 'widgets_init', 'ecod_register_widget' );
