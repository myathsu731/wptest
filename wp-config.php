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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'EJ%9DFQFd,(PTyE}vJVF=Zy4Z6oMa8lE}ClAzy5_x]j}ft!S*;DB~rg$bxB@VH6/' );
define( 'SECURE_AUTH_KEY',  'Ck%>8lnAXz>sOs!=AeEQCR&HgIa+E.$XoO51yf^Zu/^_F2=`A 0 9tt3x[>g5m9T' );
define( 'LOGGED_IN_KEY',    'k@2R:@dOf9!,&= WQn*PA1M[fEG_ju/zA9t^,=;DR0IxpsEtKf(, H!Ay3LaOI5K' );
define( 'NONCE_KEY',        'c9+X6=]?tfpJL#_!p:.g8i-SPE-S%8w9ivsx<|  x!N1E,%bdICXF})=i>[I]u2s' );
define( 'AUTH_SALT',        'mll>`Dy@e%gN9=#C@N~!?f5u70aw;FdnHLKU%xik$=5SD1c?{2kiS{eso-FE~9M}' );
define( 'SECURE_AUTH_SALT', 'L `=l S, F*vx*1EQ;<zz9sSMn`sZ+/Wmo#Jw!hF>3X$vCiy3C3DOi/wxy>1q));' );
define( 'LOGGED_IN_SALT',   '_q2#$4?ZO.tat2l4}1ZO`UdeUiR^sV[[X4_*oM5w^2B4y0$L<@N#tSE=LQOIhZTI' );
define( 'NONCE_SALT',       'eSa<6=q::xr2Bqm!2[qbN{pfFAecAE@{&qDJ= !Glux,3a>V@.CxwWn#[`e#wem4' );

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
