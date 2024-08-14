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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kenprohosting' );

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
define( 'AUTH_KEY',         'y|k@rVb_4)41@7W#i6q_dgzPv/vU#aFS<L$RHW)YP/oucQ>gk22Bq!%$DErX}56D' );
define( 'SECURE_AUTH_KEY',  '}mT$I7*ghBXAr`6{M?DQp=59 -1&~tm1,U:6]#rP`)2dW]GCFQs&9k>_vEwcNz~,' );
define( 'LOGGED_IN_KEY',    'j9]{qMjD&km-/8HnnyBD=vp>0Lvw(0-aGFGa?+<K(eW4DXZ@_.r&NGKJW|)tbJs@' );
define( 'NONCE_KEY',        'l7s[|]=c0dEq*DI7(h|KD_DS1dA(t{~QZ>J=3~9b_hd:9!Q5fs4A>R+Y~?O%iKlH' );
define( 'AUTH_SALT',        '=zJE0t*/eCh;4nfqEm1&bfVg_k?7D)|qWN==x[`(]NxGWosbrGU-LJz&#A}ROEw^' );
define( 'SECURE_AUTH_SALT', 'ECXunG^3S*P& Bq+hYes%u`2Hqt5SG@V/9:4f;NIo%D`e*/SsoQ2mb19V4H QLz(' );
define( 'LOGGED_IN_SALT',   'O/92%1NKuNA(i2=-1p*zM=/<Rht-i1++_s7f2a]c[no3dKFLhDne8<G~Z~B*fD>P' );
define( 'NONCE_SALT',       'E}s^:8gGa:4Wp,jBI82U::9rBcN5(A/Y ]r|VCL.C}}uBnh=)KlvE+^xV}ba((.p' );

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
