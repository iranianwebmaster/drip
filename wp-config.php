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
define( 'AUTH_KEY',         '|JK##8#piA@5m%POr_({!Kugxp3BttnN6zZJ+fF0$.s`-/lFV1>$ev3[.>QkR:XA' );
define( 'SECURE_AUTH_KEY',  'u`EDY>3htaV)N_nYb]RuNz%wbDZm#X  -Ts6:#Nci5*0J[U;`)}L=e>JgjJX3IF=' );
define( 'LOGGED_IN_KEY',    'iZCQG*YKMn_]SiB~vRv--qR,?0K0-$TxLADsqb)SRY#f` @y9|jA9&l{f_q2Qv8 ' );
define( 'NONCE_KEY',        'EHGdjl|]~,CHSv}w@r]0B5$Z*CEn-!w~td|eB,zL,[yI~j)6ZwvtNa5 -S7lbwkV' );
define( 'AUTH_SALT',        '%qt*my_ZOCCAuPCDoD<TPvpnVtg<* -]14_?Z3aO_-,&o*10XTi|~j=,gLOOaj.h' );
define( 'SECURE_AUTH_SALT', 'Dr&J{9=KZznq.N3{;lBe{ni3!-~ T`1`O$`p2wT&iBmOMvD=W}E}y@p6XgPLtDR2' );
define( 'LOGGED_IN_SALT',   'v{R,fl_.?8rKAnNu:Flrw?^L7TZ@i{tIdg:Xehn!X/}GK7x.Tp:W9(pMW:wbw>En' );
define( 'NONCE_SALT',       '1KNdQaDlByKXR+*1+) E=lHN|syPJt~hZ|,EFQd0=y^dF&42Fd<}+{2$[Ys&ZxJ-' );

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
