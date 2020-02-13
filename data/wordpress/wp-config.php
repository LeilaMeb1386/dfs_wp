<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BV-[Y!:F~|NHZ{s5?J}CYj_v2U,Yh<%-XSsw3>=^h)iX`RDi]]?|PkE8:9T1eCVb' );
define( 'SECURE_AUTH_KEY',  'pzpg{52F_u:fhxU_6!`z!^ 7AIqm0HM`z<@n(U+I:l4]U_!;T[tF`WC$wGq,g83+' );
define( 'LOGGED_IN_KEY',    'RQm4Y:D8mHfdbe8FB5 -wc-8dtAnK%Tbu8zhUS[!N~GX.zqzB>3v&)esIC^tn[NM' );
define( 'NONCE_KEY',        'ktNlv_;]bxr;CVR+*G$V4iH(a7,%SdO|ZzaJVWGV?v{BD8]4&.34|:ka-*+F-QP#' );
define( 'AUTH_SALT',        'd*u{(RAWYp/OILE7))j([X%1w@>Z/gVr{zl9S!LPq.nzj`XpC[q(Ef)VW_ozG9NA' );
define( 'SECURE_AUTH_SALT', 'r!+w$pa%A._ypV:5E$-/D<8_Pdn$t${B9E@(; hr,~{o`keT/y.SF9-)+z8~a1$.' );
define( 'LOGGED_IN_SALT',   'z26h*bVL00>ZW7!h2S~.lg^x;AHG,)>tKCgjh^Uk=(_92mE~?9g0q=5om&_RKx}f' );
define( 'NONCE_SALT',       'n&*|x-DXU=V,]6o7XF}T&mJU.(/!AQVeTyd;`-Jn=,n?Mzno-mA8R>gb^z*!{.7<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
