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
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'wordpress' );
define( 'DB_HOST', 'database' );
define( 'DB_CHARSET', 'utf8mb4' );
define('DB_COLLATE', '');

define('WP_HOME', "https://learn-css.lndo.site");
define('WP_SITEURL', "https://learn-css.lndo.site");

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

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
define( 'AUTH_KEY',         ']vb?r%C|cI;[zQt#F^cInsQG8t: b#~/TR|:VC<D{G r6CZ}-~&Y7Xz9KB%n`b:(' );
define( 'SECURE_AUTH_KEY',  '6E:!jR=X~gmR~f7XbVZK(VU1[cZ[vE;/Y}&c_FK$gu86M#6S-P5r{u3|_ xail.(' );
define( 'LOGGED_IN_KEY',    '=pcOgP/;tuN%<]})foZds`Lyr)~dktA*uD1yMFuW|Yq$AD1*v+;CU3n2IhXc-([5' );
define( 'NONCE_KEY',        '0Bo:r{=Q$6GUp;w9}TCj~~~8ojuB)OlCuP{g^+JwB3#x;|A|]iDT ]Pc..@fNi. ' );
define( 'AUTH_SALT',        'VoL{.3ucNa{E3FJW<pAH1:K4K^[M%4w5wS7W$|KiCEOE(19!e>0v)Vm99loR~$<M' );
define( 'SECURE_AUTH_SALT', '%d%:@u+5SpxW{ECK+qc`e:>Fw$&}>s#FIZ_N`W-^ke,x DL.@SXVWYy_;Me;;j25' );
define( 'LOGGED_IN_SALT',   '%!Wc)5N|o:#|(nkH9Y,c~DS?/&%NQiVn&`=EwcG3KEo;?Ztv.9,F#%UpIJJDaCGt' );
define( 'NONCE_SALT',       '!ZyS3R0:HOqVl+qet}TOCM(BA*]A`giv=xV&KH*5qebV/2{>M{j|Xr-H1v&uOaWj' );

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
