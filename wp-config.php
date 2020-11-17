<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tubero' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' CB;RGK|.,4!3$g>]5<frovga}=s!Oq:qM-k{i9?#P/e4V=vO^rV5oxQ6Bw*~|JT' );
define( 'SECURE_AUTH_KEY',  'bEnlPRI?PY7{l&?~]mv`vtODCHgB3)M.k/;M:h*uAruwGXEHFTA/AnKT4yKXLZkn' );
define( 'LOGGED_IN_KEY',    '_LT_/.l!TS*+V8;BdFH|f-Tw >T)S`rjV[n^Ds5WK8|eLz<}>I?an V@2$e5i5o5' );
define( 'NONCE_KEY',        '1V%P6DqN[ca?&^<a`os}5]H0 SoaI-o;G*v,!~USn&Q6n:ZeMHbuz@6ya@ubezx}' );
define( 'AUTH_SALT',        '^$0@P)Uj~BL]>?Y4_r7`mN?y!9>3`!wpcm,#)zkR~C*[/cJ*`}w W[:(6sogdQ/f' );
define( 'SECURE_AUTH_SALT', 'sj>rXY(PcXd??~i<t[!zXdT@pNS&]k4]ro#a9wP|rsuA>3].06O,}{9.r`5j-kKw' );
define( 'LOGGED_IN_SALT',   'Gy>Qldb1m>)gi!0t84P;ssEEgr5r~MIwwlbW#= 62ysoTJsduRz-Z1.R(KRQ(z~6' );
define( 'NONCE_SALT',       'E6I 1 IXFw9Iq%y&Moe>xxUxzu__2aRjh.]Xco1lQs=UW#p?d/M:i(&dpN/F<qYw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
