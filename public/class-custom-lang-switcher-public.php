<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://#
 * @since      1.0.0
 *
 * @package    Custom_Lang_Switcher
 * @subpackage Custom_Lang_Switcher/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Custom_Lang_Switcher
 * @subpackage Custom_Lang_Switcher/public
 * @author     Evgeniy Khovantsev <hitman_06@bk.ru>
 */

class Custom_Lang_Switcher_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Custom_Lang_Switcher_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Custom_Lang_Switcher_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/custom-lang-switcher.css', array(), $this->version, 'all' );

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
		 * defined in Custom_Lang_Switcher_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Custom_Lang_Switcher_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/custom-lang-switcher.js', array( 'jquery' ), $this->version, true );

	}

	public function create_shortcode() {
		add_shortcode( 'custom-lang-switcher', 'custom_lang_switcher_func' );
		function custom_lang_switcher_func() {
			global $sitepress;
			$current_lang_code = $sitepress->get_current_language();
			ob_start(); ?>
            <div class="page_header_lang">
                <img alt src="<?php echo get_option('home'); ?>/wp-content/uploads/flags/<?php echo $current_lang_code; ?>.jpg" width="18" height="12" />
                <a href="#lang_popup" id="btn_lang_popup" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="lang_popup">
                    <?php echo $current_lang_code; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                        <path d="M7 1.36084L4 4.63919L1 1.36084" stroke="#B8C4D0" stroke-linecap="round"></path>
                    </svg>
                </a>
                <div class="page_header_lang_popup" id="lang_popup">
                    <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                </div>
        	</div>
		<?php
			return ob_get_clean();
		}
	}
}
