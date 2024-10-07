<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'montevar_wp444' );

/** Database username */
define( 'DB_USER', 'montevar_wp444' );

/** Database password */
define( 'DB_PASSWORD', '6p1j-c!S4x' );

/** Database hostname */
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
define( 'AUTH_KEY',         'yzyn0vw3uerntd5qsuwc81b8vclirxnzqxojupb8thsvnn1sfogxfw5w5rojdwng' );
define( 'SECURE_AUTH_KEY',  'bnlxfl3dl5r4crvrdmifm9q2bhmivfi5gjgv8y6l3g5whkqmnuhqlqn8wnu8s0cd' );
define( 'LOGGED_IN_KEY',    'baitx6qwprlefu1ccgjx7eyt508hn9ewnfwn1yixelmvy9mje0thvgjgcmrnpuym' );
define( 'NONCE_KEY',        '2raktsje7psvo75ytxjmbozb8h0qz3ddk8f9sunfeyntjokfsmtnfo5incbzwj9g' );
define( 'AUTH_SALT',        'dxcxnxlywlnxhxw3uvokgemhaxwox0v6fmy6i73sitqrldlseknruhr2xqxffpai' );
define( 'SECURE_AUTH_SALT', 'tbvoysoharz1ml67qzlohze82rcvf4vgabgphriggy0trwc3tlhvzepl2bt9eznl' );
define( 'LOGGED_IN_SALT',   'mirwz5sm4xpkki9sedzpvmojxu1oxjh1txgx91rs4oyzmyi6cpw4uwikdizf0fgz' );
define( 'NONCE_SALT',       '738xz0i5f2muigjslwbd4ie5vrqhlc9qbpj2xqjkytjomn1mzumavvthyjdazgf2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyu_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
