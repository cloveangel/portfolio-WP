<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
	define( 'DB_NAME', 'portfolio' );
	define( 'DB_USER', 'cocoloco' );
	define( 'DB_PASSWORD', 'qwe12345' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'louisezh_portfolio' );
	define( 'DB_USER', 'louisezh_portfolio' );
	define( 'DB_PASSWORD', 'pleasedonthackme2022' );
	define( 'DB_HOST', 'localhost' );
}



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
define( 'AUTH_KEY',         'xJ=/kpP?;K:]RQ<S?8giZa-{u&!2,Mj5Hw}pm$ZII}Sz:/PQII8 /$5tK<dd}<H3' );
define( 'SECURE_AUTH_KEY',  '^%>4SWjQ,0dk %vWvUL0 7zDM]3oGnQ(wjNQ0stCUhvh`6OX<e+ssq*h-8M}W}8v' );
define( 'LOGGED_IN_KEY',    'j7p2TZop/rE]Za8D3R,Rz>nwV-)XmTvT1I>8Hye]`vBu?B[;-8#}PesrM@MEO#fB' );
define( 'NONCE_KEY',        'u>^%tay:_!-N_/3]>W,A[i/F<TRPnsn1t.d(Dbo*VN-`n}6?).)bx8!6n`jA-X.k' );
define( 'AUTH_SALT',        'hN|qeV45!6h]w@)>TD$m$cfMiK4Q7LIxd?#a3%l<{oKK,+u%nKjGT1@ YsM>Rs}&' );
define( 'SECURE_AUTH_SALT', '2i]j.j|h-6oU|S@_xkax5.~J5il}MZ;-q=8*9|m L>@N@VaG+LT;$v0O4q56e7?d' );
define( 'LOGGED_IN_SALT',   'jNdn>!$Cr18nE{#7`F^FxntWqT*`q?_Vt>c@V%><1i<kNBL`sY#R|e-PpY%&!G=$' );
define( 'NONCE_SALT',       'u!wG&9OR{,D%2{;f5u}kXo2`WS9;AFOen2;RqsJOM5eqLNHAB`~J B*gm.ut,0!x' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

