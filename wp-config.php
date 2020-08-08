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
define( 'DB_NAME', 'exoion' );

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
define( 'AUTH_KEY',         'TCu#/aqetUP{JC}SVrbxhr]CW@n,/f;)eQxa=n@c $vqT,Xxjojwj$)diFAwpOA3' );
define( 'SECURE_AUTH_KEY',  'B[.WKb}O}9!vgZrg-W<mva$n]oX7[1ANN@]:^{LQ^-w0$SYr3|z/ ]mEZuYA=r=S' );
define( 'LOGGED_IN_KEY',    'a|?zD&EMo*@NjZFE1>{_)XshX!kZr jX*p/7{LB N1<Ca}$6+fc7*`lW.+|VKkiZ' );
define( 'NONCE_KEY',        's0`~~/MfqKJ:AqEFNZ#W}W3^BHA1<rY@/O@Rn*KJvl$SeZ5{{]0bqK^bS<?[G|6F' );
define( 'AUTH_SALT',        '2?1E:hv:<UMexnl_(5-v0:8g(yRy7cjs6[U1&WIJga)7)+c<XeN$Fh,ZDfZ7@<d,' );
define( 'SECURE_AUTH_SALT', '7@Yh[3KL8rjG/<I-fsvU3%Uf!ZtD-z6<JAZ{=1rd]R&h}r_E6k%kRL!eV-g(VC7q' );
define( 'LOGGED_IN_SALT',   'Rv^!XW]?KKB.QBafHmXzj$0/5ZNio|fvePo865#quhpAqQLo([O]Bzz>m#8%,qS(' );
define( 'NONCE_SALT',       '}`H{_{7QnT?DkUEy<&Saxn#p]}*scP-IG9?=W%1{;5bb#JkbC3 jjOdD Vvm7rT!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'exoion_';

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
