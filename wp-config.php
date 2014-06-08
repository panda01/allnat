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
define('AUTH_KEY',         'A-US&/TLN6+Y_a)y{$f+XWsNPSR1GZ6le##+R>kd#S]-1}ymxeC~!vmVXr|(^8Yr');
define('SECURE_AUTH_KEY',  'EECz?@+,Q G-WuHq)/2+3A^DA8`o^TY|~OS`KnlupR[|Vbf_#[4CT=K[z:4V5F>7');
define('LOGGED_IN_KEY',    '?VZ7ZJ3a!EMi53ad6f1;RIN1uUvP_Jd!<83&s23<JPa0?7qLO6^Pc4-/kTb[8 z9');
define('NONCE_KEY',        '}M*;pS*fIh>W|6VW.VZ2%O0lot_|fBDfa.TuB/QT?(-LM3-t-2mQqZFL&%jM6Q $');
define('AUTH_SALT',        'g-gh)j!9y>EkG-Tzmad-CvBZc[}i%fc}#o4>F],G@`VH?Mb$vb>!-iHtS%[*|&_&');
define('SECURE_AUTH_SALT', 'AV6&gzT>-EM+n[+g~#7kzY]iBU)$rTyS*+oObP[/}tJF+dIrTY_`#[8$_i&vB+I&');
define('LOGGED_IN_SALT',   '%q@y/l<8}Z|`Ebi/@k+=m7b;[YH1n[:9J+%v~^Z=nd!JpG;33B,k`DG(F;_&I7-`');
define('NONCE_SALT',       'wG8VV?&ZcdL:1.V,=*wP8`i]mmgw+)mQ{$CgZb]iMTy-+DK-+D+n`.zM5:SIpm2<');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/.');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
}


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
