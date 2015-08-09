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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'wp_test_user');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'H+ kk{![DkW8-Yda5lMUyX7<*CSq7ly.Oswr AWYH/dF<@,T.Gj@NZ!D2bN9^Ce[');
define('SECURE_AUTH_KEY',  'c?Ol<pT(IzYX~ ~~vyZr>n77o*]Q+|6 wx;8%~dvBuy1Ib<`}u}%e@DnEn%1q#/R');
define('LOGGED_IN_KEY',    '%c)5W}O/ChZCeFrKk}dY7XE%G#cw=.lq@Vq6? Y*8%SX_e:VEj+54CJU;&A3QrzO');
define('NONCE_KEY',        '#=)m9AIY/wl<.!>+bbTrc%S,W,9mV^bzd.]huB~EY~^?e9~N)-IxduDlJE5dFr=b');
define('AUTH_SALT',        '6i$Y@CD`ih3!q~-S?aFO`6X6@t|n{?)`L}/#EdAts,$w9Oohb =pV0S<85.hbm1^');
define('SECURE_AUTH_SALT', '=`Ou6_FW^~$s&ffik_HaU:s<mM (=D~fe`[-s_00tgH}L<DMhDO$@0u0>rGp}*2b');
define('LOGGED_IN_SALT',   'c!sH2mh=5jzNWep```|q{c1YPyCa:X5A&6}B?=:K0:CUOh,){,;C9/ryw4br,gu{');
define('NONCE_SALT',       'Ftl11qTRQ# WydX>jVVE9^-+J<3IuZ[k0?2W&Ry%7N)#<9-sbDl#qs5r*`Z `e;k');

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
