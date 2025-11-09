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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'hcmJP26Sq%V<3l)!e0w/35RC`k9K9 .@b63?l[rs.5ML]Q+E!OmK}]Ao8!wi.^;]' );
define( 'SECURE_AUTH_KEY',  'L_aCNPVRE$MN85-IEK}D+W{?R,Ab~LS(Cqt&UOk0m:W3T-R_={Y-4Z}ia809cIKx' );
define( 'LOGGED_IN_KEY',    ';:~W_d!H6qLGx2]-B7`lTd!fe*qo?iz)K~E!$7yu?TJR&}:;0*;uj(+djjV{ZSCL' );
define( 'NONCE_KEY',        '0EWb^g=XU[kc%^kDRwMI[D=7An[Qr Opd)BzE>/S@.7*LAvgcwHe6M3OH6T`@V$?' );
define( 'AUTH_SALT',        'b;#_uy%(uhXZ@e,N4[diF7A9sAK+*?<.W#s=B_A7msI2sHFB@Te@C*.(.wa0]n)m' );
define( 'SECURE_AUTH_SALT', 'L<wtYWiH9:|wzkWcGI,j1RH#xNoE4b%afUZ_Va6*O1V=x&<>#Y0~xk$`M(4pzT`E' );
define( 'LOGGED_IN_SALT',   ']b>-Ok*Fq`!-C&W!a^FdfcQfGGDK!rs({ChVt}5Cs&(CnhI<8x6nJfU7C~||QS^D' );
define( 'NONCE_SALT',       'r>/Bfj_HIpz*6)g@U}4+d7O.v7S_g^=%levvWbF5xKd6uB[]}/_Z* (1c)Z|{|U[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
