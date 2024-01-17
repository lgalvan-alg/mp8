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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C~8$A^[$AlOq=lN^qIj+]Eznx;Q5v@n ,L4Oz{3t4$*{:hz17_A1xw)]~%no L:q' );
define( 'SECURE_AUTH_KEY',  ';1g*l..VxH>ld#BG4_;j%_znzV)>5pZm%zSi.gx(S=XnQ]}g6T::#D:w.j5W&(=h' );
define( 'LOGGED_IN_KEY',    '/% {{)B1-CcyHsRR-?tTEmrRzQxgu8FW?2v iw/JWoBr%~PS 9m85]J9]TwC#r86' );
define( 'NONCE_KEY',        'Z`v5dpt/BS24xAOeH{L8uRXiX&@Zq[e-N,O;_i]nGQkfOwY^S=!mS#8R4a1@5OL4' );
define( 'AUTH_SALT',        'R#;_KSAd+p(DBgbV`I?@*41O^W@bxF!EHD~4CT+iXQx*BqZzi*,{Pr+yqqnAFcEH' );
define( 'SECURE_AUTH_SALT', 'X^o!(&0mVI#h|}=~5j)t<p.&U(wnxM^MAz.XZqaN}KX;70e43WLg{zscjVXsFkaq' );
define( 'LOGGED_IN_SALT',   'Vv=9s)BEG/9X_~>14G3S?1|uO C34`A~<OKtb]YWn$?gJyeG}KaS16 3L~rT$6X?' );
define( 'NONCE_SALT',       '[P&t@KzU=- Mqm{us%8+@s[E&`U`zOel 2#TCZIc7L?am2@#}]mrs!qhp0ky:i1z' );

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
