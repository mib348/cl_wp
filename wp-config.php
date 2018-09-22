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
define('DB_NAME', 'cl_wp');

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
define('AUTH_KEY',         'ekFD[(>yZntRrVe}g*ij^60{(}05G~Qs4_>ns/bn)Nx),+cGHt]`C8g)ufMfAB{B');
define('SECURE_AUTH_KEY',  'u6|XIY&>!y`2Tp.t[1#e^8Xkk,U!j* T&TcN4pT Sc-4{+s-UJ{s:M)|`[t6s~Lo');
define('LOGGED_IN_KEY',    't`#`RzzyM|:eBUK(>!q@`*r2ku]XUvxYdSb!daOl?KE|/6~nLX*<YEVt}!VKNiyV');
define('NONCE_KEY',        '[p)l3xj*`f|7A$cS-dutwF+qt{&t0/ZpB_-.ZtfYRiFg_nOxC_%eI;(Ca{AbFHcP');
define('AUTH_SALT',        'Kods-,gY:eq0D}{Mf-QUEgx|wRBDKtvhl^PsI>:XPJ{{ BAmE8:LX-&NKNKJSfk%');
define('SECURE_AUTH_SALT', 'dpjnB,v*)7RSwVXL}rm^bW8I|NvDI:B`|~#fE Tskwk*7Pw)>@XP=ijo&6c:zRAD');
define('LOGGED_IN_SALT',   'RKVH1@6*46Wx`-:avI~{}U7L0X>`_MVBObh5/s9b01P^f)H)KZS|Kkj*~Y U4>Ca');
define('NONCE_SALT',       '{keSQkuhU=dC*4Hwvv{O$H`S.5;/)KHdm[xh^x-(=Ph*T[0qogvr@HD>,d41?3.u');

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
