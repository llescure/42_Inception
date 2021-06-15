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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wI!!FUD3spiKZ`y(zLx3#bRm15=zbTCE};<o4zg#9nA(W-W4Tk6IhY.hJ(cXU[rk');
define('SECURE_AUTH_KEY',  '`PU^_44R@`G&8LDPJwGq$XU+f+|N5|TZ~#<?FbEsmq[S-9{flsS&BfMrMka:0a2&');
define('LOGGED_IN_KEY',    'vPlr+he^LZv~jj`+<YE1(+c|K(k:1IH?%w{[ sA<n-*&>-3TWRQxB9Z{64Xs?:t6');
define('NONCE_KEY',        'hJYS|+Y=qlHFPf92e=2y-&*^h_g8v|BBJm;oP#WL|,$RqL8{;bm{51;Z@y*FOZ8t');
define('AUTH_SALT',        '2j=.)|FAT-kA;!`Np[`1w8?eWrP}_NuKSHN3+Kq>{ui},`-%ojJ_B)g(y8nEx.l-');
define('SECURE_AUTH_SALT', 'WtbV9Gn+<_M~+[=_GvIc wK_uo(-Lo|EyjAr4kHiww:CYY4&-!8w:zzl69Be6c%4');
define('LOGGED_IN_SALT',   '=F`qb-Hq|Iu9+E#&|xS8g7}v>GvBy~QeK<$pPvqq:^dMKt<.q$5!u+f=>~;M{&# ');
define('NONCE_SALT',       ';X|`!tpV LK[BL(Yszv5IDz&I#&d;+[p>i^+t]`a#u>+LUII{xVg?Rva#Wcz}[V5');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
