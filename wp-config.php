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
define( 'DB_NAME', 'db_undangan' );

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
define( 'AUTH_KEY',         '@7E#1C:b(OpHJf32a_F.PnQWrz#9Y]eBpYKr#?AelPL<A<xiP=lC- *!i<?$^K-m' );
define( 'SECURE_AUTH_KEY',  'w1USr8j?MQ~g;5HZ@78+:faKr.%w`ng#8qLj^61MxKsL*6)gh<a<v5Xr4Jn]ty$.' );
define( 'LOGGED_IN_KEY',    '[j(KBetJOz1G5#p{UhXQ66~2X{7{m23aR_FfX7na<Z-KY=L~QUl+^!;os>k.~OL%' );
define( 'NONCE_KEY',        'J$B#O5Dlvurh]Hk4d@#w!D_Q!C+BC3b5.<EW[^iDK>m&[JJZY_,Xcz{)rZlsO6DV' );
define( 'AUTH_SALT',        'ATy4o^t{0MWVvpQXrj01[1#A-n3jPPA[kfcJoYnPGh<{`XD~!K0>%>)G[VeA574E' );
define( 'SECURE_AUTH_SALT', 'XBID%zcDzBdk,q/Xyh*O`_<eS25X.8d@dI{H ;P|j^2pC.5%O%;gfv5#8Qof(y^%' );
define( 'LOGGED_IN_SALT',   '|Ti!-5pm|y*{P@(Z5yr:f;pJ>_>Ug^CrBWBy*q_nBDhKN@U&Ld/DGYu83n0mK?Wn' );
define( 'NONCE_SALT',       'uU(TDAI#]fbV%oH,%5;umB1i)#Mc]kbJLhbzi<r;%YtAM:V_E;+8|;@O1@GCEyCm' );

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

// define('WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST']."/undangan/");
// define('WP_SITEURL', 'http://127.0.0.1/undangan/');
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'FS_METHOD', 'direct' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
