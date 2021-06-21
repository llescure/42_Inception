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
define('AUTH_KEY',         '3T| sg()Tp):`P+$NB:>ugwK&x_b/ 4x}Tqi$VK!#D]igg[lgxto/q:d5VTq`s}<');
define('SECURE_AUTH_KEY',  '*<6fa=rWH7|@d/pE C`^f~=*nRUk_Qt?FW&6gp%v~3UwV.u<2yt3e88B#bBC0RB1');
define('LOGGED_IN_KEY',    'y!gA|0],_%n(tLlv0.zo:qA5H3(t4]6-q+SvA^_e}n@U|5Hx?)D`+~lZ+)AG!l+~');
define('NONCE_KEY',        '#`JT7^edlF#QW$Wg/M[trV^HraMEXcgfJi?SiUf2C0c5@+WJ`$<fT#2tHw,]*gS+');
define('AUTH_SALT',        'v!2++Bt0cu[I,Wc){|rO2cH  }hD.|&N/|:3!|!H=e(fiox7wHWCQm|O=ug2t@i]');
define('SECURE_AUTH_SALT', '#!CYIS]hvKn&22qBg&tzFr5<Ax2iTa=)%N4I`Wo:j^XtHtEjYr2[]D%>(cbX~5|r');
define('LOGGED_IN_SALT',   'In|D?w|{c=XKmSb|?[_vV+C-8/Y,9H(j8,Nxx=%O#bc?Gz>TrPmD5~OmRZ^/lA$6');
define('NONCE_SALT',       'l[]WNV--S|4KbmM=#[Yp&H8RP9&qXDu6S{:qgM<%`!js5c8dAx~.Pb[w@o?:o_Co');
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
