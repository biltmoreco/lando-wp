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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          '=.TBcOx+bzU,OL4=ex]waH>j07&v3,%:sTja!W+D!bE0r9A/VwTou|pieK=bBar9' );
define( 'SECURE_AUTH_KEY',   'lC,DdQr-SycJlD06JMKp6rT~}E:!HUaQ!~%ni8<,Rv{P.9Uf}pA!|%2A9QEJX5u0' );
define( 'LOGGED_IN_KEY',     'TjsVH]gh|CC<&S/7sFs#sDUYysrz9bo[62%*9K7SE#B[~d.Amiis1,KGDoGAiwwB' );
define( 'NONCE_KEY',         'VyztO5x#BScB`M!d^F~$^|Y7B~O/G164<n4GkRDAu+t6fR2J2T.# =1f(]=mD[(I' );
define( 'AUTH_SALT',         'e1zQ>9ICv9yi1.xEd@D&9`lAb=pkx<SNK>j~f=|Ep.#4gskrc_]EjF/Q^Lz3nMu-' );
define( 'SECURE_AUTH_SALT',  'P;VEZS]60 >}:L  at`QP.fM5A?i_K?J3@F6k$fzJzFDqN*Vci,%T0AayG;e>cvx' );
define( 'LOGGED_IN_SALT',    '~p<zYl|nVC295e&A$yV)sg#0eV~E*aChaJ^bxI::`7`/Q|(O^`_@zB~G0c4N4$}8' );
define( 'NONCE_SALT',        'rJDwQvoCt8nOL1-e6XI?uj)un&R(3=At=/${kC v!ZDDt/8o-Tey~+`x$VYONhk}' );
define( 'WP_CACHE_KEY_SALT', '#71is6g]3kD:Q--%k*F8TeG]7tOf4}3HlLR+%?Hfd.=),JUj^z8Cl=L~0]&5C@]M' );


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
