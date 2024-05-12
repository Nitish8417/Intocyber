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
define( 'DB_NAME', 'intocybernew' );

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
define( 'AUTH_KEY',         'tWt3{n]Qo9%F:-CczAk{!1z2Snqt&}fdt{65lt;{=tX}n[F@D@,6B6~}dS5p^q.2' );
define( 'SECURE_AUTH_KEY',  '% CKiUzJCe5JXS6Y?.`2?Szc*.Ph4mj}j|RW,x)A+m[DSWJ}x(s?TAs[4Q UePo:' );
define( 'LOGGED_IN_KEY',    'xe:9IXI6>Np,w+W$c77d{#gXb&oqsmQ-$<UeVvi2,)-/x%*-~6t&oI;]VV)Yk^U3' );
define( 'NONCE_KEY',        'k+4Z(/:c5|b4?P!I>GaOZL@lgFea<,P-C^_.OSgF}zKXi36w W$Yrv;2;lD;^{te' );
define( 'AUTH_SALT',        'DUWbe?*8_sL8Usy&p?d=i~jpnqPD!4lwj$)-,Rbj N7&[;<h|w5Sk2<mO &e7;>4' );
define( 'SECURE_AUTH_SALT', '-#,;Pi@eB0.^J209tp=4DFFQrp(Ex=eQ2rS_k+%{qN~}q!h-e%4/ORsL8Z0GI`LX' );
define( 'LOGGED_IN_SALT',   ' %`tQM/e-}co-Dmps*M1plQI]U%O5]grgd5/Pk4QN$V`(?}i4Acz/C0xfdmLBs-_' );
define( 'NONCE_SALT',       '0p,mgHD)N66{R.Z(yZF?(Kcif3eanHP bEmnW*Xou0gRE`6/%r6p,wmHBW1_C Zg' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
