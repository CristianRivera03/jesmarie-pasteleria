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
define( 'DB_NAME', 'pasteleria_jesmarie' );

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
define( 'AUTH_KEY',         'n{p^!]qe[>+Q&f<4khi Wn5,sm|d~#^`_oRXf6#!L1[eU;.^+/NO&&PMeIP?75f|' );
define( 'SECURE_AUTH_KEY',  '^}#6F-lmzU7D9$t~{:&&?_jsL{Pfa[*-=H>24/|V;loj+j6{4Cq2yV|C}[VT(%r4' );
define( 'LOGGED_IN_KEY',    '5xj2h^D&Y[{m=UU#AbP|i7fLI{6Zq,#<}TNR4>e?r/{)zfa+o>s=b_+$IB09_;en' );
define( 'NONCE_KEY',        '7!U!|?a*V6s^OstWFhmh%}zK#@,-Bj%6_-/9_fS]QyHylN}mLh %O44OJ(GAp5QD' );
define( 'AUTH_SALT',        'cJ9W[<HI)?e!Ly_7zv)KbPnzs:vxe$1()4tD LqJStb#@[Qr5-yk.F@~D4folpOL' );
define( 'SECURE_AUTH_SALT', 'PZD-G?@j8FiRBy&f,:OGK!Y=V&J<>y_.3A>y!Tg-o/+{m eR!D7U:wC/dF#<nI|B' );
define( 'LOGGED_IN_SALT',   '~qMm|p+[}Dz=[&=F6@mB}1w.sMU!VCH)/Ku7}t@l=f1|tqvJ-Qapi9m)$#_bm#`B' );
define( 'NONCE_SALT',       '][-qL:~DItLat4:yQA5lagzl9X8[<I@p+Kz`s@,9Zs{,+bp-sf+&Rxrbhps/kWLB' );

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
