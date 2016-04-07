<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'ep_16006_aseaccu');

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
define('AUTH_KEY',         'Sa0=Rt>/W-k*A^&(Z}8d0#fKZ;A)@LiT}h@.?YG,#,`.Y,A-@bshmq/?]A%5Xw}M');
define('SECURE_AUTH_KEY',  'p?7%[8DE|pW*eO+XYOUg(1=4cqW?$!G4jPOb[MEVc40=HB-o--kT~4EW$gHYe4T{');
define('LOGGED_IN_KEY',    '^X|(]2rUsC _gHt79w8kIrL>pVKd}?v9yk5Il^EA D#!:>#,.0=V^380eFimD~a&');
define('NONCE_KEY',        'y`< 5dHTPAL2&*,9b0+UA:W`J<,>kQe`8?%r wnl[xHi{k0{G~<M$$DQ}#>qsQm,');
define('AUTH_SALT',        '10g_9sFmYoLXBkuqps=L)`p^2{^gzokP^V+2W3aX+},I8V<~2kPn&O-M`_%}&p/O');
define('SECURE_AUTH_SALT', 'WD 9DnhM$0s<z*+F83X:},;k&{o:li06TRI#x0@.Z)?nk2]tMwtrVqGW6r]vWr=&');
define('LOGGED_IN_SALT',   '~,v@$4Jj4,8x%Q,2yg3;4<FcP84H$q4k]~Yj|IU2%z:A| )usGZ9`-6w6km{!Y{f');
define('NONCE_SALT',       '9#RAu2SRfjIOVL0<Bi,<Lta?5.:OcFOPac<1amV 9[Qi+d%odW(pW$isL$Jm%cOA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'potatoweb_';

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
