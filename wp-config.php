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
define('DB_NAME', 'aryvartnew');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         ',;-/S2D`NI@SL,w@y[]?>Qd-uM^8HuaG0jKcmcq,/M&t0.Nnv!!.|APIQe(^ml6-');
define('SECURE_AUTH_KEY',  '|4n,J7G^ l-R]+e(;bk 0!=maQav`)/pC+;G[IVe<C>6qX*k[f9;]aADNcSRDwk>');
define('LOGGED_IN_KEY',    'go*CyLw+x~A33(8;+n#0<g_88mog@meT03Cs*oa?=[Fg_[K)*[7 f0gIoH=]s~D~');
define('NONCE_KEY',        '^)PZH|#;vrTTp0#L=p}rv{gO-B_i]8k?kwc |j4B8N}l2-K<X/*|m%Qi_c$]}nba');
define('AUTH_SALT',        '&Q{U)u(X/{1*.zvKN)6B fm;Ec,[+pNSWyzZeM<UPvl@Y7h]Ct2E{SifF8 W*cYR');
define('SECURE_AUTH_SALT', '~BW9OP(EvnXA+.+vu>,:|R1x51;qu:>3uREzy<o*a(#y+7iuRmP9z/!j.hVT+pKw');
define('LOGGED_IN_SALT',   '_QG7WXE^3Y:Gm%8o]zvE+J5Rvmu+[:=7)B7k$I43C$4vC6=.U-42x#|; jBj(0oD');
define('NONCE_SALT',       'k[FY-?Fm 1KdXkH^AVJy1`YT_-%s:UvT*#OS)jNswri|1uxq0:?2p/x<aTG0-U43');

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
