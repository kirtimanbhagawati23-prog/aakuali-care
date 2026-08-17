<?php
/**
 * WordPress configuration file.
 *
 * Copy this file to wp-config.php and replace the placeholder
 * values with the appropriate environment-specific settings.
 */

/** Database settings */
define( 'DB_NAME', 'your_database_name' );
define( 'DB_USER', 'your_database_user' );
define( 'DB_PASSWORD', 'your_database_password' );
define( 'DB_HOST', 'localhost' );

/** Database charset and collate type. */
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**
 * Authentication unique keys and salts.
 *
 * Generate real values for these in a live installation.
 * https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'replace-with-a-unique-random-value' );
define( 'SECURE_AUTH_KEY',  'replace-with-a-unique-random-value' );
define( 'LOGGED_IN_KEY',    'replace-with-a-unique-random-value' );
define( 'NONCE_KEY',        'replace-with-a-unique-random-value' );
define( 'AUTH_SALT',        'replace-with-a-unique-random-value' );
define( 'SECURE_AUTH_SALT', 'replace-with-a-unique-random-value' );
define( 'LOGGED_IN_SALT',   'replace-with-a-unique-random-value' );
define( 'NONCE_SALT',       'replace-with-a-unique-random-value' );

/** WordPress database table prefix. */
$table_prefix = 'wp_';

/** WordPress debugging mode. */
define( 'WP_DEBUG', false );

/* Add any custom configuration values below this line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
