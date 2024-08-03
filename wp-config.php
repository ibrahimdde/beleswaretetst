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
define( 'DB_NAME', 'testt' );

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
define( 'AUTH_KEY',         'KbJ+ls[J1NuR7N%S*?F)yova7}h:`KV+[N$EFr>A=ij82_Wd+$Z9htz1s?5<.LqO' );
define( 'SECURE_AUTH_KEY',  'Oj$?u,}=szgRM;q~Aft#9QaSFfD|P9g[j[hG^Iz*&x@Ux9%%g[ib~OQSmuuARe7E' );
define( 'LOGGED_IN_KEY',    'oS0CHQzr2xSLSZSs[._x]-[h_<*sO+V(f0B5&%[1UWy`|,/1<5.__*IS{x:OlKwc' );
define( 'NONCE_KEY',        '?0*QV+.2H0h2UyC# +#Ln{D8bN;{ahdcDqzu~Sm;5+>#ixao>s<??(gl.CQj{}p ' );
define( 'AUTH_SALT',        '#3[aJXF`/%i2*?&:i3EBJIt1nA5_v[$IYG^Dj}alLB%j@,b^o&}tPO}F4NOlMBs$' );
define( 'SECURE_AUTH_SALT', 'Rg4HgoG!ZMow{l{:@#_V8v= hlT=k8y+B!}!mbngPDwv#H{IY(H8nP,)U@bailJ%' );
define( 'LOGGED_IN_SALT',   ')TkC@CplYOJL~a+qMi?mc~>0`kz<_z6N_q<$f8U??v%d(0;hHpi23V,9Gt%n.[Os' );
define( 'NONCE_SALT',       ' K1v0e(2F2h:Sbo~i}|6gAw$^UgI;0ZRyU~I`~)QM>:PtJ,M4~;vEXR!TaBM1DV1' );

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
