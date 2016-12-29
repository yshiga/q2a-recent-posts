<?php
/*
	Plugin Name: Recent Events Widget
	Plugin URI:
	Plugin Description: Displays the newest posts
	Plugin Version: 0.1
	Plugin Date: 2016-12-29
	Plugin Author:
	Plugin Author URI:
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI:
*/
if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
}
@define( 'RCP_DIR', dirname( __FILE__ ) );
// widget
qa_register_plugin_module('widget', 'qa-recent-posts-widget.php', 'qa_recent_posts_widget', 'Recent Posts Widget');
// page
//qa_register_plugin_module('page', 'qa-recent-events-page.php', 'qa_recent_events_page', 'Recent Events Page');
