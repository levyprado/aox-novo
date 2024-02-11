<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dk]M-9=9>gmrHk4B-Fkc teA>4UF9opyn:umR}%efQJo*K!^R<>D4]7NOx33&<QW' );
define( 'SECURE_AUTH_KEY',  'Onel(vS+~z-J?oaoJBiGp/m6ipntbwEN-{xsMd?lw<[)S!7-8E@*}r9_s4dfP7aL' );
define( 'LOGGED_IN_KEY',    'm&OW;H9i*2l@jNYuCH@,3bE# s-E+ `L@/FuSL1e@dc>K?0 zSt$@M;pA?A0wfQJ' );
define( 'NONCE_KEY',        'x(akp9et!vgCDN4`,3}R#AJ>|?4b`=d.}uT1%~T.^]Yg*Ujt%b#3v2(pqJ4X#;k*' );
define( 'AUTH_SALT',        'VRb-fM{j :r>#P>IU)kEPu%`F%gts_%a01~q$@mobK^UbCm8tdI{9|E8q5L%8]F~' );
define( 'SECURE_AUTH_SALT', 'rL9~5:]/#5O{i[BIEnMzuuX7nLJOrv.n*2EV4/JTk#=EdK01k#x V1|25rT ?sc-' );
define( 'LOGGED_IN_SALT',   'cBO+#gc#y[J)cs2?C4!5:iR=y!OpUh*e0#kU5BOwIFz9rFr m[l%3;<jcDlth<So' );
define( 'NONCE_SALT',       'j*]>3mqoMNm2xq6vAH;e&-ap]-kGye/[*O0xDKz-G&ZXZgPI#E@@8vGTAfq/<?-v' );


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
