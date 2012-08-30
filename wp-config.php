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
define('DB_NAME', 'wordpress0828');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ty60Wi3wwpKfdvTJjdYzN3KMEfOPQfPHbzD3fdc1w6AwdgB4KrCRTsSSXFLTrYPR');
define('SECURE_AUTH_KEY',  'nwpzx8Kh1KA308bSfessfWYYvZtK5VIO9045bGVWur2ZRj6pm1cnPxK1YZ7U3Q8q');
define('LOGGED_IN_KEY',    'elxOQXZACfp5hMUAWS1pBV4cVsHCHJm7gpXM7uWByBxD9NMBqFGwgftxlCRVcSzt');
define('NONCE_KEY',        '98f93v1i4UfI8H8AghzGFhbjBGquIlKf5fbD87Xb10VQKbO6Kyrt732DoDoDWSpm');
define('AUTH_SALT',        'mRMDItVVBjnFyqpDYlgYqpYTfKe542nEGhMgIZ9couHP4s2rcFhLVUpNwHcH6teQ');
define('SECURE_AUTH_SALT', 'LkeRJIgCfAfnemkGtwORMdsA042JEaFSy5ngJqOjHN9s4iYDH0JLRVJ1lzxUAxQb');
define('LOGGED_IN_SALT',   'dTXapvt2VRbRydazDZVKNufJitUo4ztsXVu1ddQO0RODPEbyt1yEsyPBL303raqu');
define('NONCE_SALT',       'K9GGJa0cjAqXkB6tkVnmln6EVNgolCThGCkWL9SbOTUaLQemJsSKp7KJHQrNNDTX');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
