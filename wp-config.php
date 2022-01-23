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
define( 'DB_NAME', 'techniti_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')tV]HA~%GoY$^ED*5=FhI>A(QfJ@*>w)YUii+djgCAN-Sp_:|u@Yjt(eN{sQG)D0' );
define( 'SECURE_AUTH_KEY',  '& L,C_ N$N7V*w[t7n@qvZwtS3G74w<?B%+D_2Cp2[Nrmy!)5IHS|8JXcv-<oVSi' );
define( 'LOGGED_IN_KEY',    '}Y?Xela?xx5kc9dUcI&1*GgkA(Q&8A5dY2x$GVXD<feFw0epD H#NNTWHG:|457G' );
define( 'NONCE_KEY',        'fPCrGB*MHAalPssS:dM<~rO.K,0TNTO:dH@B*~*pcuc_q^7f,8>|.VBN^gb(a<rn' );
define( 'AUTH_SALT',        '-ScmcznzS2-M/pSf3xLc d-}IIR{wu[=c Y xfdh/R_KJZ-IMdRkJjmPk,s^W~?A' );
define( 'SECURE_AUTH_SALT', 'K8;(X cZDOU O{Y-l%/V)1 wEY>*|d+GF(,1ydM;H@>45]R<VC//>SSKG&*DasA_' );
define( 'LOGGED_IN_SALT',   '7[15:AQh[*,^?]sL~~1.1Md lZJ&N[Ca~^3ZI%0V+nl)p.K*0=a_/M 2BA;}oVPj' );
define( 'NONCE_SALT',       ';+dpJKDOv#3XS22@M,{&bbX[O@9.{h-A1toJTPkI~I*]0_mm}2h%blDcgGEv>;i^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
