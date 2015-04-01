<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'impinge');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Mv?n)(?$n2/uQEtT9^4mZ&QS]=Ai:F4LRLZ^uDRPt=KY8HxL(e*nH_!SHSt5{oU+');
define('SECURE_AUTH_KEY',  'X`!t+>u0E;:;c+/rG_#~Bl(onPh9/|s)MbKawj|daYBHxV^1cRqLnR4&OHL-Hb_*');
define('LOGGED_IN_KEY',    'p|ztyz?-Gxsl}.o94R`$`ttk:~puo3>+w<u/MR~-^hL_%i?0t,!&RDFOY1rSmd&v');
define('NONCE_KEY',        'y@Iso7-7Fkl@%:M;TcRW/.dKmy+yu62XyMr}/MU5),o#RZyu;304VR49+yxdN=#a');
define('AUTH_SALT',        'c^!,/tOp@t^(id[?4-5 kZUVU#6/_n-|Xjt=hy24L=e$N U n`e5ayQK __>lGD{');
define('SECURE_AUTH_SALT', 'my}bElC;dle):k2z1-hP6+iRd`,1|C1E2Gji<YS3N{+NT6w=`QM8qAnYF=;1C[VV');
define('LOGGED_IN_SALT',   'q-,1O1GPqo^JE*186z6X*#D)PbW-^wGn2NKgjUZFD(GdSRK]@zK:8M05)]HIntIK');
define('NONCE_SALT',       ';ayuq:g$.CYxjh>+[{!+s+A~{;~fKm _Rv}*B4g+({#FTwPRStuO|dx-Y >G>U+f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
