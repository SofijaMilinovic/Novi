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
define( 'DB_NAME', 'wordpressVezbe' );

/** MySQL database username */
define( 'DB_USER', 'wp-vezbe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'nwvm#::3ybhN01,}kQeUx/Fqf6Bgn5jttrjFc*Z~]|*OglLonR$d)OiWfr~gq9%}' );
define( 'SECURE_AUTH_KEY',  '?w=rkz30/a4B)JqFsQ!TaGavu0xj_E6Ie3q#vjsK~|oB:>#?uemG5|wp,dHQP+Qz' );
define( 'LOGGED_IN_KEY',    ']4aiSa/p#WG.fy6*,yq.1 }J%j1K_rpWSX>V[0Slco$Jqn0v-0V-u=/7$#;@3al}' );
define( 'NONCE_KEY',        'hq0X{N~t9N{OLKOZGJpq3)|-qqb PR80i3RSrE{:N4?p8`0K7r:A0{hEi{w2)RzT' );
define( 'AUTH_SALT',        'sc{8Le7RQQls67DuD&Xe5S.0<%~sn69[!EFB*Tuwn!V]x~A;q`KrDgR^`xQ{keLJ' );
define( 'SECURE_AUTH_SALT', 'q6x;2kQ)xIg#MlQmc*v9,t[{z.KGx7d,?ve<GqqV>Xx)[bZs|n =%axpMOB Up(b' );
define( 'LOGGED_IN_SALT',   'G|0EZ$7hczBB%+0RjOuyjV`6PD=$g4*)$vp+MX6Y5 bUb8`&KdT{]c6a&o>K<bl0' );
define( 'NONCE_SALT',       '-(E5,R[cI}xm85E;3-dIPDl$e8:LNeY]{_r5TNm1CZ$W.uKqWu>N8jTEVxej=Iw0' );

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
