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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Zp1~5-H|d^7wFdI7}jw?&,}JKK$ebsIYjtKv^oA~8+bl}ZD==Q5I$bxgvh-W{HdD' );
define( 'SECURE_AUTH_KEY',  'h<|Hk K4*(Rdd2ek7HjYfN_5=i(Yu5d5G#E}e{/!<SA-BxF<VE5qgJ! `tNztw4Y' );
define( 'LOGGED_IN_KEY',    '%6Td0]){Y;X<:(?=.93D?9z7^]5y@LXK:e9BS[PZ xUXVOfgHTKhETmLmhT8mrW}' );
define( 'NONCE_KEY',        '6YMjBJL@Mk&3n=AjTz}@2_CS)2JQ55)]cveSli%DQ]@c=$%~Dqxag!cm,!1irgd@' );
define( 'AUTH_SALT',        '@HVTJq!<LR]/E3`?$Ae~0:>e/kQvGU$88Dj<z@{M92M[bM~sr-WOGty5d2|E95?v' );
define( 'SECURE_AUTH_SALT', 'mN S>01GF$l>NfByvT}BP/]EyIn+FdnWJwWKKHVxUf7tJjJ;auUIXM5a#yOR]f[V' );
define( 'LOGGED_IN_SALT',   '}HfF8r[w@;WH`s4{d=alh2l?Yr#G.5ga:o:[;X!sM@/-(s,aQwiRH90Z?H$n$35g' );
define( 'NONCE_SALT',       'Rq?}5j<e&Ac0-3;mDK5 |$?MVSH[W1i!K9MMy!B|U^Wy]<N{{N-iRqZ`dn5a8QH5' );

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
