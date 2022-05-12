<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u424488303_daVU5' );

/** Database username */
define( 'DB_USER', 'u424488303_N3FZ8' );

/** Database password */
define( 'DB_PASSWORD', 'udK7rc0c1V' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%4__}W V|9jQiOIS/v^WM/M?oZ25rc4e(vupj##rjjM#yG#]z(EWxDyz&Pk^-#a*' );
define( 'SECURE_AUTH_KEY',   't?qv)=I>$)Laq#|A@:W[o1)KXGH1K)>w5@!2Ub)|}Bii^+q-@#Dn{eq~9Dpv7i^L' );
define( 'LOGGED_IN_KEY',     '1>bhqW5xk;N;pzg53k D-TOHHDpWpOVh>Om1v>zD[E&,YsN&FmAWYlr$tMcX}:5D' );
define( 'NONCE_KEY',         'hDtHU1$[9odn+AJ4WL3Iw^D^mRA(sZ,-HEFldhHEu5f3RhD26/kLO1<!.&{`>:( ' );
define( 'AUTH_SALT',         '0(/rr^_I^J;j;LL)R(wFkinA158z3,&@CYY>8#wS:uJ^3q69N{3>eEpS-5<M6U&5' );
define( 'SECURE_AUTH_SALT',  '+_>j<1Oy^HcHsN5:*?kO+42fN/4Y{?L.&NRi0XCVM(|Rp^fj8D7y7l/zg6j+>jO4' );
define( 'LOGGED_IN_SALT',    'k6. 1QcdRD{WCgstI.r7/j5X#nadBj .`yUd-8XLo.Ng-ABOuoUfk^(-%1YE1*mP' );
define( 'NONCE_SALT',        '>B:%9z5 PVahDbRMxJN]CLE/6#G>P}r/akFc!nuIHXZWS`U(gxbn2mGc`=@x9GeD' );
define( 'WP_CACHE_KEY_SALT', 'U#;|3,8G|rYy#~CqxuuRgyg3DSP@#bp:`9RB~) Skc4WpAmJnW,!iJDI8!M(n:w7' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
