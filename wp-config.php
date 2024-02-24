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
define( 'DB_NAME', 'sample_wordpress_project' );

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
define( 'AUTH_KEY',         'Q|($kjs C%VGC#9{<y{zWNmNW#0GIG&4H)%HM;v_VEux=^IY]xx_>kYC)1-lr 0 ' );
define( 'SECURE_AUTH_KEY',  'uc6&#5&GZk@zvv>WQ(yR9Spni)7ga*:9Yr8  {ljnyn>G%rPtUEQ4. W|d7K4n4@' );
define( 'LOGGED_IN_KEY',    '|4gtPCKEJ8@T^0QwrVi+3=r{l7t:ppd~tt}1V;5,h4[/5sL,[P{T8s*i&Ud8,$RA' );
define( 'NONCE_KEY',        '3?1K.^HSjJR}ibw~0pbL_+:;/BuVe[t#w9#=%xzAeiAHyD_Wab)7=2pMjz_]9v$e' );
define( 'AUTH_SALT',        'w<~pcyPc:Vpg>3}]>|>}@E_kvuc%#wQf!*]pT&2a5YQ+1c/+/;{oOt}|fpGdd[_M' );
define( 'SECURE_AUTH_SALT', 'Crn3h0~!Q yw&!h8H?%;D8Vrk}%Wa8Y?nUO*r-}JLx1Xu-=KtUaOA~sG453^j4_u' );
define( 'LOGGED_IN_SALT',   ',Qizr]bI:`b[!s`[Dxx ^1TEa((^+{=aQZ/g)&KD1]1zwqPjA&[(j||IrA%>_ZwU' );
define( 'NONCE_SALT',       '>0u&<CvdZAZ,]uJXR-rY+2C:E^#4<mzY(wI]za%33aG$;E&zeMjr[5UmIE|0l`U9' );

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
