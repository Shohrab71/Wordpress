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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         '4t|jO6^6Tdc1`_->C*KfhTT[0L@9RQ}f,t&f~DCzA+:o;fOajx|&+@Fv7j[kIpT*' );
define( 'SECURE_AUTH_KEY',  '4KwZDXlcUSzBJsUVORT9@<g%7<x>hjd0F_0/}|32qui#2&8R<dpb;FrcfD 0$h.s' );
define( 'LOGGED_IN_KEY',    '-CG4P(LOyL:qeo2ws^9Z)#oQi:>^0(4]% ` 0/odb(>Eoael2D_TEky;m8Fn}KDw' );
define( 'NONCE_KEY',        'G4w{Qi&H^U^A{<oZnM5{$=^G2,awrf_J<[|=e5(K0{ypPvCdIiDa_gjenGP F1A5' );
define( 'AUTH_SALT',        '#B1J6aa5J5hR)`H.<zzn]r6OtuU@?;(1nn4Z>DmUxNK )7ymW#X~DVr (oI/-7IR' );
define( 'SECURE_AUTH_SALT', 'mSL%Jl,4p{MZ}{fCA$r)#Nq>4SW/Hq0~+4WDk2Ee<~WQJlkL5A~q<*F%Of<,yX8S' );
define( 'LOGGED_IN_SALT',   'q{^k*!dYgPwTsQeUw0m2(rAm;wOZrl6=-?wZOz5(*Thr<GFJ@:V]zb52_hrT?l38' );
define( 'NONCE_SALT',       'tiz*zE qB+|5kx 6F0Z&zwA2&{trtG4A:#{fJ?0Zg5UuLb6va8uC66A-08xB9gW$' );

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
