<?php
/**
 * The base configurations of WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 *
 * Standard WordPress installation
 * Staging environment
 *
 * @author  John Heimkes IV <john@markupisart.com>
 * @package WordPress
 */

/**
 * Home & site URL.
 *
 * This will override the home/site URL settings
 * in the General Settings of wp-admin.
 */
define('WP_HOME', 'http://mack.local');
define('WP_SITEURL', WP_HOME);

/**
 * MySQL settings.
 *
 * Update these to match the values necessary for
 * accessing the database.
 */
// Database name
define('DB_NAME', 'mackenzie');

// Database username
define('DB_USER', 'root');

// Database password
define('DB_PASSWORD', 'root');

// Database host (usually 'localhost')
define('DB_HOST', 'localhost');

// Database character set
define('DB_CHARSET', 'utf8');

// The database collation. Leave this blank unless otherwise required.
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
define('AUTH_KEY',         'zj8?itK&EH}`MF:Ip;+PG@K} (JZ#Ri&m,;Jn-I7*UNt0ghzLSolwfw*]}yM+51-');
define('SECURE_AUTH_KEY',  'x+=Zr0[%LP>+~>#x&;}RS&MJujU[[D%VK.ENV*.#-lVKREBC&l7+G$^Zy7R%]i7j');
define('LOGGED_IN_KEY',    'Bz)$,o^Jepk-C(^_t[.-6o{os`o/q+m2$NbABW/|@|1meCMl4PkS)/qn&@+|1:-U');
define('NONCE_KEY',        'rAx5NBdYqu#<+{?S!Oq@N:>o+EF[7z{1#p$k=BY|+pi=AI5RI/bSm_#&F?2r [F<');
define('AUTH_SALT',        'Ggi1z)U q2Y?&W2,Syt^aFJt-S{tvEKjUc:S??op6_lP2(|Nl/R5A=|}fSL8p;2r');
define('SECURE_AUTH_SALT', '|`Eq< _,kj1l4Gf}|H~Ge:~_uuWB>^HPLrX$>H1#kWCy7,5(2+u?V03KXm!VEAR/');
define('LOGGED_IN_SALT',   'cuY-Uz([{R[-u:|V? DL3=J&=|K+))-f:L$KIDEJTt9]^-u4B)}?pj?)67p,<#VM');
define('NONCE_SALT',       'C?vhK^Ze@,[6/uGvw@A$UKaw[ISl5/4~4*,W{lJ(-+]=YcbJhh3A$8 o2P>+X?d/');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mackwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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
define('WP_DEBUG', false);

/**
 * Content directory and URL.
 *
 * For WordPress installations using SVN externals and keeping the
 * content directory separate from WordPress core code.
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
define('WP_CONTENT_URL', 'http://mack.local/content');

/**
 * Admin cookie path.
 *
 * A path must be defined for the WordPress login cookie because
 * WordPress core is located in a subdirectory of the site.
 */
define('ADMIN_COOKIE_PATH', '/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');