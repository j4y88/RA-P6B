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
define('DB_NAME', 'ra-p6-db');

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
define('AUTH_KEY',         't|4$pVS5>m.)^`<}nXM`2,rWx5Py{]$rI?;[vN^rBkK>*L[oLMsi3u}Oag0)81T?');
define('SECURE_AUTH_KEY',  'jBm($LK7mXF9.2l.v,1#x8f8DXe$?&LT}4;_l J#UJ7+[#s{/=(uvCy.yq5hAwI1');
define('LOGGED_IN_KEY',    'bT}XtG]i&-,,:nw_rE{A2vdXn}BDS!>|Eke3Q7B$f%J->z,CUjT*D4sCeu`VL RM');
define('NONCE_KEY',        'gvfGiqVmnm* )Hx!8%qT@@q!8Msg(n@iIIy&jEx6vqj3%7,a9nE9p(U|:S Z:GkR');
define('AUTH_SALT',        '`ok|Q?{&Mg$2`upDLbjR-URB<.6.hjh@.M$u,K [G68@6IwBna!2!3PXbs-|IFwx');
define('SECURE_AUTH_SALT', 'wbfMG>cep%Mp.S3?Edu%6GuYV HRQD=]=c1Y&+Z{D2gP>T`CuYNij1|,20p1jPUy');
define('LOGGED_IN_SALT',   '-Sge`,/(kD~FQr*lZ$f/RnPgZ[.{QuFC$;G:cg+6 i/?yNc3D;rr.<6R|~N[qVu`');
define('NONCE_SALT',       'v{ii#tD /+x#CfggUOLSl*<)/Z$L-6s`FX7B79YNw~~P%k<0e)uYY}WWxLW0H7[~');

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
