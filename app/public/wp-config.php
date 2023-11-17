<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'apSQxxg0OBKegjPKuosShEbFP+c8I1bNfl9TXk5BdEyPCKpmtHYRRoDsV9yMG74r52t79kpr3BMygIGvPj9qcA==');
define('SECURE_AUTH_KEY',  'cvoQjSrwj0TBCW1nturlA79jmb7PLQCaFJGKKGOoWghaDv8Jem3kPjpkI+LYORuReDpl9q2HXgRHLupGHjBcCA==');
define('LOGGED_IN_KEY',    'khEer94jxj6/9Im8pruRnOgvtesUIpN4og2zEDtneBFENJm1aoZDbqEF02OzsZ5xc2ZZU2PdUfjM8tlOWc3eMA==');
define('NONCE_KEY',        'AYmnkBhg+jJvtmpbSdQoEcpUia+Os2HBTFkMz+H5iJpAYpjT9vh+bx5evOn2z3ERkYvhfRRqDYuSD/aa///vnA==');
define('AUTH_SALT',        'YjAqxZg8pfyW+U1tgJ8x2QBKUYHkh4/DuMEGn6hirfkB1+ztFPxyZBLp9EY9iVG8vmPfGCqqXWvxofj007OIZg==');
define('SECURE_AUTH_SALT', '+RpxUbv2a9udjjoLhJcwqBO1gPfqoI+Ck9A2rQl0WDO9IPxZUZ2PvbHDqGj+fpLmdUBHqjGeaTT68UVDqx+URA==');
define('LOGGED_IN_SALT',   '1bWcq25PLaDxULRvo8zsIGYVecQ8guetQKQwfFjB+yK1LcTRngbNCbHV5JrzJb3ajPUToSPcfmovb4A4bZGw8w==');
define('NONCE_SALT',       '9ZPKR5pyMAScxDkDgNVX9Moqx9ff/dmqIyYzdXDWdkI1LFsSn+xWFtx7PT+/SRakI+VW7C8OCE9RSiROiX9w5w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
