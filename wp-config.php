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
define('DB_NAME', 'fabtec');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bpNX <b(E`m9Ikez}e[SR{ZJ*t[`tX4;TU%p ?p7M(|6+,sA)/m8j*a.E3zKQd 5');
define('SECURE_AUTH_KEY',  'b>rC,$|K(rr^X7(Yv[Is1X{(y^%x_Md<^5F|G%}9<]fCO^EVaBRWk@K/T$9ZK*NC');
define('LOGGED_IN_KEY',    'd+P}Gp8$_^N)c&@=1$1B;|Eq AWfSYTk6fl!0nbD|p3CgKR|{FZIq1rA?iUWhI8V');
define('NONCE_KEY',        's15FpS#5zSv&wsSxSWR)b+W9/BopPrH0q7;Pw_Kk.Y`bnM0/N9Rgp/V>bGS<enQ+');
define('AUTH_SALT',        '4zDEO:F0@d`T6.HS2e|z|1M8AdZ*?uBvm|@3H_QUNY~#$E^:k&q)bQX2;Dd%MgE#');
define('SECURE_AUTH_SALT', '6+RyO(05tDK@}pMtvG|g@;(%SN1=f]i{uLs`/n3gel:@%UN4m:Y<L4*e=F.(G1Q6');
define('LOGGED_IN_SALT',   'fk2X@(Rv$mn]%<Vjuh,pR3<Mh@27W@/qAB|)7br}=mxHu1aKh^Yl>e)+[1_nHkV[');
define('NONCE_SALT',       '}3<]`@q} w$GZIo#pLpux_!H|!wcX}5$rfx85dj5Q7s/qZB%5.2v84dl Rf_={31');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

