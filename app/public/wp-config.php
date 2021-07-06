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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QyBroyZK70wn0CjMogil0F4I9b79mpVzVpkbfFJRsZkZZADTswP75Eg/LNBuO113F/vjBk+EHy/6MQegKkCzxg==');
define('SECURE_AUTH_KEY',  'iVEmE/rJwNwfVEaKMhyqM1nVJW8KjqIg5zloGp40fn52oaU3pUveXd0yoVQcby8h0Mcop1y/XtzxKufkwqSXCw==');
define('LOGGED_IN_KEY',    'BvBIeWNWPlKljgYhVPpmtbtRVFGybbfwmy9fMytPpR8hfGstXQtB2C4e8vFMMRsmk6Yrw62oCGWLtj2D35OOTg==');
define('NONCE_KEY',        'FTgUvtSuEJ8r8yCgpK0wVr9F95WfNEWhekI+C0hBSY6mDT5JhhizEr7ClT0qQxOucUdPh5/7XFYVtEii3u2V0Q==');
define('AUTH_SALT',        'm+WoSpdWBTJrb73VRZI9+gfZ4z/kW0TR7xLRmkGpiY7LdJiWQ+eM2GZVdYrWxzB3V4M9zgWqxjETYvuJUHcJhw==');
define('SECURE_AUTH_SALT', 'YuA2RxTYIJ46hIfHdjStxSgl7SHj15y5+F12V+r1fnchFydIdMdyY28DqbLCTAC/NEiFml0ZWttZv/vuLZc43Q==');
define('LOGGED_IN_SALT',   'Gx5u0cqA/8wVK+D6o6bwY9zEv1w879m+7FEx33KtKLleDWqaa7OsGT3OxWGmBm3IqsE3yrp7/W4z/BY1vCVLVA==');
define('NONCE_SALT',       'njK9wKJB8Lap22k9KJjpOTIrSDXgsAgUFCkh9BrzDjS8obIKcya+pu7PcnW5XexCpfV5fj4Haa4VhKXW+AZhrg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
