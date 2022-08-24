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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kedunglumpang' );

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
define( 'AUTH_KEY',         '*y&uOZ*nh{mm$&?` ^!WYSkZosWz(nL G`Uet69ix;fN]H`?q:R-Bm~!w3-S3-][' );
define( 'SECURE_AUTH_KEY',  '-b}ElxWZNvxC=-_PymUcNYn5fAt/)wPrDZ6IR9w0!|:[,`#sCA2s,7?l.7s=:$F~' );
define( 'LOGGED_IN_KEY',    '>3$VAdB6c7P4B+BI72H_%ji%j*|jk`n(e.h$+@vl d&/6.AM(|jeL;`*pMgqdB9 ' );
define( 'NONCE_KEY',        'Vl<hs[}<vIF!:UUc<y@Hro0;WVb?VPHp`Hwhdln6g6`NDH$@F^J)=Bt5{P.EhMj~' );
define( 'AUTH_SALT',        'ZU:*&`Do@]7MHm~`y]4KCkL,B9Rbe)xUuz|;u!_bo[x5oEBhby4:|+h~,xr1&o?U' );
define( 'SECURE_AUTH_SALT', '5:LE2KK@PpeQ7C!3$6qgPNvEnM9.I/7m q=KW ,+OVUMP&fW|M$Aq2Vq]H^T5*cB' );
define( 'LOGGED_IN_SALT',   '1w?(_*Ww4y:WP!O4gS`vs/!YB!`a na/b{oL]Pky-WK8,=5VS#D)[*CF)|dC0[0(' );
define( 'NONCE_SALT',       'pu-(3+lSi|AV~$4&)X,S<PxYmkZJ(i93BE= G]-JC{e~~|Bxb3BK$;$41:G8}}F]' );

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
