<?php
	/*
	Plugin Name: TCR set login background image
	Description: customise the login screen with your own image
	Version: 1.0.0
	Plugin URI: http://thecellarroom.uk
	Author: The Cellar Room Limited
	Author URI: http://www.thecellarroom.uk
	Copyright (c) 2015 The Cellar Room Limited
	*/

	defined( 'ABSPATH' ) or die();

	/*************************************************************************/

	if ( ! class_exists( 'tcr_set_login_bg_image' ) ) :

		class tcr_set_login_bg_image {

			function __construct() {

				add_action('login_head', array ( $this , 'tcr_login_logo') );
			}

			function tcr_login_logo() {
					echo '<style type="text/css">
	        				h1 a { background-image:url('.get_bloginfo('template_directory').'/images/login_logo.png) !important; }
						 </style>';
			}


		}
		new tcr_set_login_bg_image;

	endif;