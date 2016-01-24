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
define('DB_NAME', 'wp_study');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'o$u 0o|-xx$O_Gl>^WLIU]Gj>R+cfN4MRX+1;i,sF|t&3MBQV!;[|-$tQUwy$qp ');
define('SECURE_AUTH_KEY',  '32H_GRAYG<sEU-ZDLNMZ>08@LE2]bY0[/JP=fd1hI&s98Z0[1[Rp`z3XUw2M(;ZT');
define('LOGGED_IN_KEY',    '-WaYU0-[c[7~.M]w3%2H?KpGG$:Ql$qhDcdixC|KJ[M N!aBlyRz:G;h-:.xjqbS');
define('NONCE_KEY',        '|<=4bb(hOudR`X]/&gsQ==J6EiQ61qS?-tz]H,22%J,5xc_ah?+K@K-zK@g$H~}F');
define('AUTH_SALT',        '2(`r}d-FIo_n]_3NB-NF+V,zKr]De7&qM-oj0uDw6ji:=@~|^xX1q-pg*R7;NUkD');
define('SECURE_AUTH_SALT', '>s&^kSTY2LOsq=xJ{u^r?B+U6b@*!s-oFD7`3a17`:xxfsG?w4_YL@JkYcjpCggJ');
define('LOGGED_IN_SALT',   'GX9XWsp2gK(}!u_w~!|,CoEm`iw!)&y/->S%jr_b]d9`NSU{B:s~QVnzV)^cXE,h');
define('NONCE_SALT',       'kR:p.Kc2$RfO_xqW8=7x[Vg}{W-1cqaW+>3a`Es+gH`~k}MW23dR8z5T.Cm$Kh:9');

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
