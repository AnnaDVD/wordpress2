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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'L*!$.}bmJ)>&wGDE|-pvRSXc`hHV8CYYq)b%v$;z,]&I:7>QZRN+mG:X&w>4]>L.' );
define( 'SECURE_AUTH_KEY',   '=mp>)h+}nST,E|Bn+/nn]SgZQ@V0N<.|8D1~9N}M0r#.|7kbuK~tJ)6Ie {Qx06Y' );
define( 'LOGGED_IN_KEY',     'v/2l1.&F<6dQ{ek92yRzU{MIwb~b`/g%^Gq0TxXtd@xpbFR.?|+l6}*(`!)TZ49H' );
define( 'NONCE_KEY',         ';8?zCY(b>/_W$Fub,,.},LpF.]bCNpP_,!}[j}VZ}$C@>Nc7HrUZq?GG5{i@i[yF' );
define( 'AUTH_SALT',         '$tv3RTs%$z~eAD19LQ> L*EX2:l+#t,>MNRZ_OY-:S5uli+2wT1NzbSlu=aj8D<-' );
define( 'SECURE_AUTH_SALT',  'k<As?#>}aU-|,-LtB:RG)iwo`8lG-h-)e6L<d!hYWwwOk8dU~{Z[/_i]y$tA<D2r' );
define( 'LOGGED_IN_SALT',    'N,0Ey(:K0[%=}Z9G-B/[?(H+xoxcKR6I,.H7![`z5j^JQw=o*IkGm(yMH{0L_dRM' );
define( 'NONCE_SALT',        'uIiJZ:IHU`g`pLXI|D=S|=nk,=+8*|of@=gC|<P[~erQW~O,V[`Z^Xe|>X84O7e7' );
define( 'WP_CACHE_KEY_SALT', 'oxRlmH1:,?H6c@~^6#@ p0ldfz.y^v ~%j.JdZ7kRi3rg<a5zv]b3^*rV#M(hbMm' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
