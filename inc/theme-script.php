<?php
//load all theme jquery script
function beuh_theme_scripts() {
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery'), false, '2.7.0', false);	
		wp_enqueue_script( 'jquery');	
		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery_easing', get_template_directory_uri() . '/js/jquery.easing.js',array(),'', 'in_footer');
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.js',array(),'', 'in_footer');
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js',array(),'', 'in_footer');
		wp_enqueue_script( 'responsive_video', get_template_directory_uri() . '/js/jquery.fitvids.js',array(),'', 'in_footer');
		wp_enqueue_script( 'pretty_photo', get_template_directory_uri() . '/js/jquery.prettyPhoto.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery_nav', get_template_directory_uri() . '/js/jquery.nav.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery_scrollto', get_template_directory_uri() . '/js/jquery.scrollTo.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery_sticky', get_template_directory_uri() . '/js/jquery.sticky.js',array(),'', 'in_footer');
		wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js',array(),'', 'in_footer');
		wp_enqueue_script( 'ticker', get_template_directory_uri() . '/js/ticker.js',array(),'', 'in_footer');
		wp_enqueue_script( 'rdn_slider', get_template_directory_uri() . '/js/owl.carousel.js',array(),'', 'in_footer');
		wp_enqueue_script( 'rdn_customscript', get_template_directory_uri() . '/js/script.js',array(),'', 'in_footer');
}    


