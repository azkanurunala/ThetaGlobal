<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'cO|~uXstFfvLpb!L~o^n*6tpZeJvwWIeUps[oBV%x+N?P^[[Dhd_l$HOhn[-cy2O');
define('SECURE_AUTH_KEY',  '4tEDw]3t(8|U|_1N00s.ui7U3n9k0gCp%q.I I8as^j+|dM]6:V{K*#6C_]Qv/-&');
define('LOGGED_IN_KEY',    ';[J`kG2UmNVUW|/$;AmbwY6L}^vR[?!inRIK.`/?g^;~AMxk(gnL5lm|A>N*-+KZ');
define('NONCE_KEY',        'qf3RLUL*d%lH_f,ih#3AQpdy7*3 LF+IGh??FJrf^fh5AT1r<Bf-)W8!/=lR_KwH');
define('AUTH_SALT',        'D`@VyZ8m_j#:i<~@`)AkaB+5]?,$QQHw%zZ6MJa_N55K6-rq8T!-m]>`TfhJc$EB');
define('SECURE_AUTH_SALT', '@f3BU*69~ECnkdmh<=3WyN49[aX)+ctdfM@Yg)y}k]ov~+(a>ce<y5@1VfIFS9r_');
define('LOGGED_IN_SALT',   'B<iG6tI+m<O$BcVlwC9yMOZZm!ul#zEgG<hcf-TIB`efv~$0xx0i*C,@iJyk)!F*');
define('NONCE_SALT',       'rH!T=lsr(xDOz3+r`aA)ndJ1TA!OiM4G)RQg-0}kT(J;L3EF+}D~JNdP=CU+a|+L');

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
