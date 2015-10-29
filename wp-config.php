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
define('DB_NAME', 'john_manlove');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ds&Bu-Ca86D-)pbrhQADO<fp8VFOkPcb))-^|{$;8oUrJH|h:1%FwYsFA4.5.,#C');
define('SECURE_AUTH_KEY',  '5~T9}Fv<fWf$JV:aHdkf9Qpj7c+1b|k seC!=)Ir|B.+*X35$=!ZO<a3bGtY@- I');
define('LOGGED_IN_KEY',    '6G!3K#<pN7;$H|,u+(Gr}-Bb p3Iri--p~|gWrwD+rGbbzI4?5y6`oM>p8F+x*i:');
define('NONCE_KEY',        '4^mYBJvlKAGOR17oLpQRZa|SJpKJxRlBD|ZEI_(]&G5F9}<ciS5N*xGud++J~|T|');
define('AUTH_SALT',        '9B)1-amT^9*UXYh(6Xpu_D<=m^=UB-DO$s?)Ne.++)E%H*4I30Nwx|wc+|*@QJ8#');
define('SECURE_AUTH_SALT', '#enKNZ0]2L%=*uLG3UtU/(o7/z=-Rk8(W%!-mT6e$s4A5EpYKmD0ShMc8z$TIs9I');
define('LOGGED_IN_SALT',   'd?05x2lBTXRez9v}|gkw.f^#k#/tq*-i@=AMK|%_rc/-RI]G=D+uWp1QEvTd}eUi');
define('NONCE_SALT',       'gBU?3K!}F0Lc>xQLh|N|04$wmw!nR)>K-rz|CfxbW`a&Ev0gYn6qzAq-$H&mx}i+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
