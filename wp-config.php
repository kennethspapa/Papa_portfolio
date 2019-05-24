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
define( 'DB_NAME', 'lshc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kNY[Kv}^EaQvC0<dVxBRo)2/)DZ!1]Egt.*A@q[o7_gI<c+^!T<-JAzOT+9}3`4-' );
define( 'SECURE_AUTH_KEY',  'c2y8gRAs@CYO<jhSWi%iiN}H19~C3wzh+2k<xU6]L7}Cke^E+71*Ri|D$4~8R;.n' );
define( 'LOGGED_IN_KEY',    ',_tha0$Z?C}xK:7>i8)]%&ATp9|}1?EH[FS;!%s-xMt#dh>(En%;CCw|@JPY%];b' );
define( 'NONCE_KEY',        '_MF?Q1X1dq(e47khJZ1(C6%h.k|TE&*hSQ=O@RiZ)<hdgxY}1qOa]4=fr]0 VN<Q' );
define( 'AUTH_SALT',        '-1(aKal?41rw/>^K[{<4w$c|r]}?w3[+<,W4$(PbFyTTq]Myv#JAk3J(=d9)[BG3' );
define( 'SECURE_AUTH_SALT', 'ipY7g*!t$jCtUD{?4tt{hDH##X=3%n5q~)Sl5NAXtq`&8%gQ^>PLl=Uk__8soJx7' );
define( 'LOGGED_IN_SALT',   'C09>(`qt]n%Td/O31-vH7#}dK!0i7[Y7V!d0ww;HJ!?YG$b2~+<Od=FHG_n_<dW1' );
define( 'NONCE_SALT',       'V{O%+HH+}uKtL#`X^0o=szEK9?`xE)8CY)so!IU%~X6[nrb)-bmC&6Z[WbJXf~!m' );

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
