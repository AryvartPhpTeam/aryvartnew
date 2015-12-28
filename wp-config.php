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
define('AUTH_KEY',         '5h;P9>)Db8:9LM%ZM{~DY/`m[LF^%,,a!:jTiqTQ=/VNKW[Q`T?AmL~s6m-*5n&R');
define('SECURE_AUTH_KEY',  'wn?%p4pb^%-YD(ue(i`-:4W&LU{w4415(t#u8 juuM}_OrN*P`iFH~||z2Gi l<$');
define('LOGGED_IN_KEY',    '?y8@sh1Xnk;r3hOi6|13#FL::<2U78eZZ_UyXX](_pOAtg!YsIC(6`J_Yp8,fAn.');
define('NONCE_KEY',        '[>5x=$R><W2o[i=Vo(9X#^|f-}=8.75~a(/%j<jzt%ea#_v@Z]1C4rObpO0s|sPD');
define('AUTH_SALT',        '!L1MJ=ntGUo,i[~KRr.LI+bN-N1oZ9@MRXsCIGK&d_>V;_-J#nbinvVEp5 pCi8=');
define('SECURE_AUTH_SALT', '9;|o HMSG&ip+Y,+1x`.{lDjkeD+kK>a%eA.%]--#[]z*wYPr/PgYAq lA*l`+:$');
define('LOGGED_IN_SALT',   'Ow:!THy7-@| mwXBO@/?Jk*<]ZRs)Htb-%gsyx-_(o=LlJ+6ma5^X]%cxL$V3dyn');
define('NONCE_SALT',       '@v3XJH_*E%7oMQPCr^ACzx(3aYr=#|^}?m]M?%u(E`{{%XPm09uE `~ka7--s9RN');

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
