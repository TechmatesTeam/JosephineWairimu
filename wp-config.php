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
define( 'AUTH_KEY',          'H.^6rjy}hr{U_ZjI0`_<?`?,GalDe8s= NqQ#sCG0eEE_,EHbXe3i _~m[r}7^4a' );
define( 'SECURE_AUTH_KEY',   '6q1#C44g<)84=E?7vvx146OPU-F.wk%(#Y}C$%/+`rr}AzQ]SNf*G]<g$Gxr5Vh2' );
define( 'LOGGED_IN_KEY',     '5tRfbbKo>dQ28U{NZVFBKBC:e[fVUd,#e{g9yY^yl`-xu]Fis$ct`HZ<Z*OdjpQT' );
define( 'NONCE_KEY',         '8Zb%$Zj]78A8+fYAj4ecP@9L4B_f,r33AXB(A`NAX*7h:{erl}y&l9tz|`Yg#(-)' );
define( 'AUTH_SALT',         '*#gG3.vX8*=|$D(g5)gBx8L$b?;F g}o2D5 q0p;v);unucUd++j>^0bd>NXmvEV' );
define( 'SECURE_AUTH_SALT',  'm(QF&nLa<)^5eF!)I3Z(p}1<f}dH1~[Y:M!/X/~l{}kK-Il$H>wjC@Bta([E|*V<' );
define( 'LOGGED_IN_SALT',    '&W 0<;MLO55aL&B$k`}xw}`ysR`wn$kJP5;+(OgSkWaT3>MLuzJXLfja#6<YMo&?' );
define( 'NONCE_SALT',        'Wa1NM{SYrrROK16$jYeH3I+^jV7aBK^y2zr.^>H!Ml^L<1AY~+dv1 jgwkE_Iq]D' );
define( 'WP_CACHE_KEY_SALT', '.;fEx:gz7(Ld42#Hh-+i>p9*$hDYe[H%0rV/~+pBp[ru>p,Gjq d!KB{X.|%@;$D' );


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
