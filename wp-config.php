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
define('DB_NAME', 'ebit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'glExP?2LLM3i?pT;%+-._K%h-!VS*Z$t,5ajTqu:YXw0uukxNfys3H:A4Ad~i;$:');
define('SECURE_AUTH_KEY',  'Xi3K?hKXcn+`-}`muic1j_%jO?:N3?s{0~%:wA_^sWtL#F2:/. *H0~r~<H9J(yw');
define('LOGGED_IN_KEY',    ',A?eTZ/LG*Svd?|!Z&#Y|{Ziub@>%xtlci7],H0B9J<.;;p00J_[@Bc)8{4]XxO^');
define('NONCE_KEY',        '*CHC<s;4U3Q[BRoZb[x{l_a6z>`EcG&k2H+2<&t&KFD;bccZdGKo.rc>*b1-)iE9');
define('AUTH_SALT',        '4aJOZLXdR3Ll&<Y8}2yCZpbdZ8KJ(rWo~F6C9]}0q;lnJk%XUoYoSGw~e>hRPXVe');
define('SECURE_AUTH_SALT', 'Rgma*hm Us G:m8FH*`%/19p(.;Zawhq[J}A:ppZ6rQOt]3TtBte!-W{135eCw_V');
define('LOGGED_IN_SALT',   'P+[drS+m779h+^YSD;R-(@Nc<9Rk]i0lNW;E1wsZQ^Y kWT-IXNz5OoIBxN&b?0_');
define('NONCE_SALT',       'rclDe3 .H0eJ]X+6LYy4He!r3>(mUp}?v4BPwl6)j1,]2V;M]YY{ FM`)WY#Ef6w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eb_';

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
