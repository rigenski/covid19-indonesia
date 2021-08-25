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
define( 'DB_NAME', '16_module_cms' );

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
define( 'AUTH_KEY',         'y!ri5Uj~F9#YN z{]OP?CdAuG:$au7@$H-CK}|AameiC+@_sv/|s/r; aV[RVUzY' );
define( 'SECURE_AUTH_KEY',  'y`0fINH5nM``HDRLPCyR0$7aa{}^lMh96Bx@9$|yMm}oz4G#DAEH%:!3}v{,Hg,k' );
define( 'LOGGED_IN_KEY',    '[h}#8OAJQSl JzW<H PyRQn8kn?dshASo8Y6(Cll*_nO6sJeVg<hcix[]Br`xEi_' );
define( 'NONCE_KEY',        'e3C}R6kjuf2t0-xwUi`F!Brv3]=j}g_*}bmTM/~ Wo0vu;/d jDX5xu2lGY 6//s' );
define( 'AUTH_SALT',        '_Ay<fPW3]Xv7_CXS/ LwutJ}|Pj?O$=Xqe9=~b-IN;^t!onN@:;4{P #9zyGZ~Ie' );
define( 'SECURE_AUTH_SALT', 'h!,qy_FR!:0]]%b|juE lw,_S5&O9nVwDf^=mArnR8H7{].lmES^)|b8-DAAmcez' );
define( 'LOGGED_IN_SALT',   '#0 LkI{XxnBR?tdPQok_^kIj?gT04m;Vc6<Dn0d:V~5 u+U(,e`ofTw|h+[H$v|q' );
define( 'NONCE_SALT',       'nlSf1gQJBKJ.[oUPQ]$U(mvN#E3e+I=[+ysT_eZFMvGoBdysV}jt!}ic$J6-yow<' );

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
