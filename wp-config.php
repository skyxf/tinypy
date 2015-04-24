<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'vps');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sysu1924');

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
define('AUTH_KEY',         'JB4+*B$I+YTlwyp,yN9VvkSdvQ}?0B+}3&~,>nv:GidwK1&ZUM~eph+*<</2hI^:');
define('SECURE_AUTH_KEY',  'c*d9SY(GSgmj+K,Ql:-|c~FelAkON.*-?r<9XrU|n(=x+|t#6Rs+]X+n{(~3H[b~');
define('LOGGED_IN_KEY',    'Wk*g_s2d]%+(fd[~soBR~Jj2p!,WmUa)%TX%oI`8,JiF`ln5GMB-Vr{@hj[irgn8');
define('NONCE_KEY',        '/j]zO9XY|%}rcC/@e5~Z9#P-$q}0rCz(f*~l6mDbOs60^B;1[%i}Oa&u08%V@^~m');
define('AUTH_SALT',        'hXsG<GJi{S$m/rKl25COI0:YN);9o8QTzTRM%Y%M/w{Ul^NS8e;1yzotzp]1sJ<C');
define('SECURE_AUTH_SALT', 'JAP|bt~+)^*zdw6=T.;Sw-eX%#||n+$$_NjkBk_}(f4gg`g!HuggA2#3i<GAUrcF');
define('LOGGED_IN_SALT',   '/2+i@3]pYTiAKKsrs?-rmiG(D0A3VB26f9M)/E7@NUi7-+<|V&kT1D/B8VdzisT`');
define('NONCE_SALT',       '|cMLr5VbjzX++O5,L|+o~|~${&:Lp{P1osOSObct|k|ku#O3+zL^Tg9xv<2J|=&-');

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

