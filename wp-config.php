<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'pandb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?J`0dW+w~,|,8f@+PS<T-2V&[bggZ7j+[4uij+Yh5u{NBmcC!x?4w]LPYtM>?R|7');
define('SECURE_AUTH_KEY',  'h8-_p_4>rSo-y+HNL6p;NglV{9?JNkC1~[8_v[J&nYfV#+zMr*T_:Yt+@0-_[4wJ');
define('LOGGED_IN_KEY',    'o.HrrP0WRUo|Fa?c=eYT_&3E7ck-YV&dV%<+Y?;B$pq5 4,c6;Tuns)GXcF5e1qI');
define('NONCE_KEY',        '#a-x*s1-X$r&`l{#@lrI8tPJPel?b [|1*cAhn0@)(b++tgMM+|-k|oE>*{wTEPV');
define('AUTH_SALT',        '_eTBajbA2sob^d0k.|d>XkDqw bbxIGHH<9o|t8,.oEs%kk`n4!hW(T,8RZ&;-%|');
define('SECURE_AUTH_SALT', '<=as-_x:o{eC2Jc*oakxxrm]+Za/q6?|@3-Y~^y1s+]044Of]jCWOfa@b>YswkcB');
define('LOGGED_IN_SALT',   'Fu/7u2nI+U Iq!_`k=*boQ8kuLgbx6[+lCxZ5JM2p.$A<SLgFApX,~,:tppv*9fB');
define('NONCE_SALT',       'GzsKj+dm&HX6?C+QJfk`OOSmn{E>=ks.49k p~95`jxnB_xXET5TB$ =uqUxa}JX');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
