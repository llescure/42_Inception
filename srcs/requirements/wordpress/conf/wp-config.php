<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'REPLACE_DATABASE');

/** MySQL database username */
define( 'DB_USER', 'REPLACE_USER');

/** MySQL database password */
define( 'DB_PASSWORD', 'REPLACE_PASSWORD');

/** MySQL hostname */
define( 'DB_HOST', 'REPLACE_HOSTNAME');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O~7i2cBP2[[4n-C%sjD| LzWl[02[X1.xd^FX BPXTe7=[k?M]bhs{GSOgmYZd)$' );
define( 'SECURE_AUTH_KEY',  '&H7pq8^T-<ZmfdFelg@&<%Z57+5tydp4.s~BdO!CPt~P:hlY*EEqiaGD&0 lSCst' );
define( 'LOGGED_IN_KEY',    'nDAsZELRX|CIIS<3YI|!k+;2,W* {W[?sdMQf]q}b!TF?!h )limsb=vav7~H+ns' );
define( 'NONCE_KEY',        '+FDGPRDE(S#<i,t^f26NzOp.gopyw_8LJ2P]KT0(4]{3c/G4i`Ye%SvV$Vv^[!<N' );
define( 'AUTH_SALT',        'R4cBPiI#,9GWKhQXl<]-r#&yv > l+eE%)*~p@ckWra3Yt#1oddv`#rS7~qpF5lo' );
define( 'SECURE_AUTH_SALT', '~0@}7rM{qk2.,M<27RWtdx7N[IK8[TTst,NCOi[zGp`YS=(Zo{m<X`&:k8@$a~UL' );
define( 'LOGGED_IN_SALT',   'H5v0LvLL2,3ePi}uIb,R`{#Bp|[E`&Fu6A(>H%yII.i+IMv}EPNb </-9d2DBXb0' );
define( 'NONCE_SALT',       'mq0I7h,QsrKhp2sYi2^/^HlN@K:~>6Z,z mi8rsa[gu1 zauw0JjE*}_p{RPQ.z,' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
