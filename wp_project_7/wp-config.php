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
define( 'DB_NAME', 'wordpress7' );

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
define( 'AUTH_KEY',         'nh3_5`rBi@!0O]2wcdw@1WVV]rk)$E}JYux^l5!$cDNu[m.Gv%;{?X~I9b|:*|<q' );
define( 'SECURE_AUTH_KEY',  'JfA$P+T%SY/2rVoZ-EiBic^&NLE{nK]8}@wf_53;cGf+w#_3oVwvU37a9Z_!|PvK' );
define( 'LOGGED_IN_KEY',    '53B=CdvZhOIz?h`NNpF!<e8>nt,n);Oc|t}8q{yVFp:z)Jc;d~L7g)zvH7o4u9!x' );
define( 'NONCE_KEY',        'V88BwG?2&[!F[oly!zG*BZ(zUjaF ip@N):]&geQU ~kSAA&9l>`OAfb)lrATIx{' );
define( 'AUTH_SALT',        'wkqn9$XJ@R5CxB$P=SoE|;h/3:~~Dd;#_;q9%(f)#48PRT%>vwO9-l}|s+9!tovl' );
define( 'SECURE_AUTH_SALT', '(g5W?o!jQG.6&=L8*iw^Ft{.UHDZ{sK$vGYEn/!T8j_6E*$Cy5_l_j$KB#E%ReO/' );
define( 'LOGGED_IN_SALT',   'I8zib&Qc=DsN+#Y.9Xu14v[e{5ey]?YE#<a?D~Z%fF,KvFjaWA[(BAJhEdju_c]>' );
define( 'NONCE_SALT',       '/{Lt ZzuV6QfhCA^9/Dk++L-jqu5?o5r<.Mg<|b/r,TffX;$!OHW|EYdtlBk15zz' );

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
