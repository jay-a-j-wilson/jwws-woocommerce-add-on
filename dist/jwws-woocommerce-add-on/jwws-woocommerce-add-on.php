<?php declare(strict_types=1);

namespace JWWS\WCA;

use JWWS\WCA\App\Factory\Factory as App_Factory;
use function define;

/**
 * Plugin Name:  WooCommerce - Add On
 * Description:  Adds WooCommerce functionality.
 * Version:      2.0.0
 * Requires PHP: 8.1
 * Author:       Jay Wilson
 * License:      GPLv2 or later
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.html.
 */
if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once __DIR__ . '/src/vendor/autoload.php';

require_once __DIR__ . '/vendor/autoload.php';

define(__NAMESPACE__ . '\DOMAIN', 'jwws');

define(
    constant_name: __NAMESPACE__ . '\PLUGIN_DIR',
    value: basename(path: plugin_dir_path(file: __FILE__)),
);

App_Factory::new_instance()
    ->create()
    ->hook()
;

