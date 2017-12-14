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
define('DB_NAME', 'example2');

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
define('AUTH_KEY',         'tIeK=^e4)Y}*$awbjm@QZ1PpF`1o2!3R`ABJ&d=w*`n?du1c^+dJ-EuK|r0Cu}sf');
define('SECURE_AUTH_KEY',  'M7+Y-e8{B0%8GInYEk^}EmkkTt97O[SuX$oEof%k`Gsg>BjWlNYW}n|? -D pCE<');
define('LOGGED_IN_KEY',    'rVPzP X2+4|VePV?eva.;d>z*!;}5RTVg)2{42-Os9<qaeJ NVEf9|exuc}VsS?W');
define('NONCE_KEY',        'Lj5kOo2$?Vf=&MM/GrRJyQW&ts~q+K-yUS^k}-p_CG(K@R;P3Wx1!ll|Wu~*}$m,');
define('AUTH_SALT',        '!5dHLfjI5<ti9N)EKyq}ue&xLlY4WmmUk)|Qo^bhpAqv; JDMl=NQtPW4&c6=LWO');
define('SECURE_AUTH_SALT', 'Kwj*G/].!7aUnxAL-a0Qtd^Lh.f%%&4C2u29<12q]&MZB9~LO0v;iZF<!tU~LkdW');
define('LOGGED_IN_SALT',   'e]~ ISz4sq~;H=F]{/`dh~U^93+*Fdys[+mSE/Os+Tf=>XIm~ALNIo%EMdSu!p%G');
define('NONCE_SALT',       't8W?`E9vCPXq#Oai{y-d M9HDW{-Q.&8|L.kOWSSHgeYJ20{zdmi38u8|JSaC_/:');

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
