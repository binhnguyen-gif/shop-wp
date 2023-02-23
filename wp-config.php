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
define( 'DB_NAME', 'shop-wp' );

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
define( 'AUTH_KEY',         '&V>;lV};1kC 3*c`]gBsE-I)E5#)=bh+AQ[|?!g N[}kvw!Tj<Z<<#^Rk`VntE3C' );
define( 'SECURE_AUTH_KEY',  'R@^L+Pf7KPmuh[!y5$ziZD+}Iu);K9S4v_%GkRiH+;/Gd!!dZCXlr~>tW#WxT%[-' );
define( 'LOGGED_IN_KEY',    'iTo?p=[}MhuZj!R;QF_,Zybfwef1o|9#}G;kJC%T-(4Yuj 7p)vf&5~~,qI7r5KA' );
define( 'NONCE_KEY',        's{1Q7.EoQXENa;gsj`oJ;I8H~k15)QgX#?ZSc-i?P!HG%#l[!t[+Y0zk&i)avCA=' );
define( 'AUTH_SALT',        'XGS`6S#CIC*=6w]&^Z`ah6VUc 5?t4II}+L~J:g;8uBADayPUxZ_(WbR){f!68Vr' );
define( 'SECURE_AUTH_SALT', ']JNiH-RJ!,5j[<Arkk+h~r??jf :c{b#$FG_ED%Rs9PVSMI`9Bp6W:w]k8k2px.S' );
define( 'LOGGED_IN_SALT',   '-1!>a/R]/kXb6Z-uzNWq!Iv<Xz/OxKY:u!ZfQtLJqQe^.Cc,16]}ei !i `y}]en' );
define( 'NONCE_SALT',       '=$@l6eX=%?ba% MlIX(cW)St&Gnd9K#M4d1:T/zxJ:h-JCV}`RI4,Q)EnJwpb8+l' );

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
