<?php
/**
 * Base configurations for servers other than live
 */
$hostname = $_SERVER['HTTP_HOST'];
$proj_name = 'academicascents';
$db_pass = 'tHafa7aSutac';

switch ($hostname) {
    //host: port 8888
    case (strstr($hostname, '8888') == true):
        define('DB_NAME', "l1_$proj_name");
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_HOST', 'localhost');
        break;
    //host: localhost
    case 'localhost':
        define('DB_NAME', "l1_$proj_name");
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_HOST', 'localhost');
        break;
    //fallback error
    default:
        define('DB_NAME', 'wp_fail');
        define('DB_USER', 'userfail');
        define('DB_PASSWORD', 'passwordfail');
        define('DB_HOST', 'hostfail');
        break;
}

define('DB_CHARSET', 'utf8');

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