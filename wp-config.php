<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'wME{JsDICP&z:(+(&n6n:[:8m+Xx u|EIFl<!Ev]#E+/|)[tklD|nzo^l`w9/5yP');
define('SECURE_AUTH_KEY',  'J|+)ivbG.SAQ!>49|oi@hZ+?U@vn+fNzk_3e*u<q/eJlLsA.Zt~!?G.!3Jy(cyRc');
define('LOGGED_IN_KEY',    '`:lyvz>-vJF+7t^xy(@#Y!|I+|>7M<h*at2fFxMFJ1xtZ9/&1p6khm}nP%--GIqv');
define('NONCE_KEY',        'fZ=[Z3z|N}/E|?~g{<&?5&X]Dj^2.[vmU*E/u3.;:+esx]cVq0z;W%F,hUOzRJNz');
define('AUTH_SALT',        '=([qFL]8^blNrd2ye-mD^,pI-NZT2uLx/rB<oNYe:X60+=USj%>k$PQS*wf;ck+m');
define('SECURE_AUTH_SALT', 'S-]X*(NB<kHy8UQ!Q?.Q#@G9u(?t`aG91TYAb/v%QjBP|rx1r|VjRb:/3yvj[<B[');
define('LOGGED_IN_SALT',   '6/ycZsheZqCU?/]O:hsQbCJ?8YDrLuc@|_]*qBarE5+G@IR%wl(abhx$C7(6~#q7');
define('NONCE_SALT',       '{_=*4:^5_#gz|JQj,Skbv4MYuCzRm;UFhr|!:N<k7.-J}B5RC?R[ /H{:q:0)[=-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
