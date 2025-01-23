<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u662565817_GGHKe' );

/** Database username */
define( 'DB_USER', 'u662565817_a3RxB' );

/** Database password */
define( 'DB_PASSWORD', 'NYhElE9kOv' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '=O).+f?0YH1tLNT&lWe$4%a.)FMRQHUhYO^]%eC:Uq4.rF:1mAoL/^2P{[8.EF#<' );
define( 'SECURE_AUTH_KEY',   ';`f,:Z}4|,xGy:>jROdl-W:nL,dkZ[veaY2B wn,dxMGEL97)g#A[WCWP*c>ZuLp' );
define( 'LOGGED_IN_KEY',     '(b2[t[u;o>R6F%J4h;:|x.QOH?73@:Gh%xg`v~*m7U5DTrN7/#-VA!kxieoJ17d7' );
define( 'NONCE_KEY',         'tdv.1&u]Bp7y|;n.}$;~$lx[D`9}CN4knpjAS-Yym~EG1vt<v9Wo9P`vB,gCt;f(' );
define( 'AUTH_SALT',         '%HG4aa`;hX2K[qlXSM;8Y,^t|XK^YwOk}]fcKjEkn92j?![3lGT7JH[92f=T`*b7' );
define( 'SECURE_AUTH_SALT',  'c#i%1=@B~AqEBYV!=9GjZApU$h4P+H%3q?u%;>=BbMCHAQT^S-rx1VK-ycRSzybW' );
define( 'LOGGED_IN_SALT',    'Lk@k*3<W4N9W]r5eH>A$F2_RK*`2.sm4KWz7[yDJCp]E>Z]hmREZwAI.&>A!uI;?' );
define( 'NONCE_SALT',        'oQ:HW:mLix.Rp-FWY:[{$1h/,G%v40Vc<:[}eY4f2=O=#uQxjCP@I-lJ$TT[3CrZ' );
define( 'WP_CACHE_KEY_SALT', '+A{iwefFE<;L;H&I8!LAa/5hqNK^s# %LvE#+t%tirUybn:pcht Mu#?V6i1u}h:' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '31228110cb56c61a64a71ea874dbd87d' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
