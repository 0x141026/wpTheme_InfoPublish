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
define( 'DB_NAME', 'publish' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '^px,pI}?pf~<)7^|_[U~wZ)6+CoiUPxXknIC#:@]=+}n*..H?GGE{+>yf ~UTn?$' );
define( 'SECURE_AUTH_KEY',  ':K$2Y3<aVqon>E(m~D{G)O,?-i/^s4If?y}J*Y?dBdO $Fr=k+pXb]ochy0uagJt' );
define( 'LOGGED_IN_KEY',    'B1zsvqq/|jJZ3Lmmr@mK`e0are`k+T|Rks_R{pFg|.O<x>/~FG&:DTkzxWByVu)D' );
define( 'NONCE_KEY',        'yRe&](|NboUCV6Z:0<]sgIQ=J*+}3;ku0z_|r|cWi&0[Qm3pbAT$ :fj&|r19tD)' );
define( 'AUTH_SALT',        '[ashW|!<qJICpAzzJd7.<RN6cMcN:.!bDezCth5Nt@1?@.syuER6H70?O-dQ_RZ>' );
define( 'SECURE_AUTH_SALT', 'A*|[&&PH9oKB3-=qWeg;FF0KDQeu7@W*k.8JVR@sv_Y(zb];7Vs[N]1SU![9$*3h' );
define( 'LOGGED_IN_SALT',   '!v?r>GhJU_}w>4v|[?2pNg6fu9%PCs}13ph@WCc=WKUsKpdxg*K}W683Bp0gJfr%' );
define( 'NONCE_SALT',       'UXi*])m9BccQAH}E]-/sxhv^:45hC !u0-^gw*X.X#bqRYl*/IT_Ty1?FGRTvoRu' );

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
