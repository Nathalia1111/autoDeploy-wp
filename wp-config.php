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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if($_SERVER('SERVER_NAME') == "//autodeploy.local/"){
	define( 'DB_NAME', 'local' );
	
	/** Database username */
	define( 'DB_USER', 'root' );
	
	/** Database password */
	define( 'DB_PASSWORD', 'root' );
	
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
	
	/** Database charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );
	
	/** The database collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
} else{
	define( 'DB_NAME', 'nathaliawd_comseptember' );
	
	/** Database username */
	define( 'DB_USER', 'nathaliawd_comseptember' );
	
	/** Database password */
	define( 'DB_PASSWORD', 'september' );
	
	/** Database hostname */
	define( 'DB_HOST', 'nathaliawd.com.mysql' );
}

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
define( 'AUTH_KEY',          '(;)^(V{$~.#X.$NbH[$V/SXR;q_WS}mJph-*(ypGQQ&tVu=Q/_@<F|kb{T9,mb*%' );
define( 'SECURE_AUTH_KEY',   'M@x~m_]PD?6^uF1Pc^k2Gdt!]I?@P; !d&yngfFV;JyGk6ec: MOB;k[P>%bH>Hd' );
define( 'LOGGED_IN_KEY',     '<.Ox1TQ]U];pdYO<n:<qzH4WB 3A(?cIS;%z*2wWw#3<<HZ/)j9rWwDhBlUcfdp`' );
define( 'NONCE_KEY',         '_e4tWY <#_1V+leM#)S9k{Lcrx?0DSc0msyg]pi(W{G+Wn+QZx3+j.ah68mw}(=-' );
define( 'AUTH_SALT',         '[;xSBp*o@1_TP.]I}Krf Za1K?M:KL>`OK%7$132$aF689F0hf[(Ap5KVt4~}y^7' );
define( 'SECURE_AUTH_SALT',  'r|yoc~ rNu;S,sm_lGO~:A=4FCWuP,4/? 8Vv~YhGIy6V+N/,!R?d04kG^%r<R;j' );
define( 'LOGGED_IN_SALT',    '%W{D4BX7/+9Yy5o`a67N$kGQTE:Eq^iVPz?np F]x+GCp:Rnq?@AeWl_&]t>[B24' );
define( 'NONCE_SALT',        '!qvcN.$&kUY%LmmDFhT]H$t=(]GxJt#Fz2dc|X@g3S$-IHmsl!R$Q>qMT_;JthPK' );
define( 'WP_CACHE_KEY_SALT', '44 i.FT:@``P~#SGtq{;kq}r2[Im>7|%^^oCY6(%p_NlOFes)epIio/g9NYVfJ`9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
