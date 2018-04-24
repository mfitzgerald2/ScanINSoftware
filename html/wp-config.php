<?php
//define('RELOCATE', true);
define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');
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
define('DB_NAME', 'srts_system');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pi');

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
define('AUTH_KEY',         '5unktbdk00sesq9d4x4sfhw27hotdwalzreceo6nl405rjcoqzfsnm5aobcma1fa');
define('SECURE_AUTH_KEY',  'ajd6itdsmgapyu7w2utyug2jjo1lgytt6e015fxcqasam8vve6gzdk7kug9z3eb0');
define('LOGGED_IN_KEY',    'isffeuzfh4c3vpzrw7fz8ju5le3vk8qtv72h9ls83ehil0i1a0bfp8imswqkfndd');
define('NONCE_KEY',        'gwbumwlf5szjkfiy6830kyvajmvvn8tkrshlw8eb5idfjpksmdt0ggghuif9izh6');
define('AUTH_SALT',        'hkjxb4j6swmbpxtypnpjdrgx2k21myxketvf7e8vsbom2k69qmtlrwacfatitoyu');
define('SECURE_AUTH_SALT', 'yb4wye4r038wcw4c9zgx2ydiimireqlf0mp03ewk31taomh0lyibq84zq7bi78da');
define('LOGGED_IN_SALT',   '4go8lhaoa6deqlzww6vsgmnrw27vbl9xsjnjjzuzb5dxyib2mhfqarx7zhpgkrga');
define('NONCE_SALT',       'epv3nqtr4lm8tihflvdprkqu3mhj4vklxxf7ms7egrvqmeve0tq2xxdnwygyfaod');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgf_';

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
