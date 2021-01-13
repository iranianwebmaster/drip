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
define( 'DB_NAME', 'drip' );

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
define( 'AUTH_KEY',         'f%cFz8=2m!OU~[;~Rca65k(%t?VssMB=#3e[a0pzo-Hv(bmV%H6c_$N8bNsq~8K[' );
define( 'SECURE_AUTH_KEY',  'grY2%=.3VW0h:3&Gz9FCASW7A4`l~a7Xj1l4[R@0k/i({idEaaY;VF+CRe,xf#kV' );
define( 'LOGGED_IN_KEY',    'VP$>QY:;I^Lnw?Syf% O^N28j}E7W`8F9&jS%}6{Z04i{yG<;L>fZuxoLEjD8z!F' );
define( 'NONCE_KEY',        'tl{pK:^pD&o(!H^fclF1v/mm{!+eJdN#qjb7ZdA&Dnu<@{x=VC!!j%M0<Td(j|C~' );
define( 'AUTH_SALT',        '2{bSWeiHu{;*M2J$eJ-9]<pA!*G$925LRK?vR#D2?N+V:;ei5d,%zz(g!|eK5}Xm' );
define( 'SECURE_AUTH_SALT', 'C;$*[<4zuE7/UJW3ik=fE5UUhpSi)Dn+V$rjjiLQi}Hf->VgfIzc/h|6)lI.}[oE' );
define( 'LOGGED_IN_SALT',   'z6()./Q)V8^iOD*hNgLaW7%kRf1</qZ(ZZa}Zv{8LQXRLoMuAz{e49}D#J-/nRaL' );
define( 'NONCE_SALT',       'ybHJPz^3 zR|;3:)FuBvM8G6,wJRu],7#kR^8E8@.u]MYM~%4sSanH)MKNl>Txj!' );

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
