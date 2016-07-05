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
define('DB_NAME', 'db634026741');

/** MySQL database username */
define('DB_USER', 'dbo634026741');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '-c:~:O+va6q|zB{>_~8|MpJY: OS#e],i[>$]JxI5<J;S9^$.k;vBWF^,~OAh>u,');
define('SECURE_AUTH_KEY',  ')}Brsw?*WTb&jfK`(T);A5<)/),2Eh6;|ThISvHECah2SeQ+uQyCm!d[_5bpcf=H');
define('LOGGED_IN_KEY',    'quoUqNtUTGIeG7CP8H chu(eFLG; k? Q6JEm(N+N;1N=aLK*!l_k|Tzj3T.WDi0');
define('NONCE_KEY',        '7jO2`$OfS<e+WHUw?Ab~H{oD<+ApC-w)rfq^%tO72_,(_}ZZn+mmD2`3jhK 5 lM');
define('AUTH_SALT',        'PF* wQ8m3/MNelQq1ro+<Libn]TNE.mE2 P~byyoph&,sy(|;Ash?1AVS,b6+ +3');
define('SECURE_AUTH_SALT', '6:&J2aOqrd0]?q;;5?6:CHV%~v~HgMcc,79#z{a]!;^Eds@TK;0(]]jQ!xM(*|I:');
define('LOGGED_IN_SALT',   'lIaio7Kb?Vp3u_uuqWqH+a|0X8[mk}!Z$:wd&TfZ)-/ 8h`;b6d(ZOH4uXF!j:]9');
define('NONCE_SALT',       'Wtz Eu_FsU)o# ~@/igKn8T%ISw*h7Xm?g-.6y_]~2O5t>T44X8!pb>9B=]F&n2:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
