<?php
/**************************** Quantity Increment **********************************/

		function constructions_quantity_enqueue_scripts() {
			wp_enqueue_script( 'quantity-js', get_template_directory_uri() . '/inc/woocommerce/quantity/quantity-increment.js');
			wp_enqueue_style( 'quantity-css', get_template_directory_uri() . '/inc/woocommerce/quantity/quantity-increment.css');
			wp_register_script( 'quantity-number-polyfill', get_template_directory_uri() . '/inc/woocommerce/quantity/number-polyfill.min.js');
		}

		add_action( 'wp_enqueue_scripts', 'constructions_quantity_enqueue_scripts');