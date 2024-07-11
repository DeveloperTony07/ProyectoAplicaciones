<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'cv' );

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
define( 'AUTH_KEY',         'M-Pp]GIp,>=2-lJ0MH<oGQ+X&UcyYV6Dvd-,@_1+=ZHn)zB3(JQ/+y5P!om+3TB8' );
define( 'SECURE_AUTH_KEY',  'Zu$QB .}9{HjpQIkoEV7AFgOdEpIU<M6KGhSn61Eq{wLw]ME5f2>qI+advo.oM>{' );
define( 'LOGGED_IN_KEY',    '`PeZDUSn>dH1a[78U0sfqw-_i#gPWDu$SPt&,Jo^?=2<;NkSdN6YboKPgv1~7L{_' );
define( 'NONCE_KEY',        'e:x=*(m)N?n(T?k)o}-lRR4dRUC(MZR,-)z3em$+|i`AwL{@Xt CZRelN_qe=,q:' );
define( 'AUTH_SALT',        'Yv*w0~U$H|7:R6|:njYQkD*F|]]:Fz(>rVrReM/uYb9orwv3SPKZF0!t~/,U04U1' );
define( 'SECURE_AUTH_SALT', '?a8HBu3UsFa~xf;(GSE{mXqqL(|bfgH]?*n1=8Vs)5l!q2 dXMV#XDm*%p,XNkf~' );
define( 'LOGGED_IN_SALT',   'x`A~)TEl0kFa&]~D6`kS>>$H`X]k+:~bTPoP^GR5%!bx6B1)>+p=gepI,#/i5WOx' );
define( 'NONCE_SALT',       '[7ZO/(~q=$P&HMoTAAh*5]%u$/y;g(P+)AW0*;Qr1Sy6(G)8weg5SB47v9NUA_Om' );

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
