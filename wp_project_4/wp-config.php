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
define( 'DB_NAME', 'wordpress_4' );

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
define( 'AUTH_KEY',         'pKQy$iWe]YFng|d7JnoC{Nx,m2w2s4#y0_h6cJa%7+sISI2wN2,F2o}aHhGaVkXh' );
define( 'SECURE_AUTH_KEY',  'Jhjd]|YO6_wG%zc:x_tP<?*Spn^{Lx&Q%v!A5G)lnK7lz!9m})hm1QE?CF2N&Yh(' );
define( 'LOGGED_IN_KEY',    '7=h8zndyll<{NLyi$fKM1S8QgW%He^Wd+&h9Yu,<iP$dPG^%:R2[|nh>JK-IJFL{' );
define( 'NONCE_KEY',        '[SiDPOH-B{xj eqk%&#<B?ma!tLzx$sM`j-&}4Za9qSAgILhzb)}O`It5IEoh:VZ' );
define( 'AUTH_SALT',        'sOT|-pBJZvJSKiz616(GAHSNr|wAL0aGk!e;*zs@97.F2rWkhsn#zM^@$|f?(aE3' );
define( 'SECURE_AUTH_SALT', 'ErXXGD@xc-bsZEzfZ%1$RpBp3N}K?.sPR&NOq{i:F98(98teW*U^+cEhW7&OlM}v' );
define( 'LOGGED_IN_SALT',   '|}fK]mBtP~?~)WMkH/CGttxw$)kt+JFFA2?{~oO)f1QabSKE`Jv/R$<I,xRuL1Rh' );
define( 'NONCE_SALT',       'Y:8 Xp~sIj9myDKw#1AysgF AEj}L T)lMt?e>8W+3Hn4|7tNP~j%!EnV{3FuZTe' );

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
