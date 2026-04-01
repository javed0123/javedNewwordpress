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
define( 'DB_NAME', 'javed_db' );

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
define( 'AUTH_KEY',         'hAKCyGRrKb4A!>R*_*S<)!y>@Yi;nKfF1#z$h}lF^*;1!HyTGBW]CE3|R[TwJvea' );
define( 'SECURE_AUTH_KEY',  '{C>k,4U{>|Qf!Ol$+XB@WaZrU?V!fq0. AeF3GhPJ,|:Ea;lxe9$fr0Y<Gw|75K,' );
define( 'LOGGED_IN_KEY',    '40/6D$#v(e}st^8]7OF^?rd)RYDwZ)168SNS[,Eg@kl}71Mn*RBZks}4;tk:J(SO' );
define( 'NONCE_KEY',        'MD!qcH$pICgdi_T 50Dx?]Y e(ZE4uI7nce~h*:p/C]l3!.$Sy4!;Wg@_E$3B9fm' );
define( 'AUTH_SALT',        'UPgCLVH(^^CBfm|O,^7Q$}Q&j/?:4_uevtG0,n4j%>hM*fM#_Y(Xi=Zk>41o|f2M' );
define( 'SECURE_AUTH_SALT', 'e-u7iZwp8o/(Ut`$E$bx.T_W-)#B}>Xkgs#-8D6`_<tF^$[}e<.csNMO*j}*cj]q' );
define( 'LOGGED_IN_SALT',   'Ke.+I@,[<TW8Q[31AcXQ$]`]5MX>]D;TW2<h;h_}XdD(j=0<lEGS~pME-L8!`vRd' );
define( 'NONCE_SALT',       'UI[vsN`r8a<`=?lG6u@qwF(Sl{#Ps,*5nIif{jJ>b4U<EgAH)o8c#~zj;^8>c$?I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
