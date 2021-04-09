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
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'Y58BS uJ$<Sdn%@zMfU5!t7z9(#QctX%I;ycbLyx}C:U5~c#utsQyh]><<qg91pB' );
define( 'SECURE_AUTH_KEY',  'C]NPXo>EHs^7c9:X8vWd6x)7V+[~[gJie(=>uW9dlXr$e)aP@BVK<gy{m:;{(86*' );
define( 'LOGGED_IN_KEY',    ':?zz3vzRyibJ=RS:j(SjB@4?bzPuJ FRp@b0@F+$9 KN~RK7?Bx$6SVEM{MC$Et|' );
define( 'NONCE_KEY',        'MXP-E>QwR0aO`.RY/4kFGva~3Bh||+5s/LE3U_L[g/CbG{^:v2{n}?KI|&(_X(b7' );
define( 'AUTH_SALT',        'b@`4LBNiUb !^Qc(QpA&6f7W8pP$YlDup-t-z`Bj!dz/I=<%B0*<B2pq`BRyLhfO' );
define( 'SECURE_AUTH_SALT', 'QZK 1[cpL3JXNV92e(0UEVNMH}*|&3KG8%)-[+]&&FU!3{xBt&a+=G8EV$nD[XL-' );
define( 'LOGGED_IN_SALT',   'cVem5U+TQc.`xC@N>`#=m.$_yWf_p]1#w&XAsrg$(}dX)?966l61.6WRRE1qWF!L' );
define( 'NONCE_SALT',       '&c+,/*|x8=3Z_qjyM(TJ;gfSBW(x},{cCt*Vk=*>|TU=I&B%pYse$+Ai$>y+hEn/' );

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
