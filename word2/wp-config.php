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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         ')K639!(%gRf4KZlP=?5]oix;5jTP/WCmNh!}n0F-Nb^gRnO/K1OO ]>^4?!0*YX>' );
define( 'SECURE_AUTH_KEY',  'U,&fvFe<GS_>$g5dN>7S!(YuqBMNv7JN>WoVbdw4du4=aaJ?v>>t0$v1J)k59LH{' );
define( 'LOGGED_IN_KEY',    'Km(U)0gZIG|9?reei#,UxOi,uz@vS@r}$uE|1-{Y/YkkJQD/#IBxCuJPY%6SpmB@' );
define( 'NONCE_KEY',        'gMPd+tn<;cmKx,`h`=:FPgon2w%t]ST]X]QyM/OE)@^.}6dJ+~xM9k=~BtEGQg[/' );
define( 'AUTH_SALT',        '+hO*U6<!yHp{D9)d]y:pAANu]X,~>Z;v-t];mfwosldI6<{QeJf;PfSN>M+v*)jM' );
define( 'SECURE_AUTH_SALT', 'lPWyPF=M>}b2l*^M9LWUUSUVOI[SMDAwEdf70V>c,9P7_Jf44H34q$o;s>HvA(Kr' );
define( 'LOGGED_IN_SALT',   'u7<mN*hcrzewJ##![a2Ur:mH`dX(?|HWAe^[5,ONN{^A.D>azY89s~mR1n&<7af;' );
define( 'NONCE_SALT',       'RhMUh]Sbm>|{dX}^JeIp_D5Z0!%AvM25etear1:>:Db]~3@5 ^ynX:Qt%7hjRdv<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
