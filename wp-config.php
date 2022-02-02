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
define( 'DB_NAME', 'impact_test' );

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
define( 'AUTH_KEY',         'o38H_XTx>h}z*DYEi4IV]_=nqr**t9v*Mq2[7)K<]|g=#O*G1A5@y 8z^be%OQ}Y' );
define( 'SECURE_AUTH_KEY',  'U*14i#TU<(}|`&C&AjWKr4OBLbWMAN5kn|>7J&oK6p`ecAgai@,MR^_ 8PU^AD&1' );
define( 'LOGGED_IN_KEY',    '8D|tVKRdh]=G`xQq>_Rv}$BoWTF.v;lI)~Lc5qH%;P#fFi1bf Tz^Tz@3b~t@0tQ' );
define( 'NONCE_KEY',        'mGFMv|InJL:E(]N%}^~Ll$lki&?0^5{q 5rbr~mn5M+n1~FjqtfWaL_%V Nxb)y&' );
define( 'AUTH_SALT',        'eQixGG!a]$<>Wd)^=Kf[?j3=194B-7U,W9iaC=EUqJl/j0TrW5ci$62A] >Xv$ev' );
define( 'SECURE_AUTH_SALT', 'iK)8^lV26Xq]6a$[h8E`UUE_k7,[5&i PH$[0,Z>TN`d+Zlr[WvE=U!-dlV39}nQ' );
define( 'LOGGED_IN_SALT',   'SLS/:f8;4L36Q7P[@B!GCYq=XFws7%bWQ)s^&E7]qPz6g|Vp)n^h;HZe,B=./qc[' );
define( 'NONCE_SALT',       '!sWe7ZcSPk&Bq$HGFS._H*~MkQ60xkV6*5|mw8]y<OaV(dQO?$dMi *ntLOxULf/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_imp';

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
