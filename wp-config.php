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
define( 'AUTH_KEY',          '?1EHegT5C!wY`zD4o{!ddI dA1Sw[+mtO{<nY>5~7PI{E_0Gt)zPw8;]9%-yhX!0' );
define( 'SECURE_AUTH_KEY',   ':c.:#Nj|Cx tDYQVbFH$8!OG&l{;3>IT*t6[1B: gs>9sVH{:L;(*}H#(y7~!!l.' );
define( 'LOGGED_IN_KEY',     '$*igsg^;+yzSHuN4oD)733!hsJ kB!;d!8K3XEooh&;oKnFZmCk!R]^zW%!2|ik:' );
define( 'NONCE_KEY',         'nrqoVPR}uLL5i9`=_jj+n]YGpm)3MP;6d3XCd54={E0?XI8[]#zdX9:p8s2Ub)C2' );
define( 'AUTH_SALT',         '>Mv;B`:T^rr]eD|OSul_*r%Q<L?_V}rl.oPM_baFIP@&(6kuFRI ~_?o+ENmyB$o' );
define( 'SECURE_AUTH_SALT',  'akt|)?c*RU|ts^|k0.<0+q6|ub(yKazW/:YVX8dGh1n[29UOQVaF,(o5q[hLSp~M' );
define( 'LOGGED_IN_SALT',    '%T9zjI$H3fv%54dF&%LP!yWL+`aCt9rbN02CCL]3Ih,:X:`RVjMYdmQSJD<1>RHL' );
define( 'NONCE_SALT',        'Y%Y0VhMy/=6b9pQ[k/1Y 0r!5)Rh&RU:*HL6P6acyYXMJ^09_RSoI/Hy~`@t_iJ1' );
define( 'WP_CACHE_KEY_SALT', 'D,+qRBxBRFC5b:G-9X6BOkPq=|479%Bzf<0LG#Mv5%6Sm&j#X{H!tkqR_IfsONYD' );


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
