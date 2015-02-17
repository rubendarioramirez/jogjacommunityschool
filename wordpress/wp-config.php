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
define('DB_NAME', 'jogjacommunityschool');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|%GFC=;q=GGz+?9)ot+Q)GBB31h;#BS+Ry=5h^Enp{^c&s5u&o+X9)W|ixRw<mgn');
define('SECURE_AUTH_KEY',  'hs=H%e5:1#40Z#ci:/^=j89jhH[DhW**$!,7jb5|Q!PG5<T^J29|MY4VXO%C:U R');
define('LOGGED_IN_KEY',    '<GQK:`TRIW-j&*HbVy.$ ^/}ot<DeKUNTs=A8=,y{(<s&L.wIDLQgs`z!)k8/{`V');
define('NONCE_KEY',        '+XW{z-DZ{C#DM<%cxCmU.YWFN6|Gy5nE?lt%Qc/Kd1K<GaaR_(}IJn:=#|J9O-h/');
define('AUTH_SALT',        ']kf4EB&h7?#dYp-v;k{I,jTYZQV??}YOg(Z_`mo++SYm9d)=s^~,`tWEA|gwmg@}');
define('SECURE_AUTH_SALT', '1|nI4Mcb2*_{yg-|k*Y={E{CS.zsju*}Qh=|b;3p9CDAtQ+IWU-lc?N_,<7B%9[R');
define('LOGGED_IN_SALT',   'cH~?L}=<0JQ?0CL+jsk^?Gl)GqAv*.[s1!o_0,QVn!*_(@8;}_Csr?rYLfBOt([(');
define('NONCE_SALT',       ',k:[Y+x?OH;W]H*i^S*r@1+Uj2]O~%:%s&/t%1pF>o9al/%b:Q}ItfV9r+ZH<<mx');

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
