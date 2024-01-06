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
define( 'DB_NAME', 'Mandportfoliyo_db' );

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
define( 'AUTH_KEY',         '{QkM=e$YzO=Q-zEL:Hz,3? #g!$+5x=Qx=$]~$K|y)B+ADELS =ix:uF<`~y(@s:' );
define( 'SECURE_AUTH_KEY',  'yM%[38.;WiVZU}:} $P{>c4kp6s`n`,eT^a1LP2#[c.bGw%h>.4>6yzf{I)-Nq:0' );
define( 'LOGGED_IN_KEY',    'rhM*m!<m)Jd?7g{>m fi^N.uAoGZOF&Bd/rzZt8C=,W///6#>;&z!l)N#7oMpWQa' );
define( 'NONCE_KEY',        '?s-Awb|w&bi((W2l-AB47Hjl%m):2hbY 5gX~Uj63H?pBwL1yS@!.1?:L:>&hJO-' );
define( 'AUTH_SALT',        'Hr`P8Wy<-n}UKylf.].l{Sh4MG78/+zw-5=U<0J2][]!g064RH=7SPYxqHWJrEAQ' );
define( 'SECURE_AUTH_SALT', '-#ZK9.-aq}>?a6e1Qg6LXv}l 8:%ftr, &oL!*@o6{O0]dvS%JG>RTm`#K9bN%Th' );
define( 'LOGGED_IN_SALT',   '[SnwB/-n(PalsO9o;`e..a(o1{QLNOJ;F&<4AfK>xH:cpCy2-2mPy[3%s#D1?aON' );
define( 'NONCE_SALT',       'XxQ]rjW:t[m^iiuL]$98~^:0PezeBa p3J$8MpS~)K[Q@9PM;tUA@y7JXO]1aAfu' );

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
