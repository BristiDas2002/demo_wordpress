<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo-web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2trEOL`k]pk;N~9czEII<1U9{mni2$v@P!mYcBa7$tGJ|H_6xu-9HM]tPVdc:-0k' );
define( 'SECURE_AUTH_KEY',  '^gs1.`Dr}@|]~AQTP<V7aZ)Vlh=$Ct}ZC6n7qto,N*3tJ:Y3YE@R39s33wGal]0]' );
define( 'LOGGED_IN_KEY',    '|< ~7LziYDl/fSFm/:zf&/6G`gq%852G+k:Vod[49r`>eUTJQ?kRvxK[dx+{Ex%9' );
define( 'NONCE_KEY',        'u?_:_O$?:2|+!.dCRIg;=;w,]Q2%>N:4@$A?%*/iDsB6I10G;hR}UIB^M=KvX)v7' );
define( 'AUTH_SALT',        '8<7Rwefzb&]ioi1Oq?6ON-Fv?*4bv,C*yWarBD3)x8V&|R3bx!~SpcR)%</V~8>L' );
define( 'SECURE_AUTH_SALT', 'aI hSq0sjej9!j4HxW]YFwh.b#b}DpbDNI]Kv g3Z|6QWL*CstU1WR$B(8J70Aph' );
define( 'LOGGED_IN_SALT',   'C,$+guAHT,9v0;4vM`t?0Xz+>uRRApAE^>[n<j,3_?X)s!<oZcO&?XG[q*WTuf!c' );
define( 'NONCE_SALT',       'm27hrwxzmpVfk^+Iyg&be: +^FKQkCd1e)e[I8;dYOWUgdvp/E(2W>J>:W-Mzb,M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
