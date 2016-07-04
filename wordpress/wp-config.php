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
define('DB_NAME', 'ecgautoparts');

/** MySQL database username */
define('DB_USER', 'ecgautoparts');

/** MySQL database password */
define('DB_PASSWORD', 'ecgautoparts');

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
define('AUTH_KEY',         '1_3~w=xD`[rVg;>17q3J*K%Z,e)&&oA2>uOyl[SE-9cN.8L*`1[n}V86o>EL*A9D');
define('SECURE_AUTH_KEY',  'Y}(Tl8_9rl)KBn`KLMM,E8rz6HwC-}6i^uM`4LX%%:-@ )X{6Dk{fhB9Oyk5Wz9k');
define('LOGGED_IN_KEY',    '>1PT+Yjlxg#O`KFgFA2TlVyh|2I%gh>W6T>v)cg|.D@YTh9eee-]kd!ZgD)<hKXZ');
define('NONCE_KEY',        ')MoLHVoCV<ZN=i8^pLNSWn=@lQ~7Z6TR9!hqWvuch*O6y6`!Ci>x$N%YzS:xu~U5');
define('AUTH_SALT',        'su7V>j%N,Vy%`F0y^W;YNXJ+KxIfPC+2f!oLYBc-j*/-4X]~%4qP!(kC5mM*:w^U');
define('SECURE_AUTH_SALT', 'v4yl1:M[Y[W8F6`wSV*&iD<7En[t)7}o@auL*<T,8TjL~:K`S,))HpoAZ{(%h-7E');
define('LOGGED_IN_SALT',   'Vm3[[,b 38^uUHHI7#|u8gdTS.#> lht>NVZA@Xc*rY (JjDbVMyTw!uSD|tUoQ{');
define('NONCE_SALT',       'cwOp8cJWL~>jD(e(Rx~!uL]nKZ,X1%)P[x+m1*G{,9R;P7LM.R{(HhrHNqz,Ele9');

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
