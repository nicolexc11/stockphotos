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
define('DB_NAME', 'stockphotos');

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
define('AUTH_KEY',         '*Nr:%5|Ei%XxcZpAd48p@9UU<1B.US 475QXLxVG?154Lxqxcp:c<~#9yrd-Qc,E');
define('SECURE_AUTH_KEY',  'ye21V`@Gwa0$6H|]@r86}$6E+zZ<w:fS[ -&2uVd3&IbEfvJ!:WgbUyi%4wP4;q?');
define('LOGGED_IN_KEY',    '?`*Lv]qD+wg.I]RcIR{|y3IU$&A[tqo=(()RA5[O=626|t]$]RI w&fQ(KrT6E4g');
define('NONCE_KEY',        'N:N@e/;53w<hv{ry_nFjj1Jh+U~buUy|_FpKKjI19dQd3bNj|4M3GBGZ0FKv3vu~');
define('AUTH_SALT',        '-;?YFeGJ3-WrfveFv<yo#-1b$J=4] FE012VG9*>m`7=Mv6<e_sBR.U!G3nkEEJI');
define('SECURE_AUTH_SALT', '}EFLn}~pyvaZ4TL/a3+8q.+o/-<<[{<UUAB9q@AsN3ET-LT-xb=+Okc-~T2kWETR');
define('LOGGED_IN_SALT',   'gg!$Iv1*KN,K1k(s#+x=nGdfiXX5dwvS,FX|%8@:w]E|`+6QOLsO!7gF<VZfx0Y9');
define('NONCE_SALT',       'dif-R~^$ZJ9^,yblh50G8m=u{IUT,Wg<&dUME0V#|1j9htF)w2snqYZ|^{2~(+G3');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
