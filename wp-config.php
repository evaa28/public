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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' *%:[?n5Lmo<Ysj--Q$:<NO`w/TKfZ!yd;DMu]jr`O_[C;_2xj!NRse!o!^fH.]t' );
define( 'SECURE_AUTH_KEY',   'fe?tDo]n)AJtdD6G=,/=x6f_BG+ot4-BA5q/liytB7ufz5kTi g]XCoG!|m)hik-' );
define( 'LOGGED_IN_KEY',     '*kN3SIUoc0=dxD.&<UDF4 P,ON6S_ L0op(nBB0e)iRb0}s,zr$QicA&#v8z5_|a' );
define( 'NONCE_KEY',         'H,Z>ey5!H7Q5DZ@_&S|osqNW$z{V.g?WHF2da3esJN,DGtVoWbzPK P)OhaoQs=p' );
define( 'AUTH_SALT',         'Lnb|8m:v_A-7{{TTo):QQ,e|OH`aFI.vp9?>rYA2!3^v0/#3g.!1l@P<]Q*#=*r<' );
define( 'SECURE_AUTH_SALT',  '7C{,$H/?+a56Ni9sf$XS=GEld.2Zm|=cRt%5kg/zQq%)U&R-cyLxGOy)InQu>qlO' );
define( 'LOGGED_IN_SALT',    ',bL>]NDDwBzzOTJYiz,i!$GW((r}T{NW)RVyw<`2(^L^YUbq}&GL;a]a[h|PawRm' );
define( 'NONCE_SALT',        'y5vC.D#5OoX=I`Pp4QSner-205pJEkJ]n,vwm/vT$@J7qw=s,R?&Zq8!Bz4a7$s>' );
define( 'WP_CACHE_KEY_SALT', '8k$i<k;)}[OJ79zt$.-C(z~O CkQ n|x[j8x]t~AMg-Jn,TrMT~jfU8^<L{)(Yb>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
