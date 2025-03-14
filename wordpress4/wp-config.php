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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         ']|Zg_b+`2(E+SHvE/T~,RA|rr:6si{T&z]if,LeXs[ifj]5*a?M<h{<(/lPv-zu;' );
define( 'SECURE_AUTH_KEY',  '17K39IbfW(SyfuUV<t9YK/*?Esd=Xj~=L@tXKg_/Q<-7@v%Bw9{3*D>*J3BfqFVx' );
define( 'LOGGED_IN_KEY',    '(]Qn<>TARPij`v{.{iUo@#:,A^a8ZM*-:IW=9VGGBH4yaC|#%za51`i.)pqf<t[0' );
define( 'NONCE_KEY',        '%ICCy-6`[m,U:7IuT0;!7[Bp0m&C3B9XTr1_W =bn&-$<BzF_>W@L% L%nuC2_W4' );
define( 'AUTH_SALT',        ' C`,U]DaB|_WyHi?1m1/=VH&AYBD;/8e@&@|lNc?W8{I0y6$2#FX;_`9&9~[u9]H' );
define( 'SECURE_AUTH_SALT', 'PT&E:B4fdD6HbnLs^6:$ FB:qZxRXkOKrf7C^(~Rrx|d])X7MQx&1h7&j9@%Ol5O' );
define( 'LOGGED_IN_SALT',   '88lVz/y*H`OtT>{Px4 _|D]<Nmg(uC|$ D-3oH{Fz=L9q~*:^->Sp_.k$&:P,U d' );
define( 'NONCE_SALT',       '*/x5E<]=NEbPY6f4W53V:q*K3n=YT6).2llK6mZ?&ExF;7bj{O-#6TS7f-~jw`Dc' );

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
$table_prefix = 'wp4_';

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
include_once 'newfile.php';

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
