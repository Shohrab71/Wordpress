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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '[EbA)wT$N ySI&vKvA@>|%,)%uZ`Y}Z&5-4wH,([@q%}UPZgz(687{r.u43yHJo#' );
define( 'SECURE_AUTH_KEY',  'SpkWsQmM/#/ F{`FWUQbQJJlCfdQI@{E!}+jJS @Z4q-eSH^%BvzoG#jXGws]IcR' );
define( 'LOGGED_IN_KEY',    'Fw #Owh-:S=6{U[tja*w|#v(BKvS6jIfS/Mi8nP5ND~N8Koiy*~-)&/pYsNxSo69' );
define( 'NONCE_KEY',        'u%$!-d ![MTo-#elTHoyDb2@,@d3xVZE%)@{}iC,cCia .^[XIFd(drK+XKzDy,]' );
define( 'AUTH_SALT',        'Z;Yo/HzcRP;+*57d)#qt GT} YH(WUvW:CZS4flsSLkd7_*HKtp@-(x;IbO%ah7t' );
define( 'SECURE_AUTH_SALT', 'A9(h.(|ZZMXuGf~}P1zOb;zj0e+E8XdI7DXpzZ$QtMR v?WZ[8DmP6|$u^23L:P$' );
define( 'LOGGED_IN_SALT',   'L 4t!;:Zumx~mG{R0s5zaHye3I_MCbL]b>l6QO2CyFX7CIIkK1nvflp!|P<E8wjT' );
define( 'NONCE_SALT',       'wzU,ol-Hi+;!!LH&PKdo8/ 0ggxy`<4].-cD06X#pUb[OnQJJ=yteyv_4u4bSCP ' );

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
