<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[6*RbhiB7B}9*9aI`WnTUxAcXSL>j.ph )ddD*03LY^$sD@Qaq%}<W$Mu8UeiZKj' );
define( 'SECURE_AUTH_KEY',  '3G:hoaZSc/%%;T{I{62|H.s=/-4]u-t^y!kq,E -5!~Xj%|P#YX: :H-04~Pz5[8' );
define( 'LOGGED_IN_KEY',    'mL%Kl/~%iivPk_M`M=PUxA^53og7k:&rb#wICh18pl.b|<oHaS P(Kf<`45A@BYx' );
define( 'NONCE_KEY',        'Q||M_y(K6|;h`Cg;#*oKA@3E= KfBdbyUl{s{My&_^ka#nqRl)}%lK~-5e!)IG!`' );
define( 'AUTH_SALT',        'ND4e:!.{K;.UyW-=MS={f&CuyEL.^p12/QI0|u~^iUI@rPfdEl8gwZi0`r{O%9t3' );
define( 'SECURE_AUTH_SALT', '~KsH+Scpr|8okBm6~u:2?W=eqTE+S&ZtH+oXwjZ a;)#M6cZr)ARet$U0{6NLZ]G' );
define( 'LOGGED_IN_SALT',   '}>&,Yj3Ac@4!;iR6piJd4fnf)x1VyQ=>F&<+7n!d.yBgfXbq[HsYh(5g4lejL4W&' );
define( 'NONCE_SALT',       'r.Xk*I>y3INcl:i(&$iZ13;Q$evYmRSXadbzLx&rb5 #}-d.CFGuV{^7Ih6h*riU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
