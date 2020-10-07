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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Fl]u!-(okAn.,qWP A/M[pjskwj@%6Icf?au[w#UoIy#59:*e;uE_sXYhl6f#~Jp' );
define( 'SECURE_AUTH_KEY',  'q>onba>x)rM]4@u11H~)^6=;~7+yMTk,S2`B-G1RAf[JlZP*9w3:ZE4vWwYn@nqb' );
define( 'LOGGED_IN_KEY',    '+R0T6c&1KdZs BMtSE(*A{5e0d<NRoqXAmPdf) b~CZW]#AMpCay,_Om:)PLz%~p' );
define( 'NONCE_KEY',        'JqIL5(*#`CQi*f,7dD0m-X>XXSGt:UTY(l5_kYuI1 azm1z+#)/rbYf[|Cl9!,=K' );
define( 'AUTH_SALT',        'Zc1x*%x WyKy$N.JU6%$GW DY.po4ersZMg7FO/$#;3-;nJN4]:G:k114GkZ 8f[' );
define( 'SECURE_AUTH_SALT', 'ccpXl4Qf 6`r0Rir  jv`FB+ dxx;GvQ6`;p0DBzdl;_7ow$s1eXWpud45B~7EKh' );
define( 'LOGGED_IN_SALT',   'ls82aZ$~YdY2v(Ko!Yx8OW^-!sdDmB#RS13up!Ch^z>L+Z&RSCudA4F(xc:m{=?<' );
define( 'NONCE_SALT',       '8lW;;?u!s)x;q7?D%(##N,>eg4@nN3*_?KfJ$g;vBW>r2J-}yx[oqpEpB`R_*+T[' );

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
