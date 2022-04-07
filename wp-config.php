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
define( 'DB_NAME', 'wasla_db' );

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
define( 'AUTH_KEY',         '&c1>y*anzr{E0h@=Mh#8Sm=xoIi]7#B91+6}*m0N=/vM+4)K@uJ}QvyidEBXPV#Y' );
define( 'SECURE_AUTH_KEY',  'u*;QJ;+>[}8?:O4$fc/55,/e0*bDN)JlEon;_rg#+D*N/w&+epf{;{N*A~d!]~Ok' );
define( 'LOGGED_IN_KEY',    'wYj-@#toD^vL4E$W 7@1VjP9[g$Vc9jnk(Ojrk7s7y[X$YTmdDBH}^3(J:_TGo~ ' );
define( 'NONCE_KEY',        '[jq])*Y;GyRb:{FcBb.X{Np~=C4$],yy}PN?iI#odQpHwwWxf _e;+xf}V8S7WER' );
define( 'AUTH_SALT',        '+7eae>K!C;gq9-(=BikDQKBq)voqik:NMty>b~[9z6sX5d7pmCyl!HH(uPBep_T/' );
define( 'SECURE_AUTH_SALT', '0r<?d+^G{o.6yd@-3H~r75m,,2fXn1zb<h;g4;:.25O5W#<+Qm1[YfyQ3]Y*n2u@' );
define( 'LOGGED_IN_SALT',   ';T. Fe:@g`&Su~d/z(EyV`?QeY>lsNU+UDXn9(dcYUOe7O4I{}Ctt)Gaum>Va.O|' );
define( 'NONCE_SALT',       'J/JfAV.YTLn|oqqROp%?f]u@KL9R;t<;-Zf@ -dd%]OwnHcWt6)$} VcwcRVR>f8' );

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
