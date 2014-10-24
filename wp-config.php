<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tutorwgy_wpvb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8g39lpofjuonchdk8k2vcoj26cek3kiyc6rp9nknaouazvxzuhyduugzvps0t1jf');
define('SECURE_AUTH_KEY',  'cfkvvvaow42uvrqckmn0axpda9e5kg2h2mnkmtgbrcuagpcdx7voeeyd9u5f49hm');
define('LOGGED_IN_KEY',    'biajuasnbehbs2obx9yrtkjisjql9ol0eigak8o5qh7jij6qkcqjebwnrihmxs4u');
define('NONCE_KEY',        'fbf2qbd8uohbsealfqkpy9eczy5zwrghtxzx1retmpreuxqpswdmacfgqavjzu7b');
define('AUTH_SALT',        'lmroygzwwnghkwcb2zavlob62ytsbquwlbtuyuvmytdxtvomhiyfs6vwslcndoum');
define('SECURE_AUTH_SALT', 'exgofhijpbpaohrnfpw8suniie4erwwjdhjptotz9uxy4r8mpsifu2w0caba1mup');
define('LOGGED_IN_SALT',   'gab3sctabhdwcqsbhyywpftcohxd8xlplo3cxk0y4okrfj9btlrxrbzewqy2ku28');
define('NONCE_SALT',       'dz9ksihgplaklbrusljhf694evcvpr1qy4oq5v8gtvnimktryu6lt97dpnr4ye5c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vb';

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
