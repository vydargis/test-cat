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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'AC6oigdkoWMans/FtgLdd+MVCRJcyv0Ckt8/tnyGu+cLNKCM4xPCphsouUnksYpkT5uel2nkwXRS2YDU23z8cw==');
define('SECURE_AUTH_KEY',  'JAhe4998uBwkc8YuM3MWitzr1jQwGvdA7OA+/+FeXIwfI5XoSEMXh4is+L0DbRZeqi4NdpLLyV40ESnvBI4Zhw==');
define('LOGGED_IN_KEY',    'xHkDA81gKvu8VGd7GuYVg/gtf1JxKTPvJxGZV0CLV1wHgPRjKhG0xbnRX7ia/hcJXRomMYtiJHAezDgDVhElCQ==');
define('NONCE_KEY',        'laSAvsGWaHwRnU2fiCjO5sOIfTeIwlQlXMXrDwCTx74ES2CG+MQyPHR6a3YfRrwPsiZJdksuTK7e5Xc8wjaXVw==');
define('AUTH_SALT',        'CzfMt+vMXWKz77EWAWao23wcfm9TMcPUmhP4RhORzBZNn77gZxA9yOs0LJwxBMzhVkD+SowupTthfJMPf7e3ow==');
define('SECURE_AUTH_SALT', 'PwG4jf+CuB1/c9vI9inWIgBySrpcQ6SKWTYm0flOnGvALSpQQFDWEdrgg7MEUWEsmKOkEK+7W0Q9EFTiG0rM/w==');
define('LOGGED_IN_SALT',   'B8SPwodB3zHYMoIgvAEVgScoBDCr4DPoHsEcFqFLlUG9GoHNgLyTu4Ij324TECQhI5LfmozMV4KXDOapLA4M4A==');
define('NONCE_SALT',       'V+6jDLCVVbN22G3Rtu6AXx7qEW1KqWhBMwM/MoiA/8+J/5O4qUfd/L4ObwXvaCfx/CK02UqRB0wK6PGfV3euQA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
