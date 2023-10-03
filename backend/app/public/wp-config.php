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


define('AUTH_KEY',         '4jvtHM+zQWIDr078vGK8+dmI/jDfr7cQRjIDhQiTF4xURlkXWJ4CfGY8P+Lkk1cCnLyLH4y7eRCFj6T2cVSWHA==');
define('SECURE_AUTH_KEY',  '+2ChZvTmbvG++16aEnJUshqcGzkq4raygb/cCQF8bEYzRqATXn1nYe9OOkkqLzRH6R905Omv1TK+gd1/5QDyxw==');
define('LOGGED_IN_KEY',    'monac0e1LWx67gk0cLkgyEUgGfyP2wVqVea+OKluMBtHHOltaJHBMiqz/B5gptRke1CxFySzEynMGtZiRFAt5w==');
define('NONCE_KEY',        'uJj8w5pXxW3bzZtGdMTj9nccROOF58vJtMwY3SLERaf7kv+Bqhk2eOozKrPIenGhQ/ui1Hn0NzcVLmu4WYb6Tg==');
define('AUTH_SALT',        '6MyLeMmPDmDy69i4ivPzrTetbUTV1ss54wlBCG/P8oAUsDbzvZ13f+za9/zDL13oaIpwtrVM0FJv4Y0xvyK2LA==');
define('SECURE_AUTH_SALT', 'qWKYGYypLY17k9G+vzHgmxNeGqx4wsfUx+cmFlf5TqDLOb7XrZ9HMBiHSrpHsN+oGVLP7sTBi7jEXFPibe19Gw==');
define('LOGGED_IN_SALT',   'zaKRbCPj3wmIyh8QP00UQm5WNvCUHd5yA62oVSSY3+SAoYvquGBDkVgbkDYzawDHPJVNnrPlO2XStwZOmqeGQQ==');
define('NONCE_SALT',       '4OmfYCU/2HUpl3vTDpISeeFiDE+K169CipADhvbrNsbpdM6Ksmlv44Gy2l55lGPqKFZjofti359A5XruyZLQ+A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
