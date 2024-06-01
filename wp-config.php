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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'UO@,a@{-#@)PWj_xB y(U4>VSx/ZYABQ7:(L8sh#lG@srXu`7cv?A}76n._Lq60^' );
define( 'SECURE_AUTH_KEY',  'e&D/gsAyE29s|W>jT$}>`^uS2}_Fw*iu(LmGLl)FmSQ]9|^|@-wzQ:>:w}S&OT1!' );
define( 'LOGGED_IN_KEY',    'AW`s]q<o_%<to<?RI|<?bW#.sBVOdy^ia5fL5%_T&R.^}edk7xF_^5iQKO7]kHL.' );
define( 'NONCE_KEY',        'baH/I$y|>5|u#91*`GF@Kbgc69;Aj@!JHq(_O;%~O[cB(^8)T/3`n$ PgDr?0$e:' );
define( 'AUTH_SALT',        '(Vv>wM*SAL|d%J#8t~TO^0jaMg#njGvO.LA(%M`upCB/4(q:b)ICum pQ?8FR*fq' );
define( 'SECURE_AUTH_SALT', 'Jb!DTZ~b^3k?G)+5l~zCDF@aL4HC{a!s%~kXR;zsS=y|0Sttt0jRE5>Q7$a^iQvU' );
define( 'LOGGED_IN_SALT',   'im@Nb;)P=3^4n3:Q_S=+Cc1PNBcN5se/r9*nU;@h=D`abWUt) $3UAf)>KW88am9' );
define( 'NONCE_SALT',       '^`m5!z%r^>YK}O5OQ)*T%`9Qf-J#`kcwrBciVPI61@q{LeTuMMkNSt2^-^Q+anhD' );

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
