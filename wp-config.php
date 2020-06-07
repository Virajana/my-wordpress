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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oK$OWtaqMpm,dU4p9>sbzO`fQ}g8d4RKI-~#8_xGo:R Ayb9y8ItX-xD[xRP7Y/L' );
define( 'SECURE_AUTH_KEY',  'SqrN,[N/s+2}~J6g{!e,]hJKmJW3Y[a9;hm-GaX %Q~5^p#p1TpIO3k301sA5 HP' );
define( 'LOGGED_IN_KEY',    'wk9>.cc$c5:+[BADkuVbMiVvbVlSyN*vPc2PAw& =X<e+p`o/+h:`@E}({*@u&oL' );
define( 'NONCE_KEY',        '6~Vn?*@M_<>!<y$e!iPP )lcA+JIb3!^gP.X6<n;__~-t9Nz <Hu rG(L,G*i8+T' );
define( 'AUTH_SALT',        'MZNzk(;Hj:~p*,bSY`?-dClCbA!w;$z8.iHW!e}4`8{,_S;70AQ}a*vW|? `l@MU' );
define( 'SECURE_AUTH_SALT', '&<=^26!@-oD~4vT Tt tC- 9D7Zqf;:.J?S>U9SpaQN+Z-v<Qu%dXGcPux*{[9#R' );
define( 'LOGGED_IN_SALT',   '^erejr_xRw?X^^VA<o0szxxwJkw(}V=1h[YL}mqNJiVzB#uTuTJ9QAb[!si7,h 2' );
define( 'NONCE_SALT',       'rW{17!5f~_Yw]:Nh~|Eq;J<##w`!!UU.waOsBpC+tF=mE+B:ZgF!AWB~x0sc[?~%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
