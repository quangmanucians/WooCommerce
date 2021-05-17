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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '<uvNvmZ|rWq0/.TE+00SxM.*ngC0VHs:-$?2}Tp@ZQ;eP;NC}hH/&lTAq(J~3Qi{' );
define( 'SECURE_AUTH_KEY',  '`Bn)E8`z eRK6n1Q<-m`(zExD2ClsvEFL:16#SdL@s9xGTf=]=~Ld^1QEj1/],^Q' );
define( 'LOGGED_IN_KEY',    's|9Z*[BK*F2+YIksuWTu|4Br;L|J-bVczdbt-[H3W`Qr uy7fLC|V[S`$z2an9yV' );
define( 'NONCE_KEY',        'BHM&1~{m(WGWb[+|mJ7bZ)hh=zg(z9;!./vu!x<mx=A^9D5oqC 8j5bd.}K#W)/s' );
define( 'AUTH_SALT',        '=QzdT4BZcB==A$F6UsTwjUYak:qH~v*a7CN0eB~H^jhlCqtH,^19]Ts[ KS&{U6-' );
define( 'SECURE_AUTH_SALT', '[9!?Xy[!.4qGlE[o#[BH70+s}|KdkmVj1M J+YjTq=4UB#yj{( 8yG&TcQguNe6h' );
define( 'LOGGED_IN_SALT',   'U}^Sc.%fAyn?[KnkJYIQr%CVXq7{>c$CdX>k0=d**D.iOF8k(aH#^x35OsoXO.ka' );
define( 'NONCE_SALT',       '1GlN5;ZAa|G@nxTZ)U*R/jSV2EahZN>.*fo,JQ&HkSQz)vGR->  8+|8us{&ud5&' );

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
