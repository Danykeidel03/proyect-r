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
define( 'DB_NAME', 'pr_bbdd' );

/** Database username */
define( 'DB_USER', 'daniPr' );

/** Database password */
define( 'DB_PASSWORD', 'localhost' );

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
define( 'AUTH_KEY',         'vJwIp^y%C+0geG47yJ,AeRtFPc.=ez(4??Y/AU+ ~vy^1KCV5~s^e:vDT}03$B60' );
define( 'SECURE_AUTH_KEY',  '.[GR!eBojVfwV0V3T?uzFZVH+SNCU-RDhg5)GpJqflbp+vI.u^^=6V*Aov?^42p]' );
define( 'LOGGED_IN_KEY',    'Qr.%BJRZ0;41,:1zz#E__bzZKG8lL:3xz}<y*FxX^3m(%&?T^u6Oz_7TA7@51U>%' );
define( 'NONCE_KEY',        'Ik%MeqOCuQGbYV:7VYBswXKC[9[iucCqBrk?5,s2Iz;.U,9}Ft>#eB|%_ljR$s:f' );
define( 'AUTH_SALT',        'g!~pgG6J!3&:IfULl=%BqYd)NxOkl<%Bf,&Wv5h99mY4}RYD~M{NZ`o5pI)R{-^|' );
define( 'SECURE_AUTH_SALT', 'j$HTUTz_I|Y*wYa$k9~Bir;hBd`ot<VCi*4n_$D9i $H!Y$<bkQ]^>wZ%7W5C+G#' );
define( 'LOGGED_IN_SALT',   'J!~bxx1nxVf~q-w#<m7S_^p*%a!sXs{n5k%wJj39ul9rKmN634Ay9~-[Fd-uI+G+' );
define( 'NONCE_SALT',       '/}D2K)NWS1!)NoA}Y!-8}C})xiR@m)U3<;$oR23!xL;4tK=w.1Q-.=m;K<c>#1(V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_usus';

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
