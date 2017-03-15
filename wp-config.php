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

if(file_exists(dirname(__FILE__) . '/zen-config.php') && include('zen-config.php')) return true;

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'acadenj5_ascents');

/** MySQL database username */
define('DB_USER', 'acadenj5_ascents');

/** MySQL database password */
define('DB_PASSWORD', 'tHafa7aSutac');

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
 * You can generate these using the
 * {@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org secret-key service}
 * You can change these at any point in time to invalidate
 * all existing cookies. This will force all users to
 * have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+lAWvmu{3+R|+|n#$1.!@nx-5Q%sX3TZ2 <G5CE?Itp|QGg=q-Wn.[-=U~//A;w[');
define('SECURE_AUTH_KEY',  's1&~;:{Vd&QO7)tVZ!&Cp(R4gH&}kq;7%@-3x@#@UkUd^i1:|A_+zw_R5 60w0p6');
define('LOGGED_IN_KEY',    '5ZQo<kz`,GA.r-!OQ(#:o%st>rJ vc)-+6TJh-TX2Quz[]a #+r^;+#Ror-<yRL|');
define('NONCE_KEY',        'A-%uD/>)pff}J8vwF5P .4<^;wSQ!0A7)?8QSD[_znw`X+Rn|5pgB0+)]I{r9]w@');
define('AUTH_SALT',        'sM;kPO?<}OAevN3]|Oa,wU`z{|k;qb@ZJ40F]+!?_M&l>|_#RP[K[onZxI?s-lK[');
define('SECURE_AUTH_SALT', '1}*VV],ID=CM)h4 ju+sY[vEtr7X|a?;p0HJ*Q$!06BgRy#{n%Z#U|^ L0tZ~vX^');
define('LOGGED_IN_SALT',   '6kvTfJp0L+^rC h~FqT<(&z5x~v^#o{98^&=e.w^bE?rh1yc~t6R>|glJ&SQyz4)');
define('NONCE_SALT',       ']<Cg+^uJxZlz<ZNzfA&w^qJGW_|wg|a&37{C/8<cvb3/i32zGYQo71)s7^g/hXM}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Disable automatic updates
 */
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
