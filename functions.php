<?php

	function younitedstyle_setup(){

	}
	add_action('after_setup_theme' , 'younitedstyle_setup');

	function younitedstyle_scipts_and_styles(){


		//ladda bootstrap4 styles
		wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' . array() , '4.0.0-alpha.6' , 'all');

		//ladda egen css
		wp_enqueue_style( 'younitedstyle-site', get_template_directory_uri() . '/assets/css/site.css',array('bootsrap4') , '2017032701' , 'all');

		//ladda bootstrap javascript
		wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' , array ( 'jquery' ) , '4.0.0-alpha.6', true);

	}

	add_action('wp_enqueue_scripts' , 'younitedstyle_scipts_and_styles');
