<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitedesi_wp694' );

/** Database username */
define( 'DB_USER', 'sitedesi_wp694' );

/** Database password */
define( 'DB_PASSWORD', ']w6pSY6W-8' );

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
define( 'AUTH_KEY',         'n6C+#&lS!ZJ0ofF{?SA{1-wgVB5XdP8LSa?{]bApvFx:LOH[utz,s,vJvcwzT-!7' );
define( 'SECURE_AUTH_KEY',  'ud nD3>aUp=!qVqRwKGqRd2s-<!@i#drkLz+Slb39*|>^_k2M.K)Rd(2STrY|@B9' );
define( 'LOGGED_IN_KEY',    'zx2y&EeA>l$-!2mG5$zh]k/cl,W!1E;pJSPA$!Bn=K* *H7|u|t s`tcx4/o:Zq@' );
define( 'NONCE_KEY',        '`@4kr@Kj$B$!Xs`vFG,I$=aA?B{!Z_4MySV3cFcE):[1(h0f_tE1xU|E^b3R>|5p' );
define( 'AUTH_SALT',        'd)Os1NmXhXg.^?`ynVnmzf.huYM%Bx/d[1SftWEE[9b,M hxzFb<z OBulLb>Vls' );
define( 'SECURE_AUTH_SALT', '}*n9{R;[u)bgP`zLq;nAkofQhwJ.F+Q3A,^0a#hv>Z~(TR5iG3@9n=PtQ:,N:!|[' );
define( 'LOGGED_IN_SALT',   'j0H+aa<5kLV,frgZ@i+m0.Cgr>ue/vAZG$%:b_^r}QD330p-QrwWG)=$YzL+KO<Q' );
define( 'NONCE_SALT',       'h*H;P.$wk],@4yZ6jf9])ROxQo:P5a`eD88if|P+;$TY>3%{QrbHj):Fq5*>PDD]' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
