<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'centrotextil');

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
define('AUTH_KEY',         'Dfwb<Jxf@ic2|X&lbvZ~CIZv6wf|P hyNZwl`*4vS|7hUh9KhB;[jN^|(*Dz3VgK');
define('SECURE_AUTH_KEY',  '.Ihl#.KKnh8eBKZ;+dICp~4F)u39,tToBD?[?k83_(8O$YV;[Z9VOK>f,+d^J^PK');
define('LOGGED_IN_KEY',    ':G|2i|cMHCWO>-~VuxCNp&o^_4<(Ts}zK;^,_yIbd,i!|tF4Sj|y(@gaUy>SGl82');
define('NONCE_KEY',        '99A2A<<6v;=7+I$BrM#r%Z6G7(bODt6cxgChi8;6eeiR1_He/iyeGE|-P$>NI<f{');
define('AUTH_SALT',        '%YazGp!D44;~6i=4QG#{x7hxyh. C)AHqk>M<j-26)TyD?A9(||NE27sp!4s-J=}');
define('SECURE_AUTH_SALT', '~|$3!h@nG{u8&8H-DF0gr<+n8ufY=T3$Tyo_;J?H(uD[4~XO-ci9E8*x0Rl|fD9j');
define('LOGGED_IN_SALT',   'b%&pa6&6JBdj2WN$k?+IMJc0e|jR XmO5nu,g|)O2%BdNd>t/2FTq9,Oq9{{h+A+');
define('NONCE_SALT',       'RI]Mc1G,$`n#h.D%jA|h{VJE>(`u&V#0#zJ/_n801`sTr,IoYZ1LXTHKw6tUZcui');

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
