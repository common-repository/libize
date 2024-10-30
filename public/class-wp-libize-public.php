<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://libize.com
 * @since      1.0.0
 *
 * @package    Wp_Libize
 * @subpackage Wp_Libize/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Libize
 * @subpackage Wp_Libize/public
 * @author     Your Name <email@example.com>
 */
class Wp_Libize_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wp_libize    The ID of this plugin.
	 */
	private $wp_libize;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wp_libize       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_libize, $version ) {

		$this->wp_libize = $wp_libize;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Libize_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Libize_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_libize, plugin_dir_url( __FILE__ ) . 'css/wp-libize-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Libize_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Libize_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wp_libize, plugin_dir_url( __FILE__ ) . 'js/wp-libize-public.js', array( 'jquery' ), $this->version, false );

	}

}
