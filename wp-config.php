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
define('DB_NAME', 'ogomez');

/** MySQL database username */
define('DB_USER', 'ogomez');

/** MySQL database password */
define('DB_PASSWORD', 'TGjfCdTHVsaVzvTq');

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
define('AUTH_KEY',         'DhUY5nA|-l#[u_LC,sn.yIUb5W%{$[xDKr`(huC/LcVm76@rq=}%YMbqi#MNOU>*');
define('SECURE_AUTH_KEY',  'LRk.3@nJU~~8*MV^:a]QO|P1?<ZUp$sy[ZG{GGzT8^.K8q~L6!~*ZyM:dw v}v.g');
define('LOGGED_IN_KEY',    'Mq8d]1rnqQ>%.B.M1I*CS/l,VY<.i=<HC71GW!Zl)&l?(9PT4b(Q/)>F=WyLb}:%');
define('NONCE_KEY',        'Ae`4rAp[V$uL)Yfr2~tfjX#CJdXZw#WjQl,f;CAkPb9N7KVi@sFquJ@tCJLX~0f~');
define('AUTH_SALT',        'Nr$!]8X2[:7X6LoB9Wnt%m~6#5GcSQH>A>~i*!<[Ag%~,V4@s[$y! /AuOU8D[o ');
define('SECURE_AUTH_SALT', 'nlC`j9rwk^LG-(<q[W6X,oR$~{y[m3#mOhfxu $MQHbhZDr8#Vb 9qs_cF;;zkVL');
define('LOGGED_IN_SALT',   '4LZ9l(H]dd2Yl9#>555Gu:l~E>[@KUMrI%b`-%I[C.L0VE0-c2t.VID<L`N|F`b ');
define('NONCE_SALT',       '41+kmId]1cbZ}8zbGCuWA1]CwRNVKuhsr,X[5$/^SMM6|?ul_{I1P404B uJSONC');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
