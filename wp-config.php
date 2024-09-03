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
define( 'DB_NAME', 'wpgit' );

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
define( 'AUTH_KEY',         '7v3j qrYUJ)4OK|>>S#9}w*/hjD0Qv4@:p2cml<ple.bC$zbTtCWk-z)#Jx,er4Y' );
define( 'SECURE_AUTH_KEY',  '<mV,_`44o{9{FZoC^?&mC6gKy8 m=crMIZEF}q+^KzXtfPk=$~=>/[X}d.bH]?mV' );
define( 'LOGGED_IN_KEY',    'S3B^E_Q?q)[`n9{j]>$Cn76Z<jen:8?(77<xoeAa!0VGR/uy)9|8j$y`DSH,C#xL' );
define( 'NONCE_KEY',        'umG%&K43=W.NiSOiB :Q F46k?$A,3X@mC^)ff>6rj~1&Pom6+uQMUDcP9dD0dOA' );
define( 'AUTH_SALT',        'Ei){ruU@hS<*H|g?8gSqExR3/v! jL/MnF4GQx61%}IQ)<H1ZK[G6DS|D=ZYV)>P' );
define( 'SECURE_AUTH_SALT', '+v}wZ^Qdj;x$zGf%U@pykm*&T|$KpRwREbi`0/;d=KE2J*0aP%LU1ub]Ax- hiDt' );
define( 'LOGGED_IN_SALT',   'Yf7jn>eU)0N&pK%}3IwhTulvPSLU,R_<dV08X~*%o7?6BuCmeZePF5i+uk+IZ5h(' );
define( 'NONCE_SALT',       'oCYp*z(nD5.@:{6Y$XYo;@(JIr)-TD@Io1H., ucWe!&+P+O`_g?D9vo N{/M<B+' );

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
