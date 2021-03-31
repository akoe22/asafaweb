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
define( 'DB_NAME', 'asafaweb' );

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
define( 'AUTH_KEY',         'pf]M3,SH!;qg}FOg{C1CNV3M0cVZ9, A=~CO5HiRT.nS)Jvy$t(1R.u q9PP,fG<' );
define( 'SECURE_AUTH_KEY',  './emxk#08^pL0YV2=Oh^GxQfq`S|(a`ZCF:7k48((;jD eA6@Dqv,Wi],&`*QZAf' );
define( 'LOGGED_IN_KEY',    'L71Q,c/mENx%i5c`~+$UZv=B]qrHvdC75&XOl3wPf/uGVrG@Tf0)<3phR$1b CGc' );
define( 'NONCE_KEY',        'zjZIYL<rD$60Kv8/pLI{@j<v&ak;KxkM39kU ]h1/xV8 qx!#MT5>Q=&~&^K,Is!' );
define( 'AUTH_SALT',        'OPTFRh=4]VR$@<<?=|<RO#8CFTHV2rT>04:oRIrKU8eym2A CB!NV[!`za1zjwZ|' );
define( 'SECURE_AUTH_SALT', 'olO&=3d@EN.}JO@v3m|ZV X *KHdA.o1C^CG%8X),XXE#|<``PQyxP%A-PmL&+{J' );
define( 'LOGGED_IN_SALT',   'tmaUNU2nnG]a(p^>tQWa49:j)AU#U(Y)?U&es7VCZD+PLoRd~DA/vPh<|AskmH|z' );
define( 'NONCE_SALT',       ' mH<7j@&XWxZTCDSxr(#o$^R]x~v`H>=xwo`I3@RtO[,wn*_(s6(<%?eZ MzYb~E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
