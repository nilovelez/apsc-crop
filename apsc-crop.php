<?php
/**
 * Plugin Name: APS-C Crop
 * Plugin URI: https://github.com/nilovelez/apsc-crop
 * Description: A simple calculator to convert focal length and aperture values based on different crop factors.
 * Version: 1.0.0
 * Author: Nilo Vélez
 * Author URI: https://nilovelez.com
 * Text Domain: apsc-crop
 * Domain Path: /languages
 * License: GPL v2 or later
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define plugin constants
define('APSC_VERSION', '1.0.0');
define('APSC_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('APSC_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include required files
require_once APSC_PLUGIN_DIR . 'includes/class-apsc-crop.php';

// Initialize the plugin
function apsc_init() {
    $plugin = new APS_C_Crop();
    $plugin->init();
}
add_action('plugins_loaded', 'apsc_init');

// Load text domain for internationalization
function apsc_load_textdomain() {
    load_plugin_textdomain('apsc-crop', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'apsc_load_textdomain'); 