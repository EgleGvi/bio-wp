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
define('DB_NAME', 'bio-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'CU`*HMDA/tOYCzr+Wh@5/oxwp$YG^.ZGi8zrbE}lWHp<7e^-3A3v$(soA<SzKQ90');
define('SECURE_AUTH_KEY',  ';dhY}2`43hnqVHG @;Ye~9T_}6nmQb7!][l!T%j&7WWTRus8`Sy{v_.Mw.,=c!RK');
define('LOGGED_IN_KEY',    'J2jj6h;bxVGB-E|:@7<6[OGy|U>y;E6a(}9C`64Zt-U?xPHi=cD!.x!6Xc0!]?ET');
define('NONCE_KEY',        'Nr#9a=zcV#ykXqzrH{*YauIVh.V^!}m6hV?D_^MVW4o?F udlos:N}g+sZC=8aBy');
define('AUTH_SALT',        '}3&%BxtV>Yz%IuH)cCT1YFcyg$ye6`3Qc#Dvr*vwdv3w.eBJarPM6P{HTkcO_~S!');
define('SECURE_AUTH_SALT', 'GzE;$x_h|VZ&oi(p;`yP4z|`.s je;vAPoS|Mw~0 YJ:jmOIzK7[foQ <1T N>;2');
define('LOGGED_IN_SALT',   '=*U2FJ+$[SSu?)U1{6B9k E  eMUKsh}]qS$eFn)FVTBUpiy$B~+!w5 5L*)){}F');
define('NONCE_SALT',       ':H[.PZFCwAL_DOZ,UQYDb&%I$}3]IWNPYmJNlN_^7]bMbf?EI=hV]H2?36igQO>T');

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
