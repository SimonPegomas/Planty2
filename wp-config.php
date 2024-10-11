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
define( 'DB_NAME', 'planty2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#2s(Sg#dP4}#^wNJ|swDK;zN RM7h)1t1{8x$QpQQy&&w?%uA;Om]~gk=BreaC7}' );
define( 'SECURE_AUTH_KEY',  'R<<u@.ef|@u6I;rbbzVmC|U:jkTyjYTEIm(!!*CHP1*cO%$YKQFKBX`C%@E&*K3Q' );
define( 'LOGGED_IN_KEY',    'O=@d1R*/IIBqRZ62-t1k5ygYw`d;R(^oA0VU|1%~=ZVIBu@Flf,?@fKE0L@|g74;' );
define( 'NONCE_KEY',        'z(<YHq}Zx0O.xi,Rm$2m>LJE4=UJjK*! s&82m~Ym.YA;|pWa}^G)1M{yW!/U=x!' );
define( 'AUTH_SALT',        '>QGbaEw|Gw 2+I/*jNauD(1%v4P5Q36?3,p .Y`v k^Ou<tGh)|<+a&`kI?Cp[<@' );
define( 'SECURE_AUTH_SALT', '^D1?qvK:*.4KSH+4OX-Eld-T-vxr@>M@f S-P>(?LSc{CeH/$F7h+5%1P_1Sc@xB' );
define( 'LOGGED_IN_SALT',   'YQmLNKINYaaI~8P*=D0gUk?|yQ];yY{jrhdn}P^?M}q=}|U7T!)hA Z*)zD#OU+j' );
define( 'NONCE_SALT',       '2XL[q>:77eI2-|Qct!`Fl~h59`1MpO)%iP`xHksKjYl%DGU_DMY1P$=j`#`Qe$vZ' );

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
