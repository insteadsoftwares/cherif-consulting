<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'insteads_wp58727' );

/** MySQL database username */
define( 'DB_USER', 'insteads_cherifconseil' );
// define( 'DB_USER', 'insteads_wp58727' );
// define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'J!3wAyr=[naV#p^%' );
// define( 'DB_PASSWORD', '-2mpS8VJ-4' );
// define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ylvisjcvmio9elrj8n6uxrdyrsbcbql7edtoahgvz9j9aghz7tsdu3spska5rrdl' );
define( 'SECURE_AUTH_KEY',  'lfqhwadt5xscpdpaahqfdseod5gpi4dqlswxrb6iptxhxmmeydkqba0jaspknrjf' );
define( 'LOGGED_IN_KEY',    'g15xsolo2laehfrgqppp2af70zyofty1fybn9d4mwxwbnxodxzl5jftanimm3caf' );
define( 'NONCE_KEY',        'ydcbwrxlf3xjhh66uv3gkq2rfhrlupfbz8yv1hz4sxxdtfgjfjlkkdhcmgivi8r0' );
define( 'AUTH_SALT',        '8sqfsekce0vnjqvlffxvvvrp6zdex4nsf5tmjoay13dh3us3lgpjhjq4rmvfpbrh' );
define( 'SECURE_AUTH_SALT', 'm4i4evtjca8c3fem9jvy3bkhnecvil5yl1o0ioyslnmrlysfoo6jycgwib7v6vlr' );
define( 'LOGGED_IN_SALT',   'bje0meulbngfhtcniva4wbxk2g6rwickhwvbmxqpdr7g441o5kyd4fwyrsgbqj0l' );
define( 'NONCE_SALT',       '6l9xslfyvqpjlfetkodo9kpppgoaqsbg8ddxhc7bcf73pv3wdmtlcpj5gylmu3fa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp8o_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
