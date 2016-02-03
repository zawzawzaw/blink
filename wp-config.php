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
define('DB_NAME', 'blink_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#xv_3+|a~:xr?5zqvf|UZ!d,j%q!i+*SI7*e^=.>?P?h:K#>6Yj$W0vvQVjZo4,p');
define('SECURE_AUTH_KEY',  '$Q[R`@<}DOQV@W&<x`fi[xzRU$Vv4Ur-swko^?OQx%{h+vd|[8R7=RS1Z{|4~Q[p');
define('LOGGED_IN_KEY',    'hc#M.A1fp+^esa|dlIv?SF7YT8>`|giQEcr+nEN.GK4Ka?V DE`MjbTRB<-/Qkey');
define('NONCE_KEY',        'hd+e~&|u]wqqy7J(^DsK6eS5qJRE7PSgV}TW*)v0B+=A]Y>U2V&!x(vq?qNR-9IE');
define('AUTH_SALT',        '2+9kQ[bl44IZx]x!u<BCR[zvG194m]HPw%0SahC+1Y4zf{W3hMK@|1WT^^&NsEW#');
define('SECURE_AUTH_SALT', '{;xf5=s]@saX2Wc7s?v}x+1XX}Q|22}D=NV/0=}3*1r1 (BcZ;LLC#s,|LO_L#BQ');
define('LOGGED_IN_SALT',   'f36]QD.POcnD4*?bQWFTXyJ-6yn?UZ[z._QJCX#fa%RVexo;j>}Q:r[+VX-p$DOP');
define('NONCE_SALT',       'ySj48P5|OxO++n6gW-6;}y-W-l0H/2LT1]^*[$+Vnr_Xo=33nv+:=rw%[kgYP-+L');

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
