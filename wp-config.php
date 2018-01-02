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
define('DB_NAME', 'fmade');

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
define('AUTH_KEY',         'Xq_S$[5Tg{[UyR.-]A0);wM@U+|iJ-#rPFO3/$*1Xc)JULhqXNDLZI(7h?IZsql%');
define('SECURE_AUTH_KEY',  'd;Fu0DtU*{EpTiJ=OGcSMNn83szCOAP~p#.%):/.32Eo^]Wj.2RX_Nw0L/R_4<0T');
define('LOGGED_IN_KEY',    '^%o!d)UZaj($/i5gYH^0`P-v$V}+7c2j]2]M4.{kUT/(RwW>V4Kk*N4cdzY}kY ^');
define('NONCE_KEY',        '&nJc-;Pq^K,M#=zG_ue.;Z0%$!$@B*,!)1;F9HHA$7(PDKOtINC^5ed$E:Tmw^8j');
define('AUTH_SALT',        '0O8 ^,y!k3pRQ//*WjqGVnqba(Y>VYOWDT^ugd`{Ph<w,$7`5!2::e-P]K&%#UsZ');
define('SECURE_AUTH_SALT', ';Hv`ji_VaTtRg<yRQ!Y}-v7nr8&4>DSe^eqw0]`D{g*YMEkw)ffH)3s5!]/aO3*h');
define('LOGGED_IN_SALT',   'p0vUgq,j~O55!78^JloxH/EGi`d<}G}Oby4<%=]5hMusJ_MQZ(Lo>5>Q~~3xNW76');
define('NONCE_SALT',       'eE^21ytT=qC,J@#@:>?2aljU::9u?v6wiwrIu]F|6?SQg-v=drfDT&Ojb$%jLsu9');

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
