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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'C8V<+jmyezL#$x;>Cov)8$T*}etP}:BqarE&K_$S(K[}j<i=O~$Sx /|1/2@Vk.t');
define('SECURE_AUTH_KEY',  'XC/jkB|?[(gYl2)~w-Vv>1.9t}Rx^9R`O~ Hq{;N&3Jqq_Qy*#Ka@Vx1+QAI*af8');
define('LOGGED_IN_KEY',    'Sf_4YT=,~E?({yQ~FVrORC8n)5#=DVI:*qC5zvp-ev}O>1 ,bTt#]M-T{9<`}|[K');
define('NONCE_KEY',        '!47Lv8DE!>uhw!G@7Ycsd=(CwOy;4<g)>r>FwuzX3rEXyIdG=1zfqQ6`l(L1u2o8');
define('AUTH_SALT',        ' sY.,~_E3C7{~Ck9ON)aaG6(mi<>K0Nx#Tn<!!%GQT$%j2NR5_66|NY}(ebNS1Ru');
define('SECURE_AUTH_SALT', 'sf}A7zXE4.lg3R-KV^y.T~KH$!Ku2i[R)~d(ccY.t:A]C8V!Pvj[15,f.npr;9E<');
define('LOGGED_IN_SALT',   'YksujiZ@hZXm5;+h/,l`aG~*wb%p!-Vq0S&eJ-yRw!_1M[3A>v%Y+rI#H(7yJ9p+');
define('NONCE_SALT',       'm@VPHbM4t~(+F6bKV:;:at0Soz$NHe9qP8tD7)^LZQ)<9vu{)0{$N[@y6y$*NF.F');

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
