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
define('DB_NAME', 'bpcportfolio');

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
define('AUTH_KEY',         'XU[?+JOK7@~frjM@)jFpr0_ /8<a2-,W4+A tAz8R<:Zmdtb+r?P*RBK$Lwl5Y2=');
define('SECURE_AUTH_KEY',  '(g8[+a#>=.fbdw(T$u|%tO=fPfik16~D1~er*MD:14(c0xU?Jd_TC)`dz-+}+=y#');
define('LOGGED_IN_KEY',    '>e1n>UDl)2IY08fZ0jR|R!:eD:4n`}22s%ZZfkK70qb>Q3yHb}(1_*#a^)aF|GGs');
define('NONCE_KEY',        '+ZOZm,2-sKaW{{1Wl*Q6C=7aFGPkv~>7m(Z4$ B![aUDT;${gl4x&TsmV&~B&.u-');
define('AUTH_SALT',        '=r3d=sI#]cJ4Bb507(]tb*uqe]`VP3?a9(~Z0@qiV:Zaf+c5p}$lSfssodvJl,n>');
define('SECURE_AUTH_SALT', ',;h3su%tHP-!RQAa5Rh!u-KJjRF#Rr:8k!>|`uhV5L{^5uP88>!Y-,g1I(*C_e1m');
define('LOGGED_IN_SALT',   '~$C+l1onm(O5&^gTW7N[Mqv(Ap 2.LVwSx7CU+p&*$:GAVqtBjk9:T;tY!V:UAw4');
define('NONCE_SALT',       '+g2]BVq?~gPo>nJSG}XUQH/y_s1}xQQx)%z[t# 0Rx4<(k[ONe6{4b|aW410,qYf');

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
