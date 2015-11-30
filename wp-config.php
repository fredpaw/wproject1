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
define('DB_NAME', 'wp_project1');

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
define('AUTH_KEY',         'bAL?h!|*twg-[j-tUH-J40(q[zRT-lq[G+1&}dE(zlnBm9u|d;_htJj0J_*;>v1a');
define('SECURE_AUTH_KEY',  'M^$m);:5VDy9gFt#s+~PA>~TEL7lm_4{BU)~-~mwg_5!+k~|=BUx>A}+Y2-=C(ks');
define('LOGGED_IN_KEY',    '|XT/oVI2Y&R!o8yK[2>Cn}03;;fh9Y,;UzZ/_N@<,S_WF.}^km0(x|&=$BY-?k|g');
define('NONCE_KEY',        'E}ueR>HSW9cmkuQQ_}]yRoH]8wq|0Z<_z7=vGX<8At2f81dZePg-SpJ/z3dI6[n|');
define('AUTH_SALT',        '%U5oj?8OhWH&0q{jkX?b0a.B}cs?jUC~f:T?8eh?^DB vDUB+@YqK0I8mvUfK%NX');
define('SECURE_AUTH_SALT', 'Niom-i6wdVrw8g*!#Qb_$T>~*$j3fS+PV[c&J|-$K>AtP>o|ZS-bX1sXLHOh-R6D');
define('LOGGED_IN_SALT',   'm|SZT^+.Ff&-%LMcfb( ^VU<[B+N>9KsI,((FF=H#k9Kw8K9NS:5y~r^1~KQ9 ~^');
define('NONCE_SALT',       'F[B<@r 0cTNmW`T.GX8$F<+|]xo,cB_<5A]8oRLzLJP/1&9k>R?p-4Fr~9> *4fl');

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
