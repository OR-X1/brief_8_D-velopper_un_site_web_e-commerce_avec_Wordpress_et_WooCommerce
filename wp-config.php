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
define( 'DB_NAME', 'brief7' );

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
define( 'AUTH_KEY',         '7f}O0ovVmpZ/rG#EWsrTTS^[AfU!F=-f5B[H]#Y~cW68s)WAbgAF_:,/hU)htcLG' );
define( 'SECURE_AUTH_KEY',  '?ww8cCyl!0=(=A#w&en3{{-REF.aJi@L&&pWktDgNiT=&OEp(#9IvE<`%5a[H1&.' );
define( 'LOGGED_IN_KEY',    'r<R2+`?#1c^{in!Sk8lr#`HF Tnzpt;K1? Z^tbmE:I`i$@u-lD8|DCKK65z_f94' );
define( 'NONCE_KEY',        'SjEW|U9{^e)V<ZQ)U-]ScxN)PTA5R#yf8q$(>)0iYZvd78t-|EVX<G/ovS;E5,o9' );
define( 'AUTH_SALT',        '1M{3Ay+ :?~NAPz&mj[kCQ_<=9q|w3*}jrtw|d@lz!cZ$5^A22/F@JC/CAX.,?1i' );
define( 'SECURE_AUTH_SALT', '[#MpH;{#XQsuBZ,+J)6^K3y1ff LyM8F-5D?,nNMmrJ:6(@I!kO-<=8K8h{J% !#' );
define( 'LOGGED_IN_SALT',   'ShDJ6xV+0FS[^nl/ Da|_U|&/<fp^g2Y|Qrlyl)bTZG-MIe|T7GmeytFxbe;ClLR' );
define( 'NONCE_SALT',       ' W5Vx^Qe+@rSf;Qsj!P 8@4/d|%_=4D8qaU[&9lS0JdC~bz$/VI].f`=3-x:hw%-' );

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
