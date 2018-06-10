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
define('DB_NAME', 'phimmoi');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(jLE<rgcN4} =q]/QcDb6,t$[8y~5(>tM4gVpNP&mY=Nm<QmQfQVHDVhtq@s8?Lz');
define('SECURE_AUTH_KEY',  '2Aj/p`&cJq)=SAV7z_Xydp@FV/eQ%UvS5Y=(v%l:v+&.[KiUq!H|>@n<<FbwwGOM');
define('LOGGED_IN_KEY',    'o8+gZ3E~kRn4r0pUT}b/KJ8U:1?KDy$89fQ&f]H@4N<[bi7@o*KCw6}k F3XL:pv');
define('NONCE_KEY',        'rXwY`|k-8gff71yD3p{F;]ENEKI`L4|e[Q|#F6B(MDx*!73oAk?`6YT#75Z;)*hC');
define('AUTH_SALT',        ':`lfw/D~hLW)yhEJZMD543J{D, Ey59!LQKKHgU{Kvke P;,xCA)4rD.u*YwVQdi');
define('SECURE_AUTH_SALT', 'g9Cfa2F=vq:jMd:fZT[O2QR#rH}|07J9BNpIFi#]diPL;hfkj6[9h*Dvt#79.9a6');
define('LOGGED_IN_SALT',   'l@j3h]s6ef`c4=S/RpVbbd{rVW=-KGwH=]^dJT|i&t:DwdcR(wZ!-IBJlkzTDfu.');
define('NONCE_SALT',       'kM kgW 4VR;~{<P+BmjUle!*0ef,kgwJgSi&NY,D8YvL]QA0{u-cOFK.]T^_2;qb');

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
