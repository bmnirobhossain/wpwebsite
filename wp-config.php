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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         'rDD(N@|;y<6qbfdtGZT98oYPBaf^iw,X&-=9yZ{):D5-Z6m3RIUFV%?[XUSG!Hp&' );
define( 'SECURE_AUTH_KEY',  ')x&4q%$~{4z|5V|9E2l (-j!,{B:x}+y%H23Qg;Ap{A.{3bfKD[2K%oeb!1xcHtm' );
define( 'LOGGED_IN_KEY',    'T+_5*Lgv83TC&)%3/9]jxx$@<ZTMhk,%V&z0RsX4]W7 #9[K[|gY2j*:n-6`KXu#' );
define( 'NONCE_KEY',        'rhU08&#zvD&DSE`CCxpy wmuf70OJcBE]Zp}J0DPe/ID2S:-zqkZ6<_,+xFd89E:' );
define( 'AUTH_SALT',        'B,jI9_ueiv?f)tXsV*+MgV))MT>!D5<bHop21#]^ql|L#T`0ve}:rBcY`#[`I[%S' );
define( 'SECURE_AUTH_SALT', 'e`;VpARm-/4&5lD/eb*#M~z.P<G<oNuiC0MPfZ[JjDUu-E_6]oigf`[U-t_x&4<:' );
define( 'LOGGED_IN_SALT',   '&X,t~t74%8y(tB9RX8pqsj)*/5&mX+L>vhv8v8iyj/f;BHqytxIFW`zv[nNa^gjP' );
define( 'NONCE_SALT',       '#/6SkE[fO3=Svk& 1$eSIaTKJy!-`n|*(+v2nvmGtg|jk5};[3Icp?-@e@sq)*NZ' );

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
