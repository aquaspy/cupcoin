<?php
define( 'WP_CACHE', true );
// +-+-+ Admin Tools for WordPress - Start
define('WP_MEMORY_LIMIT', '1024M');
define('AUTOSAVE_INTERVAL', 60);
define('WP_POST_REVISIONS', 0);
// +-+-+ Admin Tools for WordPress - End
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
* * ABSPATH
*
* @link https://wordpress.org/support/article/editing-wp-config-php/
*
* @package WordPress
*/

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'speedyok_wp236');

/** Database username */
define('DB_USER', 'speedyok_wp236');

/** Database password */
define('DB_PASSWORD', 'S2!Rpix05)');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'qomf1s6anajzdmnxtsblmrgjlchb4fer9x6rebuawape6tapdz5cq3yttzkeq7at');
define('SECURE_AUTH_KEY', 'qatrv4us8osceamxvs0u6g2yojbcynlg2rfi7xdalzuvaomriqwsmzgtvxhc521s');
define('LOGGED_IN_KEY', 'tom1w8z1xzn2r4e8c31upwyclrpgelrg2kogne4fmk9137tpkrpn4f7wrsx8xiev');
define('NONCE_KEY', 'd5zzucjqqjgq8vfxh5lfxqq0kuesmx8gzbdahxfi4j0sl2tciceftvumvftgomwd');
define('AUTH_SALT', 'v6w9ezuhtkxhtxzbavzjwsceyk66bxl4tvjozqpovze1zh5zjxmc1t9i8po2fus6');
define('SECURE_AUTH_SALT', 'uz3yigifogbfv1napur7koigehf2nfz5dwusrgebgbqhsr9vkw6fetuxh050bahm');
define('LOGGED_IN_SALT', 'huddq1kkkg8logy84g8ljwimfpv8rb4xk4n0z02w1vfvmmvrzuoq2yxncacq6alf');
define('NONCE_SALT', 'hqls83u2kio5kdn1xvgtfmsge2o9iwccezdqkyvhwwk30bqrnfa0nae69rqujbtl');

/**#@-*/

/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'wpl7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';




