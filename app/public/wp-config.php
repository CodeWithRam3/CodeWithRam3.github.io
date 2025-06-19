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
define( 'AUTH_KEY',          'vpU3_vt=PXZen<d_3`_P/S`MhLU<5iKS`j2Vg6INvBkw0>WgyXCC|>g5*3dv`RhI' );
define( 'SECURE_AUTH_KEY',   's]Agw!0Y`sDt_jFO Qj6sEqPXmmppv/DZ(TTBF=qI~%w_i8m?%s 1Y4c@Y;Im?pw' );
define( 'LOGGED_IN_KEY',     ',@H)BE#^g^R l<z}Gz1~NaIg8YzvDqii?*N^`s+KrZcJ:zireQ=( ]oXrnf5dmBe' );
define( 'NONCE_KEY',         'K=A9kn,F[xj7S%.=.7%+t^s#!Z:]v@1&F7LgUFs!SGCu24a9`^-T07Kll((xOAN!' );
define( 'AUTH_SALT',         '6**{`&zD^[qMAAm`ck?18*NH+:hwH`NH:~5_NA)~niG&$r(E%N`;TGcu&xYLW<va' );
define( 'SECURE_AUTH_SALT',  '1sOcxL2t%+!oitGlhnr1g%`avFOV>^/R(enrmz0!Q}1T@x(F;%o6al.NxQv|<!?F' );
define( 'LOGGED_IN_SALT',    'm9}0.>jaq:en-15o0C5TvCY0/At03W-[>/v4*Jw%jO:q$buC^Or`K/18L[WRgsXd' );
define( 'NONCE_SALT',        'z(sXuS!{|jJXxMh]pXPIbmu~E:^6Wp>1*|2.rBc/7c>XN RP6Vg+*@:WFsZZbjFS' );
define( 'WP_CACHE_KEY_SALT', '!NSWKZWL<F@3hXR?,)+w;3]`M!Y:Bt;L,jm%GcEI=&@PlSWp~gl~SVFEU&ch-bzR' );


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
