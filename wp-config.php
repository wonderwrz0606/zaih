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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'KXNn7WXUA{*1v;BgfFyRSt.W XP)]6z#A>rc:aA>9p^6td1Ze|tAtIX7o)Kj=%{K');
define('SECURE_AUTH_KEY',  'klhAtrl;qZFopCP.),X{=oOOW6V s[Ew:`QTOx;wf-:n&k3l]F{X]{|/R^i+moy`');
define('LOGGED_IN_KEY',    '3ppBu5Ij*)Wb0B=0&vGV*u1e{NR{p-&FL3V_HS+^rhPly._[b=,gSaf)y))WcR^7');
define('NONCE_KEY',        '*#}E -J8&kheBSE@a%O>$55%HT9cCbukP-!d!1?beTfH|P9fo_NR{fohRBL:zXQj');
define('AUTH_SALT',        '=C3<x|x~CNcxik7>&GS+ 1G8D`U1c/#&.c:aN2&Kq!]!VIcw$hvq.f8qUxKKyuHn');
define('SECURE_AUTH_SALT', 'OzvoCl]g`,*>k+^M;{2F`A5oD4sitI`KX9M[rRXX0>;PR~gjK#;2>P}L/Fbd!ZmK');
define('LOGGED_IN_SALT',   'RpB-:#Y#<p`Z-?M@ Lj`n-[d8Tb>I:Qh!p.%29G)K36]pu671OT*5Uus=.Q9bTu{');
define('NONCE_SALT',       '@Rab%e&z6}4~XS|~@#G=9/=)h!pVCi]x/J,X+ezu,+afpN<IZ{q^Il/WD{6p/nBS');

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

