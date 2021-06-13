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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xlBSmNM2yOjHX8R1Fmp+eScflITanT1G5cUBVthErY7UEAZhLixU7NW2y4Iv1sPitqzDZm3gYAQqzK31hgFqrA==');
define('SECURE_AUTH_KEY',  'WWq5iRSlBnsW297fK4bNOKUrySMIXrqe3o2pDvIM3TPdS/jAQuz6JP5I94XhKF/gVKvLaMGLgDP9iZZKnBNNAg==');
define('LOGGED_IN_KEY',    'KNqngHB7WX1Z+1hnD2MpkVnoaaJu19nD3jOUCUnuGhYD/byQOjSz3DwCrUii9nb3dtVdbKgU23kEROuuOb2Lpg==');
define('NONCE_KEY',        '3BokSbDHblTj2ITAzoji2zIkXtJ0g+IlN4exN8NSMIfA3kD8U9iGHxJrPpNu7+NhUFks9toQTzOQMpPK71wgJg==');
define('AUTH_SALT',        '7aLISM3BMWsnmUIiE4phi7RW4BeU+uZcMNrckx7bgFQxUnvuSQHOMmNSi2LBbBxE+Q7XgldwzR6By5Clk91irw==');
define('SECURE_AUTH_SALT', 'iYo4zs0L3rcKstBORNhcutL61mihvT646fLccEqwktyBzU+0EXzTpSmk0ocprRAVZue4nTsR2nGFsHtWaUb8dw==');
define('LOGGED_IN_SALT',   '80u3qRHtnLqowAl+Z9kwmH64dorAKpp16pk9UOo/2mLAucrKQti5UEPbdMDJkEcUqDQD9gM2CR2MNUQsBkP2vg==');
define('NONCE_SALT',       'Ls9zsT7gSE8BXjmD5yRf/8I3rwZv52YOVOXbUNWVpRw7ZIGdlMpqSELvH7gEFkCPLLmztqJsXDFiBhDdwqohCw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
