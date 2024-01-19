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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'l4b1D_,0-^W/$Ge3:ng[YdFed$RfCTqPj.[3g2#[98Dd}8H]ujV0xtn7k-!y>h#>' );
define( 'SECURE_AUTH_KEY',  'q^*V~1-IKch+[UjBPpq<alDBgXf=_&)|t2Na#e$]zsmKw[lv^wc{Bp)Bd-^~7mux' );
define( 'LOGGED_IN_KEY',    '=W<gB|lkE9^h)+.Oc/+Y1o8Nkjzj<hWdkaplK~:G#?sjET&6OBKTb<H7sJ`9{-+:' );
define( 'NONCE_KEY',        '3&I)s+9&e&Vlt9OF|:q#-ilZ;&{DPdbRN5h<7UwdAk K]A_RK-g!CwI),Z:n1CDD' );
define( 'AUTH_SALT',        'l?j5Nul##9~6S#%<e[])az}zA&Pdq.Bmz*,C;q2[V!Wq]B;38`y>TC|3k.wp^p6R' );
define( 'SECURE_AUTH_SALT', 'wPws]4czpS~gMnKd|F}]BoF Jk~4dRe!l!ti<,Y~|HF&f cknamR,~19e3E4n;FB' );
define( 'LOGGED_IN_SALT',   'T$x|rgLe>(S#25_Z3GZR;c~ljI*hY$/|<cHd&WE?NPc=;w4=(5J]}Imb7(z],ZdR' );
define( 'NONCE_SALT',       'mSp=9P_.P2VVxB=},|47SJeC:k>{DLO0${DQ4c PSG4gn}n[[NFS>;5MkM}{7zVg' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
