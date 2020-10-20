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
define( 'DB_NAME', 'wordpress5' );

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
define( 'AUTH_KEY',         '/-6kAkIrV (=.q5bA@Z_VZHtVE_gy_$1t{WQ;wAX?R>0_ARz-t9,|6BYwDh^uWm7' );
define( 'SECURE_AUTH_KEY',  ')A2A`o&#r&l~#6%r~#NT>u5Vr:qJwH[b7wgv7D0j7^d&d(6@eXpn&-^>1,7FG3{=' );
define( 'LOGGED_IN_KEY',    'zIu,TD(Tn=^X:(Q|>/n{Q7LCtoKUUbCGa)s`ouSHY/Hl+KadKOzq 5g @,vU=m</' );
define( 'NONCE_KEY',        '@y/#8rw]|.o+|Cb!EBU;w/#A~H$0dk-vfSUg]z7[W#h-LpQ4!_weKk$[#[s+A]yr' );
define( 'AUTH_SALT',        'Xx {M(lz{jkq#sMQV%u:UDS6C?TXuWhYSVsAJm&s?L#(!9}s{K>u8imSVHrBbSzn' );
define( 'SECURE_AUTH_SALT', 'jmyI{&FOpJ.AUt@{Q_N4Z-2UB!&#(pAs>XZVO7Tl^K:5Qa{0CBfI1Ez{mZ]&VLjA' );
define( 'LOGGED_IN_SALT',   'T9?.k5E&Dy9Ub4Vy|9A^7MN_rJn{M2mvK<E.B34tQTw+iY~q +Mf<aE7Mt~X|/-]' );
define( 'NONCE_SALT',       '$jOAKksb9%*b#Pm/L=I<g{vLp&/~jYizu2wju*|]s4~z-Yd]n(YEO#L$9LFJ@Z2;' );

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
