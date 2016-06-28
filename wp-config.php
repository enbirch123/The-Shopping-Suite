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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|(LU 2C:*B.za~C9%&>Iuyq_3uf!:3cnSt}^g!2 >u~Y.P]6:*]vFP~A@FS](Orw');
define('SECURE_AUTH_KEY',  'I)*f!`%Y6;]o*Slb|1^rN|zu|G6 7zuX3MmWYI`Gh7ePYm@sN<Msg#k;wBQ]-?.1');
define('LOGGED_IN_KEY',    '*B-,y6:.?)]`yitJJDEd0[m;QKG/5<@_KJ,b=[;qkCCoz0cR8?eT}luY)z(r9phi');
define('NONCE_KEY',        'H9)vW:agx-8sQ&Y]^Gh|S`tyF`]9S06W>r*XZ6zk=9k[E#,i9LE`!9N*~7xQ1oP<');
define('AUTH_SALT',        'n ||]]^rW8d;opFvIOmW[*{N?MF~*c+b]Oq0wAUaX3$@GY%N(;LE,Fk LBoU@Q5+');
define('SECURE_AUTH_SALT', '-VT>G`*ZY,eu}lYE@/a`6=E;lvDmCI-/e&aLJQ0a_7Jb0KB<%*[xqCpTGs$C8&{B');
define('LOGGED_IN_SALT',   'H<TUZ9.d%@rd$yhd^AGZTk_Z@U%*6ublK9kLQ=`;[}ELp]Sw2^1l#r!Z=:vzim Q');
define('NONCE_SALT',       'ob+tqE{gQ4N|B|M#oM`ah|cp$cG#s-LrF+~[lOQ9ab|0rk:6fK-Nw90tx(^Ub_dx');

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
