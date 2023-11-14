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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yret' );

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
define( 'AUTH_KEY',         'UufB9>rYI}_Q0X*lHa&znLqBp?h&VLl)cHY<Wk]RR=t3Jqyua^7q/p[#P,nV#,?c' );
define( 'SECURE_AUTH_KEY',  '~0+Lf0cl4K[173YTa*]]8FJrwoo.GL.,ZTV~`(Ys%ksy,m0M7G2.zoIuR3M?y?8D' );
define( 'LOGGED_IN_KEY',    '*0PRj`fOx_{hIXeLTscUe*+<$K>F`bh]l5TguMMQ#La=+r^~]N2PGx}AO(/kbezw' );
define( 'NONCE_KEY',        ']Xyh_0d:#(~|bnzYM(@BUf;+36qM8hthLz@M<,1,V7A)7/#R~*aILp{!;MzhROLn' );
define( 'AUTH_SALT',        'AwYWbC#;^V^6V}6Hi>E$Uz33Aee*D/te+Qn_9AUOqYo b[Ci7gZQvXouRF2dH,i~' );
define( 'SECURE_AUTH_SALT', '/%1 s&z8J,[x`8OXi&gJ_N7Q>aA.T2(E=w@YO0YRj 9e}3#Fq{P:ptK|@xS45Iwt' );
define( 'LOGGED_IN_SALT',   'LT,)kI55hA0_~+IO}N.Fa`FinJ6Lc+U0lRgU_rh0 L0*tNRtaob6jx 2[{p9nET[' );
define( 'NONCE_SALT',       'fei2E[ !~cB ;.ejca,>6AvyU)M$b&:WR6?zQLN!+,T0}k@%g0V-:Gs#Q(Bk^q87' );

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
