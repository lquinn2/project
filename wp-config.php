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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'ZwzAy4)>J$5uk,:OlW|TGn=Z[L3wG?z9o{W-Y?YK%`E@0]ks2_u%;<(F{1Q(:Cf3');
define('SECURE_AUTH_KEY',  'b-?0!Ro3=F.H@(5>;$6g_tt?)Qr{5ghW*S.*HFb#C&3K^Gd2hDnHOgDhe-E#[s6L');
define('LOGGED_IN_KEY',    '^N(%$d>WKtDvw]hdB]8P!-H,]HTe?kiH+6]V7Hf< Q5aVddv{0G:Okxw,S/:AgnF');
define('NONCE_KEY',        '6b>v 04RH_!x[mu9$V&yQuTcsLr1U-p8b79I&~Os)AOPyxj<)2^t{_fr1hNARy;X');
define('AUTH_SALT',        '9H<,rc&G_icT&YYhJ6td&5<C73#DH4w8H8s58qnrT.6@:M?%w#R#/;&w,BeF8$<_');
define('SECURE_AUTH_SALT', 'jfEU:>X(>G}JZBN%D]@1Hc<IKiKJNF;`QgA@iA:|B:(1rGA|?,N.@&n<=qOD?2RZ');
define('LOGGED_IN_SALT',   'aaKB!WP4#CGS&mP:m?&0yN3a|+8u[dMC{:lX;q#DjwZV.t(tHy#Z?~{&z/$$A7<K');
define('NONCE_SALT',       'oa?!8|phb{:=(NVvX2&Ym?b1mJ%k~CZLx^QOrcmP(>!W>c_uinvw/@u+1z|m}_S ');

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
