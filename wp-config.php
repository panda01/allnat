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
define('AUTH_KEY',         'WJ1+%@a%)tos%}b?ymIHSnDNn!%-KRxN7MsB|-Sz#1#sGW0..b7,Jb^j9:-J}sw.');
define('SECURE_AUTH_KEY',  'gl?YB=Y&0hzjiKvU17u=U$!,nOxpm_(iTC@y]wt/DZkF%H.v^-4IO}tUqhd$im{M');
define('LOGGED_IN_KEY',    '*#l3;X(|c]7# )a|Ed7Y[-2l&I$EXwyP{!H`$%6`5C QJQ`$@9Ytm,)<HhMzFR{C');
define('NONCE_KEY',        'HVrS+g38ZmJJ(h[KlZ(^#P+u-q*)C|XEk98,vXv{u^}q_ofg:*@V?0f3S]83+TVf');
define('AUTH_SALT',        ';nCH;r}a~v%_>%IpKCcuSAI<2,w@Cvz_s8CGj3]-)4eXhyaKZ.ki6|nP62XJ:Vyl');
define('SECURE_AUTH_SALT', 't!kT$4zC.61{rA$Zw,Sr-DW0?r<}4/(e]D<nIdy}}3=jzUoGffWz(D<m|VOd28+f');
define('LOGGED_IN_SALT',   '5x(LaSJ>:M|69C*jEZ4Z;U%;1Q-iuolG==+z;5Ev!_aw!@4Eyw6$HK.#gqZNZ TB');
define('NONCE_SALT',       'YOU=^~4|d-N{_T+W<{+JXOD*U*I||uq!M]|:W)~Sg8FsFv.OVHO! i+mR>IYpLuC');

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
