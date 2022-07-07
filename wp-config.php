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
define( 'DB_NAME', 'a0694093_app_wordpress_0' );

/** Database username */
define( 'DB_USER', 'a0694093_app_wordpress_0' );

/** Database password */
define( 'DB_PASSWORD', 'GGT5wRD61J' );

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
define( 'AUTH_KEY',         '^mGYm -av#7@GX<lkmr_ROif)6Vdett1oO-d18{#YGg@SK+M+g`|x-MN!Cs2A6*4' );
define( 'SECURE_AUTH_KEY',  'ki4%cru0e&VV4^$jXX=X;!2!qB7eB*b3q4[hXg,F<^I)jJF^>jPiFF|N]Z-U+g47' );
define( 'LOGGED_IN_KEY',    'f:}h?_*$eR1$^+M=?L,d^H Y &:GG!#JLTP&B=F`*3T,P0>{=GTK7BRA, 5dD31J' );
define( 'NONCE_KEY',        ',^J!53Z*WLcBf]rh<18t,rfVM9C#Zs9gyzxn]_#zH>FZVLl$UH794^jh^aQXSY`g' );
define( 'AUTH_SALT',        's&&XOG?Hg)t*+;#|Lsujg =KT`N5FKKf.9PFOM57p94]P<pR`lgKo!D/*ZkBC5Rg' );
define( 'SECURE_AUTH_SALT', '23ZvOYYOq.Jp_dD=]{P4_]dcpPFG;zttwdgqmb}P_/G21U]d;UCPzs[tQv8zm]kp' );
define( 'LOGGED_IN_SALT',   'z:mUi$g;QJ+!=bo$M^uq^bCR;w-(x;*))_:p+&|$(CaA$e?:-+k{)!3+rz&&9WQJ' );
define( 'NONCE_SALT',       'Bekwi /l6,u]S$EFiZm,D184k:Xn=szq9>me.rqG&Y i.ms{oT]7Trm8!E=f9f+P' );

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
