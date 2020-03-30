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
define( 'DB_NAME', 'mevec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kS0+`1@DW=PEo_+AdVuAnu}~!A(Ht[e1&:dB&-BG[VV[{b^o:kd6P=3<`??2N;[o' );
define( 'SECURE_AUTH_KEY',  '-XbBa69UCyg!j64@nJ25vRnu;7(!io#<cg$uqcX|<>kl-(aubu+Gr!&Yxrn~5AZN' );
define( 'LOGGED_IN_KEY',    '(*3Bd[rv$MQ^qwQMC/f~xC5UoBA ngF2*Ca[6?-G1kw}Xt<#z%O!x;]Wde)y>2[`' );
define( 'NONCE_KEY',        'Ju;M(%NjJ%Rvyz;r`r?D+hp>~Sn/B*j5^U&zq4yNmrLCT^%:(P}B$JB*;(j+wEL7' );
define( 'AUTH_SALT',        ';Rx6[.=]#aUUij{CF^NJ-h*Z2fs}S.nvg_R|*h9mcfA%8OXmCoZNGp$XU6IQui?;' );
define( 'SECURE_AUTH_SALT', 'AmyX`6E@yf1kv{sW:Xrk3W,lzG9E@2wO5e]c>OK ke5yrJ>eW7!~8x_E$Lgd>:.F' );
define( 'LOGGED_IN_SALT',   '4~60bYPtb<6zHX;`cKwPEyBFIH!y-HMlN2(HHUi5j7tE]2WJZ^e:# @B]$Kj>NRe' );
define( 'NONCE_SALT',       '7XDd>|~M4{jCQ6$a4.O[M_&dx;hkU+@t:^b3-3.I?rmwODi~Dba(]/pUH&*}A%8X' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
