<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cursoWordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uAbCLvVn4YYQ8Vf2PRQcPTXDlJj0HEaI1EZT4JEexKIk9fU8XD9uo4ziy6sxye57' );
define( 'SECURE_AUTH_KEY',  'sNaVcr82P3KXTkcGmS3K2JUyBuHOrRapMGDx1KyXDKvxzAOrcCJS9pZXKv9a2W2H' );
define( 'LOGGED_IN_KEY',    'LzYKgMAfukizu8egqkDw9evulnGjFPaSSw1lF2oaFelKgSjfKLHjIaXcOPPd5tQ6' );
define( 'NONCE_KEY',        'aPOMw5A8iA1YpAXHQ2SpGmRZBF2yfo0vdOZIv8OJIOLGcsrq7sC03ZZuBsmCabQm' );
define( 'AUTH_SALT',        'AWZTb1rbau8X6gWLH8FEolOm279nhaNSXAaAJaqpLJGayOrIp1bthbI9DwwPXBeg' );
define( 'SECURE_AUTH_SALT', '858sNANCUnZNJA5GlrPQdVmGhjztb3OC0muwO5NkTaQFuV8cwhsqq5wbgImGMk9a' );
define( 'LOGGED_IN_SALT',   'mKaoPkz0amjhrX8YV81IIDBi4iYl15PPDLYPkxq01nk2G0UBcTS7mH03F2Drqyyo' );
define( 'NONCE_SALT',       'KJBBrGIxEXc0ec7Kjpo4OPdltPvxEVvXM7gbqKPs82SExrctDVUGXLxj54nlOFx0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
