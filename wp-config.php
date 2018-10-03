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
define('DB_NAME', 'ngabarin_db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NcV^_x$a,U{<|5=4v?d7FifLj>g2+hy]_./$}|k|C{v<c*JK=>Ma`_--d.4lQ@& ');
define('SECURE_AUTH_KEY',  'o=Y_k5.3R?{w8O{U$X[Pwe}pnf+19J9h1eBXoF:)zkNozc_-P`Jw:H|zm4Sdf`H,');
define('LOGGED_IN_KEY',    'DMM]W)I}U8gSBPF A=>[itqUtIk=PY~)Y>rx#*+l~wz*KRnr#l:;sv(t:nLgDbjv');
define('NONCE_KEY',        'Y0}(G/o5hR2Egq9m!>.fo[Q+_FG)48d/im(EO.1>OzUO$(.Uq4ds!l(r8eRjx[]P');
define('AUTH_SALT',        'DZ_tjnY&Je=G+EOY7cI4pAPu5i9QQE~jk|%RQe$KUC`X9ig!3ysv+w/n*P`3fU}|');
define('SECURE_AUTH_SALT', '],45r8,1il^-aPAvmC|B<8M|QN/^8q6msJS5nMPnb Uh;X<z#k&VP/rfeN$>2smU');
define('LOGGED_IN_SALT',   'LP2vuLMcFWe2NebU[tt,=-GDJpI_&;AEe>k|(=$CRjEcsm#16H[1F=IDCYa7+ZJb');
define('NONCE_SALT',       '/GXtl2dfvwKV|HS*ehB<XJC2);|]#y5p9X:C};rT:d8Hi+ >2d3.E/VB#eul4s* ');

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
