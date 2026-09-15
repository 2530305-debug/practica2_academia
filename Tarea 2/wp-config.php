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
define( 'DB_NAME', 'Pasteleria' );

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
define( 'AUTH_KEY',         'v=cWgLGdg-cK9.JDt=WaMo+cXeI.=6yiz=]f}/ uWEr.0|s1:(`.OK6+~]2_ly3g' );
define( 'SECURE_AUTH_KEY',  '{L$9k+fvK+<jpZ7d3l6$yEWms9FTyRL5h3kRC0=Ml@)RVXV.R]=d]=0BW,tF]7~M' );
define( 'LOGGED_IN_KEY',    'r,Au{K}4hV2-5s<;G>&KCGc,Iyy*_)(0jTT-ZqVp7))r&MCg,} p@w93;.~9~v$O' );
define( 'NONCE_KEY',        'ynu*Rq.>=QE3}Fh(CLO<8AyPK 4E<*e)]`G8Zk8rR^!m-Ni9+DG.H1v1Y%m5k[~[' );
define( 'AUTH_SALT',        'F>v1<#H.[t!qe:be@5Se]?8)pX@;E!3bsiTYE(M#$)AB-:pEjrfSzOR !{Xep(eb' );
define( 'SECURE_AUTH_SALT', '|77~fPGqv*>3QgLhDf$a4x4:d(OL$}{`-o3hvgf=X[%26psg~Ho=dw7M,b8Nl~TK' );
define( 'LOGGED_IN_SALT',   'Q.bo~btT@CCKD-w[uo0Z_vaW^2M@ur^K@(|i_yT|^Zr)AXR|(Q%b=oD()tsU>YPB' );
define( 'NONCE_SALT',       'Xjo@up$Kx*3@VI`f?Kyx9zl0S*El>X;p@p@/9yG*-6qH&ad10hqBX[/iv;? eYMY' );

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
