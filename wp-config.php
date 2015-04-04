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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'twd_db');

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
define('AUTH_KEY',         'uqfOP2xq9W]={k`5+%M*;;4?[- ?MDjaWMYdH4UpB+8,Yx<$!ShXW_[#x:7SDgy*');
define('SECURE_AUTH_KEY',  'M+0}J7~WOG@fGv~>fthVyd9-e7(@5p@Y,-B3m`!51zO@99iftZ`-4C5_^:*+;3*c');
define('LOGGED_IN_KEY',    'x]-:9#ru~bU>W!A9oH&20BqE<;*Gkpm*A>&e^>Vhusj)I0<Wh-?[]mK>($-5+9mk');
define('NONCE_KEY',        'Tz|tU8)MaOc{lm gDyc3V<JV(qJtDVz~g-l+K-3P{O,Zt9)F}@xfv{~u[A=i>%.v');
define('AUTH_SALT',        '9Qn/WM9@=ktF{2h:>A^k_b{2m_6*:P}-5w-;6Wv?gIV|_?,:S138@|x=S7;](?(D');
define('SECURE_AUTH_SALT', '>&zeG]SauG8sx3W}2IpqD+RBf,e-J+Dl=!>le{ez;B)FkC?nltQH;vmzr-`7mF^%');
define('LOGGED_IN_SALT',   'U@5~MOcuAAkRr0#a7V$G$gM?R 9|*!il6>V%rL,dfp.{7^,lv>G$GXt%_`FqV1aO');
define('NONCE_SALT',       'A<7W~g$a~c}{?sU+6rnG_s63%UXGiF}-Zhe8icB`[ 1%V[BC<_8Lz+Vm?FW*!M<p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
