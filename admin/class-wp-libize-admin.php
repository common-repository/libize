<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://libize.com
 * @since      1.0.0
 *
 * @package    Wp_Libize
 * @subpackage Wp_Libize/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Libize
 * @subpackage Wp_Libize/admin
 * @author     Your Name <email@example.com>
 */
class Wp_Libize_Admin {

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
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wp_libize       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_libize, $version ) {

		$this->wp_libize = $wp_libize;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->wp_libize, plugin_dir_url( __FILE__ ) . 'css/wp-libize-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->wp_libize, plugin_dir_url( __FILE__ ) . 'js/wp-libize-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function register_options_page() {
		// Settings submenu
		add_options_page(
            'Settings Admin',
            'Libize',
            'manage_options',
            'wp-libize-settings',
            array( $this, 'display_settings_page' )
        );

	}

	/**
	 * Display settings page.
	 *
	 * @since    1.0.0
	 */
	public function display_settings_page() {

		?>
			<h3>Configuration Libize</h3>
			<a href="https://scrap.libize.com/woocommerceprompt?url=<?php echo urlencode(get_site_url()); ?>">Lier votre boutique avec Libize</a>
		<?php

	}

}
