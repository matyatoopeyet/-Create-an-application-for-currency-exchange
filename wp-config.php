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
define( 'DB_NAME', 'd132109_matveiseljakov' );

/** Database username */
define( 'DB_USER', 'd132109_matveiseljakov' );

/** Database password */
define( 'DB_PASSWORD', 'GKMHb3xcgJqCB6D' );

/** Database hostname */
define( 'DB_HOST', 'd132109.mysql.zonevs.eu' );

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
define( 'AUTH_KEY',         'C]8Z?Y$>r?P23D;GhHs^8-0Ww5Ijqj?FhQ%_MsA>DzQ2/={s@>~y(t?{iG2/;vf5' );
define( 'SECURE_AUTH_KEY',  ',Bl}X/2Vhq #^|{{01jWZd>u]nmJ)IV]|6WTp^UoVQdJ )7S0F|X8Y(~7Bblv-ZE' );
define( 'LOGGED_IN_KEY',    '8T>#tVBjT3^lf:TT@fF)x~{Amm?j79O-?ya(gQJw,>@<6_Puz&KnJ(ic9^jJ.Pn1' );
define( 'NONCE_KEY',        ' nJ8l>V#%A o]9;l_hp4_j~ibb, mX(e,UwSk4m/`qVY5_vnt|wEJ<0Xoo;Dn7&`' );
define( 'AUTH_SALT',        ',vKUcJX<`sUhn86-x^v_O&L9p3*[MfxZs|k{AR67; NIu`Py~|/P}F/NiBnqO-}.' );
define( 'SECURE_AUTH_SALT', 'j@<e:w&h#:Y**vJC(=CZ& H(zv..QYTtj{aJE]Jm3 j|blGCSxTiEd#&MY!~F^VW' );
define( 'LOGGED_IN_SALT',   'Fge+~@@IF{%41f]i5wVYe,s:Y_)D.?.9UV =rml]PFAh/l`:zvI7$_$tu~Dh@!%`' );
define( 'NONCE_SALT',       ']`b`iD=FeM!Q`R@4@V}:#kY*?3!}$YQ}u=FCn3ApnbT<WlVxtwzK/^$8T9 [r,=`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zxc_';

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
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
