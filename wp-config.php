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
define( 'DB_PASSWORD', 'qwerty' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cont' );

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
define( 'AUTH_KEY',         'Klle^ceYezRck/v=hv^I<6a7R9?M{MJGP7QWZCbtf~+2+pkZxeE$fF*)Ax/8P)OM' );
define( 'SECURE_AUTH_KEY',  'L,Vbo~j1_$nJ/T|W+S|1uYZER;tM/U1T^!Zr;QG%B5b>OQ8C6ZNu5nw{IIjLb&Nv' );
define( 'LOGGED_IN_KEY',    ')=Wv38^xW.O<!u)Esa EKd;g5eBi!gVmU$RB-L/X?UxPkI(Di7{>%CDD2:h2|7%K' );
define( 'NONCE_KEY',        '*vz~g3S`;XWO-S_7dG,e5_N90x(b]=LKSmSk|!tR~S5FZV:QbVZj,t>hXCz8hNsw' );
define( 'AUTH_SALT',        '^|fKnx|S@x!UT_F&e;n#M].!xgt;p%*{}$XSa-i~_3%o}vz]`z}oO{jX#oC22&4m' );
define( 'SECURE_AUTH_SALT', 'w_6*Z?;CgcyFi>4)Jt,<t< Nt2* +Ueq!:Y=Wb>AXf5.)6_QZjx}(b28*w:g~o 6' );
define( 'LOGGED_IN_SALT',   'f`Gf=]w!@h&(3YK0U?9Ri{2k!X0fnv%U=yDeYgA[/8zc2NMi@1cI2G{_ER|5ypcC' );
define( 'NONCE_SALT',       '&<db0Xm98aUz)VwvZk*-bw+e},q.RN=oD_+2.gv~I#?VNY|kq^%:o-4qp6JmVJcl' );

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
