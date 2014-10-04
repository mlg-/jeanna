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
define('DB_NAME', 'jeanna');

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
define('AUTH_KEY',         '!ASt``.,U|&& ]p5XQqzF>_}:bQb~@P!Zie@Fu|1=8VNfbZp,%d:[R^qHrDNi0Wf');
define('SECURE_AUTH_KEY',  'eFS!NDVYMSk IrKi_(KH#A?.P^.2-9U%#P{-H{cp/F~}qD5H+V*0px9-x.V4Wn&7');
define('LOGGED_IN_KEY',    '~):(.2IR+O.Nkv]$5jX-_tI|9|r8+w77gMrrt(ZZRS,{uwiJ0k2)1x.D4EyJ+C|*');
define('NONCE_KEY',        'GDIpljX|4%~lY<&1wA1]KJhaFlCoQ5SH+ZHwF{aG#HfF#rz &PJ^+pdd8o<,0f0|');
define('AUTH_SALT',        '!czg /@%Q>V#s,$#=Z-;Bh29lL[yr-)oPam{`2Y0TD2n]e)3 kEIV#yP8N{?1!Xe');
define('SECURE_AUTH_SALT', 'Jd,{gB=Tes1b5lbQ&sreV%OCIir@f)R16gzE5Xm35oem%nx&Nn|%,f_|[tlX$*x&');
define('LOGGED_IN_SALT',   '|RfIN8n|EV$5 I0-Z8y.N[C/JQT78Pu9unKx+nL^ZBXN|z$KR|k:DY$nV-q5Qs5Y');
define('NONCE_SALT',       '-dq|217zLg|1t=1c_fq@jD>sc,_6A#p{O</5T)#L5ikrJ!-7eG}@z&:Vl]6tS:z&');

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
