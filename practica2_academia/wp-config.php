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
define( 'DB_NAME', 'wordpress_academia' );

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
define( 'AUTH_KEY',         'Sy@96!yDfX`B{fD@0<EvZ(D*HQfC$Q8NlS$vs7ku>TmCq[!<@PVu=`@KVHhyvK,]' );
define( 'SECURE_AUTH_KEY',  '//zJK3ov-JF^eLlz.<B?Jk|BjCxS(Lfw9{vE>~$16,1p[VAh[=T[qwUz1Bf_1Cr.' );
define( 'LOGGED_IN_KEY',    '1`8_Um)Rf!ak&oV;i?Y%>/?WQhfoD(J^,:FdqT^F)oU!b]P!)jzKuxT+S!1|gm{?' );
define( 'NONCE_KEY',        '. 05(^=~.-Y!a?mRLx,a-rhgZUi.0~dcQkWA?!Q7X-%DkWi BD;Up,:{0OQ.!R*+' );
define( 'AUTH_SALT',        'v6@;`$5.Yd^p74X%P*7) J[u^4Kz.yG@?2g^K=PMRwdWf)Ey>|j08[9#aqx@m*y{' );
define( 'SECURE_AUTH_SALT', 'Rsc_R4l-!%a9n}D[O[UpQ5NYb2i)XHt?}(9E!=o)_GEYP3u334J>a: +}^|dKrn@' );
define( 'LOGGED_IN_SALT',   'hl#lp(=@]l?oxt2EEu~jl1wy%aURN:ix B-)UG7YEe;]0,XCgiyE=WmTlVz;;;+J' );
define( 'NONCE_SALT',       'S1gL,RpQN5{6DY<,75UdMs@arWv5*6MF1hX/TdiPBA*ZzfY8RS14xH=eZrFDZcW:' );

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
