<?php
/*
Plugin Name: WooCommerce Add On
description: Adds columns.
Version: 1.0
Author: Jay Wilson
Author URI: https://jaywilsonwebsolutions.com
License: GPL2
 */

namespace JWWS\WooCommerce_Add_On;

if (! defined(constant_name: 'ABSPATH')) {
    exit; // Exit if accessed directly.
}

require __DIR__ . '/vendor/autoload.php';

define(
    constant_name: __NAMESPACE__ . '\PLUGIN_DIR',
    value: basename(path: plugin_dir_path(file: __FILE__)),
);

App::hook();