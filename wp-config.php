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
define( 'DB_NAME', '42950646_c397971c' );

/** Database username */
define( 'DB_USER', '42950646_c397971c' );

/** Database password */
define( 'DB_PASSWORD', '#z9K,b?5' );

/** Database hostname */
define( 'DB_HOST', 'mysql8' );

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
define( 'AUTH_KEY',          'r?r<L mJ{rqp.lbsCgzQ,?SDT^}6ZR_V8lbjxl W-V{v-tN&zT)Y!VK.zjZ%]+RA' );
define( 'SECURE_AUTH_KEY',   '%z|*v+|,[Ac6* ^W[hDgoh4l*-0oI2WuYRnmvH`HL.>~~+}!~aj)F+v?#I,Cf*S.' );
define( 'LOGGED_IN_KEY',     'u<@-v]>zEV:~X%&8?O;4]= {$;%APm>1>_QKO5GAHm(Z{s+D?n(mO.{Y<R9zEu,6' );
define( 'NONCE_KEY',         'gQ_ fNEd@ eJu>[gt.A%#+97h,+M|TmA0y/qJC.Ye[svW<yR9!79ZJ:RS;sO/6UJ' );
define( 'AUTH_SALT',         'Q4IasLae{+r^OvS(`~}0ef}8#m;;18`eUSj0rBP$vS%vfQFM>o/Oqn3leYd<@7Sy' );
define( 'SECURE_AUTH_SALT',  '3s^mvqsJ.14Vgk0 tdJi_FTd+1~t$~Jy>9U2p,x!D);qK]LSd7YIF_Tph<21!#gl' );
define( 'LOGGED_IN_SALT',    '33sf]pXWOA4^R4)yAcUcu0SwZi6dN X%-PURHdr}EX8Qk]9u/;`)&MaO&!z$fT@<' );
define( 'NONCE_SALT',        '=pDs}W9iPPtIoCK&r8^z3AGXIN2!>u_ijsU2-KIo5j$;5nXFYN-J-mIQwU1!2y,$' );
define( 'WP_CACHE_KEY_SALT', 'l&n^d[|y<0g^u1T@vhjqN8&Tn7YneN6X,Vwx!+Q(0l2tH1Rm{Z{{12YgesgeP.%h' );


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
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
