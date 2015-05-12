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
define('DB_USER', 'CentroTextil');

/** MySQL database password */
define('DB_PASSWORD', 'centrotextil');

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
define('AUTH_KEY',         '-?Hz],A~zxB-,6mBx9^6KRH$o]OlEwX9<|^6qY4tWbN4J9o*,*1+RLs~<|ewi-O)');
define('SECURE_AUTH_KEY',  'OM_#;1yTfp|cVBl8i,nR72C.UDO8wb@s886D`P H.1)Irzcv;<,OePT34m+62(8>');
define('LOGGED_IN_KEY',    '^M=/|f8+0aI:{C_:aw_5-wi7|jAGOC32.!-$~+1wm.=1o&`5!Uv+w- =O!Q%%z!J');
define('NONCE_KEY',        'Qb+-DC^yEDhu]/.O>MSIg4w+>a`xe-.>e{~[k.x+S%Y]hagKaO7fBEb*Y5k$wVxf');
define('AUTH_SALT',        'BJJSL,OFNc}G5r Qoh3>[Ngud;|U~Zx{M|43=wBRL/}j,(LCiw|lsgf5UAn)WGQ+');
define('SECURE_AUTH_SALT', 'Ox|}-N`O=i}UVZ#C2Tqz`]pl>`R#|?HoIT)HTFe>O,fAqInGTbF;|U |dybovx_#');
define('LOGGED_IN_SALT',   ']::?,z7T7)yQj]=KN[U$!c-L_j%EB2<*?:KoMuQ3(x{ZiK]u,D|Yw~mwic6|nR)l');
define('NONCE_SALT',       ',85R]nA?zkc!G$n.|G/@8jCDv&YIb-<I`|!Lqyw[U15Q~D1O+_es3NKM-Z4Q4V*z');

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
