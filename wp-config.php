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
define('DB_PASSWORD', 'autoset');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '-PL?h6NugtR-(44-1h*yf*mNXJ1d61=+}Cy9+7Q*PU,BqjS4xg7t>o7YO_P}v-;N');
define('SECURE_AUTH_KEY',  'sI5^<o~e(D<n3ep/3Q_,4RAnWC^`E1$z=VRCsW-uTn`f}1.TXcy$~Ag`1Lz%,LNG');
define('LOGGED_IN_KEY',    ';T}sB#Rf#]zl!{1zc]`QavE^,FWbpJ)hhU~*jNZ8 2F)Rc$Hsoa{H#5*kF6JLv.c');
define('NONCE_KEY',        '%k,T0X@H/rc>I)Xw?j3Eb.})e#z^;FvoL@ZXpzs0b7C6ULKU:lNviS%6$r&Phc!>');
define('AUTH_SALT',        ',-alUKuWd2N}SyoPhrC`yOqg~m!m75$:21?Efw.tD<$@wj{So3SPB<W0&WrvA@rf');
define('SECURE_AUTH_SALT', '.Y#Uz_K35i27V:^`?iZm47$[>s|q65A*QEJq|F[[Xj9G,HD+DF|aN9CP)4=),eQ/');
define('LOGGED_IN_SALT',   '{/ky !#{)@6tBWR2K8GgWws6][=|{WZSE!<C:c7/`;,VFFRTbykn3bG3[s! 0|/|');
define('NONCE_SALT',       '=A(10|#Xok:kJC=)k@41OkD;SSXM>ON{cl%Q?i`iJ`:c]pC.H8:_(aV@HR=fD5wo');

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
