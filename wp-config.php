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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         '^wBOK0eGN5e^NB}$rxnYG/Z`Kx0;fB8:x[d<yr5> }]j4-{9G8nF@($u- Gnx/0W' );
define( 'SECURE_AUTH_KEY',  'Uq=uJ3mwJBbC5`u>*j^j/W/9+~K[sRYhEt6fuxz5>K3HF#ShAP%E[/Q#=gbh7XZ8' );
define( 'LOGGED_IN_KEY',    'N*7/Zt`Oao#L^60nDiD ,9b$wb0;;r!&eyob,e@Ftxl`.4zDFL13q{~Uf3+bTMjC' );
define( 'NONCE_KEY',        'D@xl7fAU=&FgF;QMt$J.[152h@*ihxv{zJ+K&j5z[k>JcVJi<E[x/p81sdVax3sa' );
define( 'AUTH_SALT',        'H9faW_m>%;buSiWrWmN4-aiHsyu*X.?oC3Y@yt)2tUx]ul)GBO{c%?im}>,pbjhA' );
define( 'SECURE_AUTH_SALT', 'w11?(r0,]5j#I./I=.EPMt#s19DN(08,tNiIzCrod?:?-zj8?~8lx.OB%vB=drh4' );
define( 'LOGGED_IN_SALT',   '[6vN) a J~i]CHXGY[{7QY4TZj7s|o1:=QZgeVOLjxl>dX}]IsE3!2NI?q&ZTs+[' );
define( 'NONCE_SALT',       'T`70:5Uujmwq35.RW~+&c}i^}J3Ex|-6tHrY(Jd1mBV ~&1=:sdqcHG>D5ve+&et' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
