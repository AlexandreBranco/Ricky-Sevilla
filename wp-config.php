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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rickysevilla' );

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
define( 'AUTH_KEY',         'C/(9,dA$JCKd!Ze N&?3b%WC:&B5<A4HE,%dr tu$@=](<{3a;zS7OV2Jdu%Z_%0' );
define( 'SECURE_AUTH_KEY',  'FXN`+Y2|Zikm(sp mzd .Vqi8;rUw)|,?T R1N^GNSJz6KN%XTQw*Y9vy5&C{a;N' );
define( 'LOGGED_IN_KEY',    '|)U~]3k%N}90tS<Wd_vMm{G B#KzF/q1!keGyg2mmh}#KF#!$_V{0clefnB-Gm8!' );
define( 'NONCE_KEY',        'EqYB0*> u&K3>=*D|wM*rnK}h>?jI&C3N,2Q|Qd&pmZ^G{iu^5XMN8-+xZ%KqP=V' );
define( 'AUTH_SALT',        'vVLC;;2QVJ?_CkvN.Mk/;$G<7xgJ$wiR)y37L56m$Ips]pp[lwqO(S|enSbIU(Fs' );
define( 'SECURE_AUTH_SALT', '}7Vwq`v~-_51jFA4KUM;7W,5b@CmIIExK(gFXIVa2CPi-A5Uad44K8@|pwa+A@tO' );
define( 'LOGGED_IN_SALT',   '2^2vr9F%f9*1B>vwo&2:%kpnRyp#~$foI%/lE}J!@tH9xK$gjQ,4x*h[-,u,ju2G' );
define( 'NONCE_SALT',       ';57U%Nr,sth/f?:=k=gO*L_N3Jx_*_F|&OX0q)8Kq,GQnSb%%3,k@-)AzmO?4j!,' );

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
