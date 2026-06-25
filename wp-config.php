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
define( 'DB_NAME', 'goftarshiva' );

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
define( 'AUTH_KEY',         '::Dy/H7rkG{%%F%ckG7w,zgVKcn~U!Y--6Pzuubj.^%A;uM<2?LB.U&m~:M~;?UV' );
define( 'SECURE_AUTH_KEY',  '+`me*+_V4 y]3_Z+8o*w(p3._7G_ZnXpnL$q5yan}h,HUeL,1}o[:]4j=I>DKY7.' );
define( 'LOGGED_IN_KEY',    'r4cc Cd am.Wf)3l7T4wd!ZaN8llvaxl6vMy4:NXXm3^~ w5V$oM++@r&nm/>)r+' );
define( 'NONCE_KEY',        ',Ef:I.ELyF_mQ}u0,1e2rba*vkoDy`1O3eIs]`2Tl(C=)-(GzZ:r;%bEYxna{q@7' );
define( 'AUTH_SALT',        'QB=%vW/[A(e0ue+aIB7jA<`v%iCyhUtU~rZG5&;M1$Jb>;lx=Q1}#_k?nCV-d~+,' );
define( 'SECURE_AUTH_SALT', '=d+O2gr*]zw~s3NCZ!1+JBJJQcfIllU|^Hxej <R6b`@qG6<4j$BL8/X]c~AipNL' );
define( 'LOGGED_IN_SALT',   'ZU[]~I2 J=tRB,9h`N&(C*y_K,dDfbEU(Bi45ayg/Z<-.#%].R:t3f!xq)u<?H,+' );
define( 'NONCE_SALT',       'Q%QQc.]?k3FA?i 8I7Bd{Pk =neLkwtd.|#J! r>,@}$?,qt <VMx+NZQkM20h7c' );

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
