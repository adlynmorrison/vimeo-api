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
define('DB_NAME', 'anunapro_wo0578');

/** MySQL database username */
define('DB_USER', 'anunapro_newuser');

/** MySQL database password */
define('DB_PASSWORD', 'zJ?_d.K5%s7[');

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
define('AUTH_KEY',         '{,YjhejY1XhLkG)aW,>Hy+=i!f=h7w%Z((9`6vjK+~s_dC1W[~w}WaS>4&Y4>9w-');
define('SECURE_AUTH_KEY',  'Z?*YmiChJ h-D;PZFjs^1K),j_KBNVaA4@!>|~SkwM3(ux^Ak5*XwGjI0l7gIkh:');
define('LOGGED_IN_KEY',    '7/GbXU&`{2]wWg*NA+8%)f2K)i-dr1j=3H)&ciWXo|;PVo|r:a0V>ih:N|M|N]3<');
define('NONCE_KEY',        '-sH!zP`+6H4({V`G H~Rn@}:)#Bj&9Bqh7+bokJ>|z!8O+t?`/8)k$S=0I7UJtc|');
define('AUTH_SALT',        'uy@QR+Q?I7eXcK3>x=ZP2/MYU/jr`1~8.{YvtIM)}uaP*0<^~o`}u#iuSD8AAv`3');
define('SECURE_AUTH_SALT', '3ZP~|,t:Z+,o-%qSSE?p-N%gC0)ETbL9E`_N5|!T>JvNKOBJ.@0!o6M,RcSJCuj@');
define('LOGGED_IN_SALT',   ';-7*-,|ujv#E6(bUrzM%Sw5ykY[w6wTFD]otX*>eHF``o{J#wb`=<DZKn+DCdtVl');
define('NONCE_SALT',       'E/6-2|}p>LmIa<Wx-hcb@mW`,*(-1-)wK@2sWbv|bf|=/U1i|Kna{[W7!eO@e0(u');

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
