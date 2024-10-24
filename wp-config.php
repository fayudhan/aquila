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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'sUAd@+/_:JgP203F}9f3kE]@#zJGM[OUb@8pjm7~;&F;jTKNYN[O(XY.?GFismo8' );
define( 'SECURE_AUTH_KEY',   'eNr!QeeVEd*D*jw<6u[p#GJ[D6g8)1HzGZ7FG19STXyWXyJi:dIFt~|GIT:z2,)>' );
define( 'LOGGED_IN_KEY',     '^<qyW7Wb*w9VQ_/oukc{EAzb1EZgxUS+Zo,;Xi }P?}Um*eq9XQz-5KULvmxW8$[' );
define( 'NONCE_KEY',         '(*DmBqc^ps[c`o16;-S8=ty?r-[j~fX{IoM: gutg:W9_@z?pVu|;)BC]Z?0AWe4' );
define( 'AUTH_SALT',         '2nCCFN>V]N+Sso.4Q]yI3cq] H]q/hTE s$qRbH*P.w~%[v<M^Guv3e6lR>eC)(N' );
define( 'SECURE_AUTH_SALT',  ';q,eu{jmqF26kenNg<h1(h$c5m}@WUL]U].-ZX7<&Ps=n(.{ CcQRHfR6Bif6!_?' );
define( 'LOGGED_IN_SALT',    ' Mv$/&jw/}(B5X=l7FiaAbYRk0$;Yzx!^Z4E~[:iE$@}c~0-4gP,xX.=)gYz>s[N' );
define( 'NONCE_SALT',        'aC`ftKbwx(PLk;zuomb:~(A:w@x2$<SKZnff:W{R#ZUO3^2YcfiQ!Xue_*p8C~ue' );
define( 'WP_CACHE_KEY_SALT', 'YF2,fhl,lix:-SqEW+be k `A4%{st7o%+j<ttd^O4{r$<^0|VyfsK=5xg|r{eR[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
