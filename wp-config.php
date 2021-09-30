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
if(isset($_ENV[`CLEARDB_DATABASE_URL`])) {
    $db = parse_url($_ENV[`CLEARDB_DATABASE_URL`]);
    define(‘DB_NAME’, trim($db[`path`],`/`));
    define(‘DB_USER’, $db[`user`]);
    define(‘DB_PASSWORD’, $db[`pass`]);
    define(‘DB_HOST’, $db[`host`]);
    define(‘DB_CHARSET’, ‘utf8’);
    define(‘DB_COLLATE’, ‘’);
} else {
    die(‘No Database credentials!’);
}

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
    define('AUTH_KEY',         '2Wb+8{)fEo30c!|[@,/pb2{wy{p+5,[6lbp=J,nU vXR#B}IG4`t*)x{H(.[f.{G');
	define('SECURE_AUTH_KEY',  '#%bjbEfbF$3pB5xm#q07a+WTIs^X#E,;h]~Ghb9.[jyXkstBk8A>lw;Q6.8#A)f@');
	define('LOGGED_IN_KEY',    '52#3@^wWv48T8!^qU-0xTr&wY;@(ilDbG9XD>K!98;S[>TY+I9M$-L%#(+nsXFAf');
	define('NONCE_KEY',        'k0_`siUt& 8hset/b+R9a|HEKj9*JXcEz`nJW>ATO&,Yz,y[DI1BGW=ajP]-J|{g');
	define('AUTH_SALT',        'DG=s+<2nm!|s29UX>r%;!ua^a Fb9mDd;c=Y;;+dl$noPfs+_T;HGde 1tO#R!<_');
	define('SECURE_AUTH_SALT', 'Vey?#<5c1e)a1d*Nz)hwmci4oPS{cT-J?[Y$CwjNF85k$M]xk8r38;)>AsQu[YNe');
	define('LOGGED_IN_SALT',   'jyzhC&U]@tO-nm!&xzC;B5VSf9Lsn_JT0TvY?@3;|/stO0&L-j.):w5*/q7=5?lD');
	define('NONCE_SALT',       'L*|a5Le{4|gr]%fP|:y8=Q8JR]S}`d-8>HW2hhWhQ{+v|Y&+u)G%IkLTY63~@dbg');

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
