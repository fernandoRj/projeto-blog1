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
define('DB_NAME', '9mobile1');

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
define('AUTH_KEY',         'n* xWE.^ei7>vgsER%tVho<E5+bCm<9/.W3u1wna%lYfWTN)9X#kwjvP(cLL2NG:');
define('SECURE_AUTH_KEY',  'aJpy_dB$E FbgvRNu,iO<[`p%bF28m7kZ~*870 9>ut 2h<eH<%-EcwEE|9Q:cx+');
define('LOGGED_IN_KEY',    '9/tG_82T6v`87lpW)595rJ?dZ~h1$n%vW*3] X&g,fK|ZH$M%.GJ5=cI3<i90w/#');
define('NONCE_KEY',        'T>?+fZP?..YxzzBzBlA28f0U@&;>:smn6)2:Bn8oU`A8<Q1.gMA{J^LtNZl,o^,U');
define('AUTH_SALT',        'gwa-+,BeRt<T-/HVX2fU{v6G50Sl6w94 Dcs$4hf-L7MbZl>X~Y[ew&qUUG[(00N');
define('SECURE_AUTH_SALT', '1QymmO+0P[@;h-Gvr3l#s-O),Q!b2%peMrs~}I7|9nf-FE~4>r|5*&{?[T;l5CbE');
define('LOGGED_IN_SALT',   'XTw+%-}cr2c9k.[Usg39Qj(1?zrvPgrL6*Af[[0E4-ZLAo4O@+>fK#*cD`}5x-)C');
define('NONCE_SALT',       'r&f(A_To9jw[FZ=!@)Ra0jS/3Di&92Z7krW0MDb_0YW=R$[/hGMKvxz.Z_dR9*ZG');

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
