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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         '^oZw9:/PJoiMjOD|4]X :J0a%NzMymI![+j3>v)4Ib4(7#j7w45@s689&>_NYec;' );
define( 'SECURE_AUTH_KEY',  ' ?1D8CqFP{I7ci|]pK{/Mj ~n:&{h6(P4t7&1m.j@I8JR,bm0nwvCduS{L|?-(72' );
define( 'LOGGED_IN_KEY',    'r:Zu/`OjZ8hedTY+[~AFtQ8ofsUO5 /JRk^;cYWd7^f8~<A6`%uJ2ss]Y*Jz o<9' );
define( 'NONCE_KEY',        '<{AWq=KEXXHv1?pc0--l+>3N`&(6qStfl[fSY3MxwSUr0VX E1vQ,Lv`}I/vy4bA' );
define( 'AUTH_SALT',        '<:/XA$nNR|.jfGE#MXuCyIw:TRC^LR;K.v2!2qvIT3JpDYYx8Ehl?q<;mibt^;$M' );
define( 'SECURE_AUTH_SALT', '^bN0X)gE5ZY=WGNB4BqU!33,PSY;_.${$7&:U7px`eUpIn@%YX*=X?@*NEIk,]>l' );
define( 'LOGGED_IN_SALT',   'K@e&ZkT;NY@wEU0=/q?)g,4*WNVqAAEC],cPB;T)WOiLyN1!It9E*,1a+,}@taf:' );
define( 'NONCE_SALT',       '*zeDt^O$/T#YH pSLY[U#31CT,LBr{`A X;M#kFVT:kqxFb6m@Y]R8B1Fbu`y|xR' );

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
