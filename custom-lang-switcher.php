<?php

/**
 * Plugin Name: Custom lang switcher
 * Description: Кастомный dropdown для переключения языков
 * Author:      Evgeniy Khovantsev
 * Version:     1.0.2
 */

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CUSTOM_LANG_SWITCHER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-lang-switcher-activator.php
 */
function activate_custom_lang_switcher() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-lang-switcher-activator.php';
	Custom_Lang_Switcher_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-lang-switcher-deactivator.php
 */
function deactivate_custom_lang_switcher() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-custom-lang-switcher-deactivator.php';
	Custom_Lang_Switcher_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_custom_lang_switcher' );
register_deactivation_hook( __FILE__, 'deactivate_custom_lang_switcher' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-custom-lang-switcher.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_lang_switcher() {

	$plugin = new Custom_Lang_Switcher();
	$plugin->run();

}
run_custom_lang_switcher();