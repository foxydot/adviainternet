<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'adv_advia');

/** MySQL database username */
define('DB_USER', 'adv_advia');

/** MySQL database password */
define('DB_PASSWORD', 'adv_advia');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ' PiHQwvl+k&hCI;+o*ZVfrd *,:@etpZ>z=#:T-&uKpH^4yz=c}K3SY*QSPGn`tB');
define('SECURE_AUTH_KEY',  'Xl@~Na{n1y{Gtd*Gv?lSdR<*U(ai`AAx{vR{Vh@BKPW+-KPP< Kh$p1t1|s~c.-v');
define('LOGGED_IN_KEY',    'u?<|k7<;! 5&~O|$x*0-XoE|@uOx|KVLRST$p(Fc0{$Lg6yLbEe[km08gnOmb`ZV');
define('NONCE_KEY',        '+|!{Jw4KZA~1-s?-eEy]+N2Intt+T14y9DYY#i],:H-N-?a)20gtcG|A!xi2^7.$');
define('AUTH_SALT',        '+d,8`xR#@y8xRbQ|7xBc9RkK8q#-kq$0Z-R,OXfXRYe^a4MPlS.+Ck(~jBDM2>gG');
define('SECURE_AUTH_SALT', 'aP4Sy=cqtZz]xO`v7j11:o<.aHu+0wM%g`{`C2*T#.]~%%>8R6KcVil46.<0mulb');
define('LOGGED_IN_SALT',   'fo?;g:{Av#Q4>DqG:8-Pq#-&REPFY0jw&&r+o#@5J_xw/8oeC{K6l.|.-Jgfvhm~');
define('NONCE_SALT',       '@f[X3d^H[ay=eX+:8tkBn-*nGk68vY~Tx[ T=V(#A}Nv- OE[-6g)b1-@#&Ax<Q,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adv_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
