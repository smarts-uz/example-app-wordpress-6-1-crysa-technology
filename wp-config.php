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
define( 'DB_NAME', 'wordpress-sample' );

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
define( 'AUTH_KEY',         'VBietP{p$WO;_FK%bEB1,Fu6S~3PX[BuWPn#[G5H(~,M>DcFb+NJ@ &2GKV- }~<' );
define( 'SECURE_AUTH_KEY',  '2GK##I%0>Dj{NS3XF35zuZASOPn}*jINZV@YLd3RKMf?M]<YR;3DK[gy5.AN9eO.' );
define( 'LOGGED_IN_KEY',    'B]%*=,#|E=&wr&E@7SVa;s)-nU>5%4,/f~M;a(x;?cd<_@D#i{MS*RnRD)`[C:b`' );
define( 'NONCE_KEY',        '33(KZ__JT-o c:7(#@^22QNO//~nq3@7iubu:%F>Z*$-5#T8u#hd,!%5ui;L>k|z' );
define( 'AUTH_SALT',        '`T[ |}1;ti.e#>4@}osj~TuDxmj^/:)S(10+.$WJslQMY=E$[oqepaSqWAiHhw<q' );
define( 'SECURE_AUTH_SALT', 'B-&f>ceCo2&9pP>}LxWkeT(<Ci]n#Z]v4Hd;Sx-_BE99;T~bnp#zQ~8zKsTnOrOz' );
define( 'LOGGED_IN_SALT',   'cTKif}*f2gyGR3wq*-CpqBvC9o`rOYFt;SL&Y,t/*jKg>N==-S?B C%@Rv.z7Nv@' );
define( 'NONCE_SALT',       '&G?^? -*/Nf_=2.3|>Tiw-<SC&GGOD<C>CrayVGN6X~`|=9>M?%Vxt#t8]z+cwYs' );

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
