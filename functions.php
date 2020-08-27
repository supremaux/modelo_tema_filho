<?php 
	 add_action( 'wp_enqueue_scripts', 'modelo_tema_filho_enqueue_styles' );
	 function modelo_tema_filho_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>