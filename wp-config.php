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
define('DB_NAME', 'heroku_0860575cd141ac7');

/** MySQL database username */
define('DB_USER', 'b97d3a7aaa0ef8');

/** MySQL database password */
define('DB_PASSWORD', '6faf4971');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         'THRYAjxWysS9fowpLqp8?e|k),Ao7IJ:[!4 f^^h>OCZ{~U|Le:r+#@:A}Aiu>Ks');
define('SECURE_AUTH_KEY',  'Yj=l@gt]14/t[?_aT)O$^>.qshO])Ak+_O{bxD6KkDiX3$?JY!PgiRtj&0:=5=R7');
define('LOGGED_IN_KEY',    'B+c ZAgO`27]kaj$TN=4W$4+Z#!j8Fo(t5k_<*QD1nnn1T+CI#%c+Z~[)qV&@Fr|');
define('NONCE_KEY',        'wTVvyMAOM00tpaMI-) ty>3-ODMZv/u9bT7Fq]K(ix(E@vAR*-Q$X1~6h3R()F!,');
define('AUTH_SALT',        'Qx,jd{RBZ0*)p;PU=Qt)-SOt$tMHd~Q*A(_Y&alMubO}AkTvoQ4NIz=Ud=+B1A*G');
define('SECURE_AUTH_SALT', '.{kO?}4j]6zD|80:eX_%c1l:65}:fQRFUu8.l,z5DA).Bze9]n,lRFUzXspMm)&]');
define('LOGGED_IN_SALT',   'ryw0Y{J1li3XP7{(U>0!Q1JsC%Lvf((izX<+23vo:{xP5l`(i1~:]R@r8{<p(*`*');
define('NONCE_SALT',       'Y,Ou{q@wI.;+?0I;t=^RQx.]R[k=Bd:~[|7 r:4y+ZJFe@5l>IM!!uF/Lj:~`~1f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
