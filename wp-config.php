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
define('DB_NAME', 'amyconey_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V_x%7^$E!Ous|OxN-3)$2|c7uHxog6$Ej(=YsfwA5i.5|M_@#^]4~NO]uZU4 BRx');
define('SECURE_AUTH_KEY',  '-jDAJoRG^jYD|Iag/Tov;(p@2;aj[^+ePq]<MIyf=!Jfwcac%uCSQ5L ?knXSvmK');
define('LOGGED_IN_KEY',    'SopIQy#qqnhnsD-V??|iwJ6;9@w^:s+|qW/e6rjv28p3*w|cbv?OG~1X2>pg0O;#');
define('NONCE_KEY',        'cyoAV[8@?WCPaj>[?/^H*{)4JK|}.+<d:C8%E^k0sSv|Waqzd|Df?2=h;WliNd?D');
define('AUTH_SALT',        'uXd-})tl!.XGYgSTR)v]F3t(9Eb]A|p?+I~qp^KF33_hST0H~G?Y1K|}/(|)z/!g');
define('SECURE_AUTH_SALT', '+No1Ox|p.3m^;+r_-9b11`S_y&sj$KJ-_O|:D&$B@3/_sY-F4+>b8(B/$WRi<56`');
define('LOGGED_IN_SALT',   'ON|:rF- 3]#W|HCpPzzaUrvnBwKpo5Dv0B1dQZA{9KdPYBXCWq6RT|MHvwDw|J0i');
define('NONCE_SALT',       'H}41Z}tu-y1jtv3<,hYX59V4=0Zb8pghXl#OV.<mda?!dcvcYM<-KuEqc1@z{+M$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
