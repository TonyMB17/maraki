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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '-$7*!znCRWb!6J5L2~Fcvk#i,=I#.?T_6<sM-Ydg!mX+S:ilAKg|) ZaD|#03`{P' );
define( 'SECURE_AUTH_KEY',  '%qoO]$P1B._Ap/l,P8T3-K7pNbIgE;xC<a RvD[J`Yk#kanl*O%[R)Z4Dq!qJm~*' );
define( 'LOGGED_IN_KEY',    'pl;3@^t$o(i+Xa/=Ieg{?m>V;W;BAgI5T10R@`$X#sM@36/Ki@0wrCErAh[b?jr(' );
define( 'NONCE_KEY',        '?DB9MZ*T:iAWN=5 zkxCjGsnS]Es[.v8NR/ggO~t$Mt93)& {`^BqI,IqmP*no(r' );
define( 'AUTH_SALT',        '_^R7Tb0PQe(/D%Y-(L;d{U_VjNx>ggLXM~$PC=:kPHl^umS0/+&,mRr<^yMdq=X[' );
define( 'SECURE_AUTH_SALT', '7x(nJ@S$([ykZgaO}1T] 9$ylKFoZbn5)Ebwp2SR+ );>eMlcWoP#_rifCGfp|yh' );
define( 'LOGGED_IN_SALT',   'val8hKzi`#<8W|(7oVpZr0vKo;jIU!eaCWsM4UJAxfa&7~xwxc~QFr=5D{K9(]#/' );
define( 'NONCE_SALT',       '@M<SwrR3<C4~C,1ZIsc7U~T60JRs3)v]n}-AQ$>f#P Dp?6FeM-Qr4N --qN5)i`' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
