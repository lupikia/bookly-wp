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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'udigiavh_wp' );

/** MySQL database username */
define( 'DB_USER', 'udigiavh_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hIQMZeSJAfTz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Zh1LNY>p(<qfnY?]0toCF2(,< k!L;MG>$m}^-wAwS7s*HQip4xg2ZA!Fi6B2<4#' );
define( 'SECURE_AUTH_KEY',   'dJrf$NtsN4*TT_ZlQM(g|}DAliHXQv6$ybyji/#Bel,E@HTd BiWpi7BxD:SJs24' );
define( 'LOGGED_IN_KEY',     '@WUr]z=}B|wthABCc~KW0Q( a_JfGq9z^XUZwo3#~G{;m]V=5V x^0O SExVRxF>' );
define( 'NONCE_KEY',         'S-7modC1d1zxP)3j-qcGC~ZXcf[KK_6-JE#OgrDrNYh}b:YUlY#ZiUv9JJtku2%!' );
define( 'AUTH_SALT',         ')6DTlY_dg8n|qkb$b+*t&&*/]t~58g#sO#lf=aCSE;I@lnFZ|[a1s-(^=UK;w,Zj' );
define( 'SECURE_AUTH_SALT',  '?rX&Bo3cq%IAra+E^{@=M! <4w7HO!:A9Vj#;P;;+4r8wI9e~j+B:a/TVPSI-i,5' );
define( 'LOGGED_IN_SALT',    'gV9GD(pE7d^KFL)XF@N}dlE(?dy>Zbi~Kq*,|_1z)w$eK>&o=#Wq.0fJTBoz1-/z' );
define( 'NONCE_SALT',        '9Yk~b2#Y!50+O3&4deQWz};6)2.1^).Wn~erVpWdWaxLZFNM/2Wxgju~O6CB8Vj_' );
define( 'WP_CACHE_KEY_SALT', 'KD4l^Xsd-<.LFKs|LGZmv*xU64Z3~|pOG:f8IDZX5#~R/5q]_xPbtzJ4zFQN`TU7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'doc_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
