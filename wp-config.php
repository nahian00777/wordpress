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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AVJ}($?C8tycD.J@eoHtQtjX2QzSAn@bkj5Ug#&?O8AC_6t0<H|lH+sUall,%|Ye' );
define( 'SECURE_AUTH_KEY',  '^1>+6A5*:n3JXE+-4K+ic^n@RUZ)9Sf^Qm4s!8K( eKT9<4+6Rk7a|qpD62g[o|@' );
define( 'LOGGED_IN_KEY',    'bCW6[LR4MQG`Ocg{hR}$SB1#gN~=(a&=)MKbH~hief/OD,+Gs]g>9$.rX,EGS|2-' );
define( 'NONCE_KEY',        'qm+f>F@hw8[^|Ta{]Z+Ied&QqHoJb,.o?!>yAr/HFz$_XyyN76>]KL*g^Y6p-8`b' );
define( 'AUTH_SALT',        'KEY<?8%(~FH{=uU6M]]5C#i=UP$/@mKAFV5^-#e&[>>I)QoLOq*2(bwa@?,>-pPR' );
define( 'SECURE_AUTH_SALT', 'w<.&c:tGa3)7j8Xz3l#T&BTf)NK/XZ5YfVHZ7T8Y_`IQCmk&VdV0D)Ry5mFPDFP%' );
define( 'LOGGED_IN_SALT',   'I1K_&/q9+:<Y.]#x/oK8GkR!u^~`Rmv_)t[/@&qbY!y[MGoe$wu{%N d21/*-UV*' );
define( 'NONCE_SALT',       'Dk)#8CkdKC-Z=G1h71Jg}n`>gcgx?mV=QCUF.t}{:O5XzdH}^|l`HcBgX[1-^k0$' );

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
