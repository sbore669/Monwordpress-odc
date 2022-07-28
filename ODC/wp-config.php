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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'orangedc' );

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
define( 'AUTH_KEY',         'z60Y{a}l]cnk7[q$[mB2PvNHA_oU}Wjo1(I-VtF.Ebkm3c2ZWr@Q~-X~%Qft*%?r' );
define( 'SECURE_AUTH_KEY',  'xc|wV/t=b<R.|Uq(JM,C24u;7*[8}Nmy:kKz~2m>@/x&}ECFwta+#mA@2~v!]Ofw' );
define( 'LOGGED_IN_KEY',    'P0&m*B0xMLIH5z(^%3@b=#T|Z.1(+IYn&dAA*aGs!v78*nd_yy8Ca0{HFYnb,=wd' );
define( 'NONCE_KEY',        'e=OOiA}h&XEXUG[{09{Yu}uE!zp&f+0B(k-ZdA7zb9+Tef16&rPrjG|:~U)^E]^h' );
define( 'AUTH_SALT',        'F;Bi@iK&2&4~+(U3`Q?TvxZWQMvY6}GF}X}LLC!/ggOfJ<E$MDl)BwZLW]^{7G~y' );
define( 'SECURE_AUTH_SALT', 'H9VRz@dtd5aFAq]/pcQMofslm8rp,.wwB !mxDh#-&W;28,Z*vzc vDsg-*aBz*r' );
define( 'LOGGED_IN_SALT',   'n/Ei?5U-5Omj<NFe:fh0`UjGwDd(7~9aL1iHtmr>yCJXWvuec9+XMGx,i3~QudGe' );
define( 'NONCE_SALT',       'S#QIpi}/Nb72N;2,?^Q5lD_3fj.+k}q~rUSob~jM#A Foq/?!Y]0%@=@nqi}?p{C' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
