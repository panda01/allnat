<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'allnat');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MPr0qZm-|T8L.8`=Oh~`yYc>WT.!{&v` qBI~f6U;4S#6i|pu-!Frt9w7w~.;KS)');
define('SECURE_AUTH_KEY',  'eax#-Zs:p54KW$Y/1-ok;~,wVMnq=U+h%C(l+;-@|~?r*##!kXWG-.Pp7E~)-:iL');
define('LOGGED_IN_KEY',    'Y1c2CcF7^Sn Q$px[=E>5bE:g:`YX.=EFN3:I`j;,@?(zB<n.U]/]|oKQ]~yv!R.');
define('NONCE_KEY',        '2xOz.VD~+qUE%k_YnG#>*^jpe$(j9xiL]3lm;pd/pIuaN;/8libw]3<3dbPh+:Rg');
define('AUTH_SALT',        '/-7ZTXd9=-ZGh~~1-QGh?kr@`?`]YN~xSwp+h8=v|$/|i,8F5H1m-UV-5Z<;^ w%');
define('SECURE_AUTH_SALT', '+[|l)63fE0N+5h1{Hk #4m$2${2EYL8Ha|hwmkO^@tyjd1Uri~R8s/%Ay3OSDf[W');
define('LOGGED_IN_SALT',   '+b!=:(_V)9?,xX5B{:U8Eg6^xoghi7.LQVd{~,N3d}O}IH^PR`+E}5RpY/fgtRGL');
define('NONCE_SALT',       'raz?P)dMQdA2@Iqt>X,U3*+7g-~MU7]4vwR#.9{d ]Y7=z6F+^2<~pP%dlqOe.j_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
