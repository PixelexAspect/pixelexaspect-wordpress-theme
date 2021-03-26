<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/gemmadlou
 * @since             1.0.0
 * @package           Custom_Pixelex_Aspect
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Pixelex Aspect
 * Plugin URI:        https://github.com/PixelexAspect/pixelexaspect-wordpress-theme
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gemma Black
 * Author URI:        https://github.com/gemmadlou
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       custom-pixelex-aspect
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CUSTOM_PIXELEX_ASPECT_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-custom-pixelex-aspect-activator.php
 */
function activate_custom_pixelex_aspect()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-custom-pixelex-aspect-activator.php';
    Custom_Pixelex_Aspect_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-custom-pixelex-aspect-deactivator.php
 */
function deactivate_custom_pixelex_aspect()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-custom-pixelex-aspect-deactivator.php';
    Custom_Pixelex_Aspect_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_custom_pixelex_aspect');
register_deactivation_hook(__FILE__, 'deactivate_custom_pixelex_aspect');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-custom-pixelex-aspect.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_custom_pixelex_aspect()
{
    $plugin = new Custom_Pixelex_Aspect();
    $plugin->run();
}
run_custom_pixelex_aspect();

/*
|--------------------------------------------------------------------------
| Autoload composer dependencies
|--------------------------------------------------------------------------
|
| While WordPress is not installable via Composer, having composer makes
| the development far easier. It's recommended to not have composer vendor
| files inside version control but use continuous integration to build
| a complete theme with composer installed by default
|
*/

require __DIR__ . '/vendor/autoload.php';



/*
|--------------------------------------------------------------------------
| Disable theme updates
|--------------------------------------------------------------------------
|
| Turn off theme updates so site owners have to manually update by uploading
| new theme versions.
|
*/
add_filter('auto_update_theme', '__return_false');



/*
|--------------------------------------------------------------------------
| Setup custom post types
|--------------------------------------------------------------------------
|
| Custom Post types extends WordPress functionality beyond just posts and
| pages, allowing users to create different types of content, making it
| easier for developers to create templates for different content types.
| eg. In addition to posts and pages, you can have case studies and products.
|
*/

(new \Uposcar\Pixelex\PostTypes\Brand)->init();
(new \Uposcar\Pixelex\PostTypes\PageType)->init();
(new \Uposcar\Pixelex\PostTypes\Rental)->init();


/*
|--------------------------------------------------------------------------
| ACF Config
|--------------------------------------------------------------------------
|
| Load ACF Configs in
|
*/

use Dennykuo\Config\Config;

$acfRules = Config::instance(__DIR__ . '/config')->get('acf');

foreach ($acfRules as $rule) {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group($rule);
    }
}
