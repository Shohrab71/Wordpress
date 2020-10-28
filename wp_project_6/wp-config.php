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
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         '<;DI-Q)a0u=YV1dfKS,.s6%^G:*GZDFIraCWvP+.p68KEzNbLkjM>I&<zpA HO_)' );
define( 'SECURE_AUTH_KEY',  'aJLzSejBllW|[-)$(MO$hUD[RWj^nfLwtKde(tEw&`yq.|[W][;-6+e93hJK!i|X' );
define( 'LOGGED_IN_KEY',    ',f+)5+8FkbvlruTt}#KE7pti[pd[JPm*0[A2ehSbbVUfVh3Fj&.*:({&AKx>dy$i' );
define( 'NONCE_KEY',        '/GzNg%ZB(yS&z>^X%c9})vBB,[)NR[CGrS>+QuAiO$:8522/HoZLxqGT*lT/OEq5' );
define( 'AUTH_SALT',        'us=c(=~c6I(HqZN5t>-O8q{%jk>D`bjR?cLjh&/)5K!R_wH^!Vc!h|@&|q=mp}6P' );
define( 'SECURE_AUTH_SALT', 'K%56`.t,|3ge`&}eXKGlF}vw_sv$iUN:OmgIcs>8}_#||vF$nF0926e mHrZbi$(' );
define( 'LOGGED_IN_SALT',   'N?9#;(rNm470BRukcvmP.+&RIokWj~kRc1%p;pC0S;ca(#K;Y/~wD6w)^M74vp9C' );
define( 'NONCE_SALT',       's2T$C9g_5j0mqFgo]UX%rf!X1fR?<LlWp.WMsVEL6iRX7)RE#DvJy]-(pX^cA5!X' );

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
