<?php declare(strict_types=1);

define('WP_DEBUG', false);

// WARNING WARNING WARNING!
// tests DROPS ALL TABLES in the database. DO NOT use a production database

define('DB_NAME', 'wp_localwordpresstest_db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix = 'wptests_'; // Only numbers, letters, and underscores please!

define('WP_TESTS_DOMAIN', 'localhost');
define('WP_TESTS_EMAIL', 'admin@example.org');
define('WP_TESTS_TITLE', 'Test Blog');

define('WP_PHP_BINARY', 'php');

define('WPLANG', '');

// change the next line to points to your wordpress dir
define('ABSPATH', '/Users/jaywilson/Sites/WordPress/local.wordpress.test/');
// CREATE A SYMBOLIC LINK OF jwws-ac-add-on FOLDER AND PLACE IT IN THE
// WORDPRESS PLUGIN DIRECTORY.

// WooCommerce
// define('WC_ABSPATH', ABSPATH . '/wp-content/plugins/woocommerce/');