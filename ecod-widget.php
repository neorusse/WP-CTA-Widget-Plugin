<?php
/*
Plugin Name:       Ecod-Widget
Description:       Plugin Developed as a Widget for Call to Action Function.
Plugin URI:        https://profiles.wordpress.org/
Author:            Russell Nyorere
Version:           1.0
Text Domain:       ecodwidget
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/create-widget.php';



/*********************************************************************************
Enqueue stylesheet
*********************************************************************************/
function ecod_widget_enqueue_styles() {

	wp_register_style( 'widget_cta_css', plugins_url( 'public/css/style.css', __FILE__ ) );
    wp_enqueue_style( 'widget_cta_css' );

}
add_action( 'wp_enqueue_scripts', 'ecod_widget_enqueue_styles' );

/*********************************************************************************
Widget
*********************************************************************************/


