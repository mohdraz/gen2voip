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
define('AUTH_KEY',         'iGyman1NMVoI3jb6Ed+PPCpIsi5xZbFrew+M0eSxx8CRZ219VNLbwhy5IjUMkQxsjLw/LwtkDlTQFtZqAuWQbA==');
define('SECURE_AUTH_KEY',  'lvKs0qdacqkEkDAYurNnl1OYRts+SHKlPwX7qbBKsu3wCleo4HKZsAaNSXHVR0DJNOuJhKRwr8YAylY3RHlELA==');
define('LOGGED_IN_KEY',    '29TGHvcSZJWANTvtS/cA6KgTkFGNW8VE4zeY67oD3ZtcnDgRulTu61Q9ERncsbq8XjpauOdTQRYhOrEBiKlc/w==');
define('NONCE_KEY',        'BVyZy3sxCiQd+neA7LXXRgG7OM71SjN0a2hY7OF75j4eWgN9y88hwVMxBpFRRizMzz/T2q0f1WupB9Js3RSK9g==');
define('AUTH_SALT',        'DLnG3T9volx333CtgLE/JF69OOTlwECYGAd6N6yLwW+MejrZIuw3mWew1Cfy7KkPwfOi6f6qRIr1yX+HgGZIEg==');
define('SECURE_AUTH_SALT', '8/cMsOcd6icP+4Y63+YdCVnZpT+oIAh4oq4MhIMMg3Jl4y3XUPOmWvtbtdAFbZbAFSruFw86KKumto88YcZcZQ==');
define('LOGGED_IN_SALT',   'W0is+vGSWWWgcG6bWcn8C72u0isFZr/VKAGA3Zi69fMftdoPmexENVHctS5JTBz+mj0pP0GwWLwV3+73lClXxg==');
define('NONCE_SALT',       'hD+h/sQyQClw0xfq98xJwqN0BnMsw5oh6ztNxbnX2T2pVk0+U1JG5Y3tIyAw6Vf061NCt1Lbif5/OqYYyR7Zfg==');

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
