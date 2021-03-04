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
define( 'DB_NAME', 'Hotelanandainn' );

/** MySQL database username */
define( 'DB_USER', 'Hotelanandainn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ozlG5GSVNdxXgM4s' );

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
define( 'AUTH_KEY',         '8M9j||B0aKN@mD$Z[qvh8[3a(l-HARZ$KusoJWXfO-?3J?LeXfeAhU72jcBb5Y0a' );
define( 'SECURE_AUTH_KEY',  '!:V8+e|M1p2#_[B>:E;)O6L}T-FGGJY}+)!|;$Oz:7H/]4bj.V4zsvN];QzaxUMi' );
define( 'LOGGED_IN_KEY',    'BQ/^sHVBZtKn^c;V0zGIv=oH5EcCi!N#^PtcIET7a?/O|xEKf!RF#QJ2=i/wFNeK' );
define( 'NONCE_KEY',        'g7G=:OuKRx!wH!9ESyH^x (OuC+4hB|-,((6p-ywr;U/pW~U()<~a$:y6GXo_23>' );
define( 'AUTH_SALT',        '_,M()l8)(9~;Q}-.dzp3Ou|IKe5gS[sS^IK*WRWa92nTi031{g4]![7@S]_YQP%&' );
define( 'SECURE_AUTH_SALT', 'mu:LwF=ytdr0dMn<QwN. [-aJ9Tg FCz?]R{w(W%Zoduqp}af0Wnf,-a#/8?4H]]' );
define( 'LOGGED_IN_SALT',   '|p,Z$<I~<;aL.JH6#i}>IsC/3$Q7{`Uf,oc)X/V4tt247f[8*qv*HAHq}nEf}m|%' );
define( 'NONCE_SALT',       'fxW4jb!:q8?~GffWx9FenS#dT?xDa6kU5vz0a`se1Zh=R}YcL|NS5]C5>&iA]Rh%' );

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
