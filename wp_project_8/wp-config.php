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
define( 'DB_NAME', 'wordpress8' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dDElHv.yM:2(__CuMqiku&^.g%qWDV|<d]p4F:QjaU0]r0fa|[zp>NkGCtpN|vk ' );
define( 'SECURE_AUTH_KEY',  'VlLTj|X6YXIdW$Uvi=(9!xsgJ7[uzin+=l{+<Z}!5iML+A{Qza W=^l%/B/{9R}u' );
define( 'LOGGED_IN_KEY',    'OtW#96[|BX{&Vf/N3dI$)#GEKzq|c8EN1bQK-[S05&.!s`D#wE^8m3EXT&9-<ou4' );
define( 'NONCE_KEY',        '+7tsaP[`A=rL A#I/W_[fj Pxf>39TBj!C;Ps?^hfF(4Av.9k1sbbk_0U*u7P9xW' );
define( 'AUTH_SALT',        '|]|Q?-d~;M&rI~W49}gA5AUK*82nV-K8e{dx`LYBlfs5RA=Ang&L0M*D^@XI3/Hd' );
define( 'SECURE_AUTH_SALT', 'Hy#a:a*huBY|jS?~aO)d0V*(cxMUmj(/S,Gys#~9<q$k%gRZqy]?rpjSoElfd3G)' );
define( 'LOGGED_IN_SALT',   '0BvtzMFF4;P>7r+yA^=,3UT9-Hr23i;c{N?XNs=nEWa7|_dNR,l<9?2^Sp>VWUAs' );
define( 'NONCE_SALT',       'k`j)]Ci2O&}rj-ZfxjD--nbj<OX;P#KM~pM*~%K$ +}pp/<I|p[ToGys>eDq9VQ1' );

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
