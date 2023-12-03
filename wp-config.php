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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'yfa`]z3=AxEp5^37^900NiVyXl$ibs~y$P(asG{ZD`2n[j+TFb)^VMVj?Y.G6j8)' );
define( 'SECURE_AUTH_KEY',  '6;76@x!=ip41|tLh|x&W.kK|`OY4IUOt%wGS>{,MJDq>P-VR^jpD9+^=efKw)fV+' );
define( 'LOGGED_IN_KEY',    'Qv<rIArzhMH.aw31Rz>|`5o}$AQ{]qEt(Ws5n;C8!jIM#<Qs3n+Px4`=t-OJ:us.' );
define( 'NONCE_KEY',        '$0r<NG::#Jkp<y$p36qwpMoc~aU:=wB#eXaca+=yhIp.Bo,W nv}x2)PxG))X?Z0' );
define( 'AUTH_SALT',        'K$ZN?ov16ya<~XqnQFu_`F4X/$ib sn,-!kpb5ob66l00sI_HFsB c|xqE{#U#~*' );
define( 'SECURE_AUTH_SALT', 'G[/8iBcClc+T,12bXlRrED8@;(4!+,EyzaayGQ0x3AMNSYS-%$mYX%2!7}%WbLK4' );
define( 'LOGGED_IN_SALT',   '%#kUNIHXcemd#$m?XTjAY&jIb51n9VDQNIS-LPF7ya~|){*h/vC`%k7Y1asuSm_$' );
define( 'NONCE_SALT',       '&#jhqB(1uXPj0gI1u%Q4Mm<U=YY|=Te 0|)4~h<rM4])a,pxg3j=vv!*YZ_UlA94' );

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
