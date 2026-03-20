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
define( 'DB_NAME', 'rqladv' );

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
define( 'AUTH_KEY',         '<%5J}wFlNnJq`_8EKE_o%d&Ye`RLf5LcM}fOu*/6+XLl #nMl^2/w;r0(|}@-.RV' );
define( 'SECURE_AUTH_KEY',  'TA%/4sCbIr8ceS3.!(XW(MOhA0(kY;Jg(Y:v2C:^b;aMN8`=KhA2BwBnDUy>XDE:' );
define( 'LOGGED_IN_KEY',    'W.tg#ZJ~Y*y/%]1e2q^|$+Dlx$-(T3f200I-;!O.:y1&NiR=>dKYNC GOkzL9dZl' );
define( 'NONCE_KEY',        'T]}9),pVG@I`qvtj&Y4$IuG2<LbAfIq:8wu}[x7CZ..T?n~Kkk#k!^KvAszko.+9' );
define( 'AUTH_SALT',        ')A[7jMsr4=ya$h8lB>WWu{?jaZ+:j{ENzJ(54%@iPp783!l+b4M/TlvU[}>kNmfp' );
define( 'SECURE_AUTH_SALT', '419N#[Z*M9.~LE-E@+1L@ZT$MqVYWfM8oI^]F/r^ZRfsz>e:E,@zC`,B5p>$kcYA' );
define( 'LOGGED_IN_SALT',   'c5xjW{|25Hpc_Gs4P$w@n;/ce?]G9n~L4T1Q2n1< +E{j:dA&wRKh^moo<h%QKB!' );
define( 'NONCE_SALT',       'AUl~?cWb1@hodo*L8Z6Lc_/#~N[DKtp3lEI}bUpD g7X}=94#!2b~LQ;Wj1zD 5L' );

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
