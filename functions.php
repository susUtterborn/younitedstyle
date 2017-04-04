<?php

	function younitedstyle_setup(){

	}

	add_action('after_setup_theme' , 'younitedstyle_setup');


	function younitedstyle_scipts_and_styles(){

		//ladda bootstrap4 styles
		wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' . array() , '4.0.0-alpha.6' , 'all');

		//ladda egen css
		wp_enqueue_style( 'younitedstyle-site', get_template_directory_uri() . '/assets/css/site.css', array('bootsrap4') , '2017032701' , 'all');

		//tar bort gamla versionen av jquery
		wp_deregister_script('jquery');

		//ladda jquery
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js' , array() , '3.1.1', true);

		//ladda tether
		wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' , array( 'jquery' ) , '1.4.0', true);

		//ladda bootstrap javascript
		wp_enqueue_script( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' , array( 'jquery' , 'tether' ) , '4.0.0-alpha.6', true);

	}

	add_action('wp_enqueue_scripts' , 'younitedstyle_scipts_and_styles');
