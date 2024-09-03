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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'wordpress1' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         't3Ud0c*@SG:UQd1a^RkRsYm*UixU1Dbtm+{@{svkvbWt82g4BpZ|hUT`/x{;/KDL' );
define( 'SECURE_AUTH_KEY',  '!Ytat(4BW5tk|pnGG3Zg{0#,shqN{&d8dg]INQTotAaZesLnLk?Aa.0[PsvnRA-L' );
define( 'LOGGED_IN_KEY',    'BQi}DYDg&1LnkS<+s<cM67Kw#J62wOq9p]@VWB{78&d``r+#f#a|exQ<+x8wPJ%A' );
define( 'NONCE_KEY',        'AHJUSHw|y5ms4nN*p_;jO<i{6$2_Q9!N*tim,e P<;q!k)f*},EPyCLNzEU%|,S$' );
define( 'AUTH_SALT',        'E#p[8k.CU;%^),YO3PDZs0(,-7/4AU<HmZ2r`%2[5eD`;OLC2l/k}4H`Srs06 >}' );
define( 'SECURE_AUTH_SALT', '?ysz*9>Wp}?]K7NU^MWghF/A7|tQftCg ()knd}+$@BtOdwIzP;mJ`jMSwUmIT]T' );
define( 'LOGGED_IN_SALT',   '(o@%V/;I$?$r=:)Iw>3?mC.A&HueQf}GQUZdV76r!,-%o9Oz]3;o^uHZ8vDQmkYC' );
define( 'NONCE_SALT',       'Z1fI59?n3#T%dv[<^kmv~O`@J`d&e*hxMB&k|Sd0Q l%n;zTY*UFf}(}z*oFX^$U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
