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
define( 'DB_NAME', 'dhef' );

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
define( 'AUTH_KEY',         'xq[SDN{>e r?=6Eg9A*/t9t}@~0X9WiGrJ`B2EC-hld<>LlXT&}t `G/>=%J>GN]' );
define( 'SECURE_AUTH_KEY',  'T+zFF:aqsji{5%y46$d}v5ZlIB^E=|&c|X[kJi.n1XJ_r DdMaWBkoa}IL?k`2hv' );
define( 'LOGGED_IN_KEY',    'RGu_K6|21;^JSv@khAv162Y]dsAR.&^Ex5rd{YQXs<yj^8z?a_BHo~z8Hp-i<Htz' );
define( 'NONCE_KEY',        'Bw&bDN=d)[IWCegFYia]>thlBh [p^FB]aj#h{6F5/Fg=IAL&IGic~< W,O@,/<U' );
define( 'AUTH_SALT',        'i+.,{>O*o4`/M/6PZ8jl]-CeB6);Lob~u3,e{-mLoz-qwm=*,YN`v95=c5H6nN8+' );
define( 'SECURE_AUTH_SALT', 'YT{]4rmIUzFjOMc]o op{+Ry!.],c))=aoDo  din=S_m}sJJ+pqX|8F{CDNPevk' );
define( 'LOGGED_IN_SALT',   'SE~kzxF~$$9PX5IaL!UCk5x&f2O]/iBC$J(%5#^VzG<X)CrW^hqZRi3.K;,krbTM' );
define( 'NONCE_SALT',       '?$(@yW.Srqt.drrx07%lQ%y|xPC`ssB$H<o?JAQtV3}ftLyrN9fkxh/z3Q:KLqtV' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
