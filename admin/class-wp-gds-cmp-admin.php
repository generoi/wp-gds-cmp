<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://generogrowth.com/
 * @since      1.0.0-alpha
 *
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/admin
 * @author     Genero <christoffer.bjorkskog@genero.fi>
 */
class Wp_Gds_Cmp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function register_settings() {
		register_setting('general', 'cmp_gtm_id', 'esc_attr');
		add_settings_field('cmp_gtm_id', '<label for="cmp_gtm_id">' . __('GTM ID', 'cmp_gtm_id') . '</label>', __NAMESPACE__ . '\\fields_html', 'general');

		function fields_html()
		{
			?>
			<input type="text" id="cmp_gtm_id" name="cmp_gtm_id" class="regular-text code" value="<?php echo get_option('cmp_gtm_id', ''); ?>" />
			<p class="description" id="tagline-description">Google Tag Manager ID</p>
			<?php
		}
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
		 * defined in Wp_Gds_Cmp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Gds_Cmp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-gds-cmp-admin.css', array(), $this->version, 'all' );

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
		 * defined in Wp_Gds_Cmp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Gds_Cmp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-gds-cmp-admin.js', array( 'jquery' ), $this->version, false );

	}

}
