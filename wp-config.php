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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         '%q-`?n~Oyhs#wCRJ>T_|yp3]#3juz3md;0+ @qnrr@)a/^+^`1-Ru[yurBlN{lfM' );
define( 'SECURE_AUTH_KEY',  'su<8GFkRS+c1}^&QkgAlH`=Gx$@;Mqf@1lU-akpTq*sVCIF[X>=^^%*cEyPw+)1m' );
define( 'LOGGED_IN_KEY',    'T;F5L_6(_,D&w3U`2QdSjjC#ll1Z?dw|%`*tc3.fT!!g$/-K3+0s,<I;~g(qSK_b' );
define( 'NONCE_KEY',        'OQ*$V*df&o~ _Ej3}tOX@[O@.GlgO`t`SC{{]wM0H-{3ttg0#9aM;b-mAn1Y~A]3' );
define( 'AUTH_SALT',        'k@&D`DX$>0$+dFw/CjuD s> 00z][`nz>fB<k7n?K]o!]XPaDMUa|_*2ir0x>XUl' );
define( 'SECURE_AUTH_SALT', '*[6^1Ezs%hm+[C[gDt;i4/.6UpW#?dzSoU[n#x*}yqRvg<cH$eqd@n1<NHK1BYv8' );
define( 'LOGGED_IN_SALT',   ':pTD}dDf5q9[Dxb-1o4HVoi6eu:ovIH+@[|k2U2T_M=WHV&]n/hRU4]Zgf[:%Z?n' );
define( 'NONCE_SALT',       '3VjwXOVz5[hD^pCr4 uBUr$aXIoAV%NO:UI9A>2pGd+OBQM:F4SbX!pJuzC4?FZ8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
