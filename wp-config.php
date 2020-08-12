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
define( 'DB_NAME', 'pp' );

/** MySQL database username */
define( 'DB_USER', 'akshaytg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ardhra007#' );

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
define( 'AUTH_KEY',         'Oc#[eAwEjC)i>UnzKou*Jg:>Stl%${,hEO&XpB:mF[B6*hiVhg)la>FF>qqz_H^z' );
define( 'SECURE_AUTH_KEY',  'UWN/GcB&pXn#rgILci)53k)+Ph0vyBjKO32ZB?MCVAbTF-y]n7=)^P-S!)d~J?lM' );
define( 'LOGGED_IN_KEY',    '|:UZxX}p7=uV^)Yvs8utSTV=2dTfl&Txsz^aRmsB4OZBO6t6>`<8$(-ZA#8,y={M' );
define( 'NONCE_KEY',        '1}w/&L3L]e#7!]Vkv3|EdPY@V,EeD -8Z>W#76iP5X7N(l?lamo&EO$^q?Cl(I6k' );
define( 'AUTH_SALT',        'O`j*,.ooJHWjX{JhHE+!vp1j);j(hkVRx[&`Zz%}<SC=vI5j|Qh}8Xhs,-b4yl*i' );
define( 'SECURE_AUTH_SALT', '~Pi:H&%QgNP9QD fd$<5d+!5D@aT/A>7j$f (xI{E_#S!US@~xGG/5&PP${[fZt(' );
define( 'LOGGED_IN_SALT',   'E^)CwaCMs5QfmwX`Bmkb:!T.0{+^glVd/+7frS.?9M`0B1bSmUeX#x-gf3?EdRAd' );
define( 'NONCE_SALT',       ',c`1DisL8AkDacgFGqT+_AD*R~UE26dwAtbp8;=D>>gXduRtQvej3M>a;>!0tdJ2' );

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
