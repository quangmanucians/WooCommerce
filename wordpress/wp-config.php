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
define( 'AUTH_KEY',         'Z?t,;SkftYs4q5N.KSHR&B:*vTd%4qIX{|Bmjd^g_X?(49Nx;{8}7;Sm)Xb$v xU' );
define( 'SECURE_AUTH_KEY',  '>[5=3T6`L!#<zT9gZ}xh-fI0Flr8ir~D@8daD* P/]h=-=S) +Hfye:V~l}_ WEy' );
define( 'LOGGED_IN_KEY',    '[MgD@CYWowq4fw.$HCbY;mGd6)f|I2N(=;65PpmiV-OCJ_)%Dh2pjgMCGK?lRjP3' );
define( 'NONCE_KEY',        '$ttH~@j`@QDL3m:I*j0#U}OA{)%uro]1{PGb{-y~eB5~evW:WNCG2h=L}==+=3!;' );
define( 'AUTH_SALT',        'DJR$c;[nHzNv_n}^K^OmyOlRUR)Wa_*vMV5qasZ=ccd8L<4`fBr|_u~TZmNB&$ey' );
define( 'SECURE_AUTH_SALT', '2:5nd W$9?3erNjP;1P|H.vCmr#Ba{O/Jr-]cpP95sm9J7P=GU&*053Z_]*s7K(w' );
define( 'LOGGED_IN_SALT',   '&]_P5R6a/Bdg{`.C,W,HFEYe_mgxITc3U,a<@Hr~5PE<03s%@^3wx-e%@Q_{4k6;' );
define( 'NONCE_SALT',       'BV>o-{D:3J)?,8g<s2OPwoWHt_rh*Eu8qAAOGQjpdHjkkx?W]1:SAbrW)_vN3_~W' );

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
