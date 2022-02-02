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
define( 'DB_NAME', 'impact_test_DB' );

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
define( 'AUTH_KEY',         ']&!)Om_AsZB),?5V)ebpB?&%h5)%r-wN3}8RK`7-Np|p.Ah41!E*So$=Kkcg;2/z' );
define( 'SECURE_AUTH_KEY',  'e^9jFIzFH0)<`-j4t)T`#~g5Wrd~Q;rRzCU>A&YPwu2]Y{VBdxBwszXJsJ=3,~4i' );
define( 'LOGGED_IN_KEY',    ';z(*^:_H;Urq]l/Nu:n]$a~{6Zm^DAr8hvPw!V)}0yM<Bea(q%Xd:tziuWLb3oD(' );
define( 'NONCE_KEY',        '^}R}54A<.m44)-HX/^z*w@SydXw`{fi!vT6ea+7crZgDh82}t*lb(h7}Xi3B(F6*' );
define( 'AUTH_SALT',        'wSg6z7tDoN&8e.Civ}z3p=@hZK.a:o2<%}Qqw!%rF.x5d|Ny%L5>kaHGv{Sv[1X}' );
define( 'SECURE_AUTH_SALT', 'oNj`v_(Hc?5{v|b08wFuw%tn_{$9 Shh`YqWWcpTW4f@kM3$S3!3+*[}0ZlBk49i' );
define( 'LOGGED_IN_SALT',   '#z@#E1!qyvXdRn:7h.zb/2I[OowEtQk0)$0sHW**h/&Q959=<CPCaa8pA37W,u~D' );
define( 'NONCE_SALT',       ',XP<)!9~*[&=[$1:q`9OY+`*3,;!D%}IXb4o*[ystbK;CR+@=ozd:fn~ixb+?+{H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_impDB_';

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
