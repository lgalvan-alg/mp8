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
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         '9!ww_:~06|`9)[zf[Eye.Xk>(chGD(TMQLu^^HWcAaFg<,=NfaZ%|%%E0[G|TQ$2' );
define( 'SECURE_AUTH_KEY',  'lA2qFF=iX]K4QBsiv;I5{mt0HN@RB^3h3A}TdX9SZub#I}>}kSiI[#ykW:(>Z][G' );
define( 'LOGGED_IN_KEY',    'wn1#+WTGgK~7`s@X+ _7Pt4ub;p:f0P_3:*y=4K-,HHy,|3tao:VLkNqy8<4WX;H' );
define( 'NONCE_KEY',        '^JVZzUy]Kd,*?c`vKh6Kr^+lWMI_Qz;Ty_@9mjQ-ND8N/C[KG3:z_sv;-c?+cn,k' );
define( 'AUTH_SALT',        'hD*yM`m.}9R7|N g>uq,p5>aPnIH;5BW7rXv]TsQfIog!k0?!+;EkGg#- }kE0BR' );
define( 'SECURE_AUTH_SALT', 'h?QA}6h]71_< &Y=Ks]@gp}+%M=.%s_D~4h^>t`$W6.Y]h?q,~vlP-L$,4!j=6i8' );
define( 'LOGGED_IN_SALT',   'MQ9D ostSdeONl^S9y+^Fd.|maxg|#j0gxIUv;sC?`X*m]X8xgL63#A4d<trG1:5' );
define( 'NONCE_SALT',       '{J?NKC:)M[?E(rUGZ{zA}-wh^:B) Dd[?t_%[W7?CsFXvOY4]SyBkGm*c7vB/~Ko' );

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
