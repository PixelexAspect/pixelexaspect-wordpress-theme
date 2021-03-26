<?php



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
(new \Uposcar\Pixelex\PostTypes\Rental)->init();
