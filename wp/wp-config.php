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
define('DB_NAME', 'sualab');

/** MySQL database username */
define('DB_USER', 'sualab');

/** MySQL database password */
define('DB_PASSWORD', 'ahxmahxm!@@');

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
define('AUTH_KEY',         'rPFU@$O&v$_Rz-nm@+7:?MR<(r:?_<,[*^-C#_EtfP|8E?#*0p%~L+!Wky^bBwv}');
define('SECURE_AUTH_KEY',  'BmV)&UFDS*F~(Dy_r+Z6&8{R9tBwmp|!i}Z_Kq0;]k)s:HdsVCT?b_21YHB7%;-O');
define('LOGGED_IN_KEY',    'h30uDIm/Kf&,m1xKOFhv )NOEiJWHZ2N-.gEbkGL^Kg|L|A0ui2(eG}|GC}/+}fL');
define('NONCE_KEY',        'z?9B{d8-26|x!?+f{-+-iWyKU#$+of@-F8O(9bj}ua(o$VUhJ/PDw;h3q$1_^^SG');
define('AUTH_SALT',        '+K-jb3>)7c`$}7z/{II ei&lcHC`Ienxyga5xLn+z=vkyeQdUXPc5X+OXXK#}hL!');
define('SECURE_AUTH_SALT', 'b0;,SqBNf^B7IsQm@4Upu9 *wrwlLf?3oj5a?w[GYTg{`!q-&:AN<|1~<OOPzqQC');
define('LOGGED_IN_SALT',   '``WieTBh{8kUEo#EuZ RA -JF1;HB53i0QWw/w= In!W-s(g(,oEs<we8d>*CWw[');
define('NONCE_SALT',       '2D<./)y Bi0*#[r2t+.=+dLa(p)igqay|s#h~6eG3:[Znu)|1.wVIS`;z>%]&g8J');

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
