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

define( 'DB_NAME', "idb_project" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Q42T>H=9ZXjI;uEEm^vdfa;pCW)VqR %%mH^- KgK?ArD^QHp3Q_?3exTw{/5^dB' );

define( 'SECURE_AUTH_KEY',  'mr?jaL00Je.;o`,6 Mua $CGoq{n_(|dVsb7~rTZjMEov20eoh<8:Vy/S:/PQUE?' );

define( 'LOGGED_IN_KEY',    'p{&v1: (ckMZnJC5i=UsDeO2Xq~~GQjz| oA+peK[SM2TUaTPRKEb(3b3Vyc*1<s' );

define( 'NONCE_KEY',        'Q$dpA~DK8MyYyk(_UtOGv<B8(d#qAi<oE@:zpV^ADkDX%3LiA-MswwkkJaxtzZli' );

define( 'AUTH_SALT',        '{u049F[2R>-L8_OFK3RfR$99bM8Dtl@~[Ic)k`m8d8er5%lkS%$Q8DU5MgFsqB`&' );

define( 'SECURE_AUTH_SALT', 'unJxRz*2%8Pm$jV/Fo34n)($!Y8~Dlog+%X)|d,6IY|DW/:t=`,!6hGZ(k=.9g@4' );

define( 'LOGGED_IN_SALT',   '(!2dvgCsfO{SI?hgnYi~HmHZP?_5O84M]sLSbi(VoXMTjz >]oj:S6#!;2[di_7P' );

define( 'NONCE_SALT',       'H (ZZO4=s#>Ns~cE47`_QITZ7QHY1_%;T]l$Wf,]m3&l=ElOr(.-zF7}fMW=-8>K' );


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

