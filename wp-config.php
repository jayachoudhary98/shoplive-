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
define( 'DB_NAME', 'shoplive' );

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
define( 'AUTH_KEY',         ')?Jg$;j=[4V*tS=&#3REv=xzXB&znDM8GMg/lLgLKkMWaB(}{|F78JlQ[B[=<RZ,' );
define( 'SECURE_AUTH_KEY',  '2]6A))bN:|LGm}r;DY3TSTvVY7ZD(%F;Bi484P}EgQJ8$8ek(VR|/{V-anv}ztRk' );
define( 'LOGGED_IN_KEY',    ':Ap8UxNI}!cQxW~>K[Qv{4;w]@IAV|dGs?5>NNOA3w^bj>Mj$^G7@^Bv-7cAo/8_' );
define( 'NONCE_KEY',        '?TYcEvTw/K4pB$Bkm)KV(sK;Y6SP/)8dLx$kLnO+9ma&?9g%Y._I-k;w3^/^M50Q' );
define( 'AUTH_SALT',        'h#Id<>o!7c>J%LD5?)PF[5c0sW0`Dq?IH28vBvV0V(tQyOXeK(;tM?>M>|]YM{Q9' );
define( 'SECURE_AUTH_SALT', 'Nn)/!g$C1v|~) Ly-iZ(!l?1!9CHk_9V?OwtgeLR{VDy=D 8{g&N1IzIFrjJ/P3f' );
define( 'LOGGED_IN_SALT',   '% l@J$52>HGjn_c B(YzXMr,4f J1xO,M~mt%OwG+vbbw>`l<]S&q=Xsiy,r~Vv[' );
define( 'NONCE_SALT',       '(LH-^y;k<0iyWy{C/D %|7Dn$Ir4n<,=Wr@Fdbhi@F`[b:64R}VQJ_gl@Qp]A02%' );

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
