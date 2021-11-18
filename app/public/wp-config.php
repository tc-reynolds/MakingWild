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
define('AUTH_KEY',         'baLKTBdudNUAyLl0MdGWT0gwUp7ZPsICWYu+y4THL4uRfmhLGtNOvVv4KG5B8cAac/6MZf/CtfWoCDXngDP6VQ==');
define('SECURE_AUTH_KEY',  'sG1Hk+cbYiZZntnYe7N3s4tCvo+ynHHtfLdI3cY0VtvzDqfQ5EbV2O2Mx74/qelJFtuRrxuBPqy+otGs16tPyg==');
define('LOGGED_IN_KEY',    'ptnwazuMZTgg0ryltUkHITtHZgEtUzgfph8e6nqWwjwOAxkHCRXe08gDYOhkviBWiwf8LUH0fK0+YDrehBgmew==');
define('NONCE_KEY',        's24SfMD95qOOzSoyjJ+F3ju5eeNLt3iH4/6YSncfSl2cagNeA4KFB5+0czME72Em8N3nKQ6gWy4j/LDlgRjdng==');
define('AUTH_SALT',        'onN4aI/d8J2GfHZz/la2vUOIyK+0uYdd7+R8AV1pgItIYtlPLM8hSZwXJy0x+ZgUyMgQiTIkKhxd4zykYt5Ajw==');
define('SECURE_AUTH_SALT', 'OtzEEuk2eEckMGlrVONwyiQfTf5geyST8kM5VDUNu93Mgh8WspNeNBVxrEvhe9ipEBETjjJ/haCmqEPOu29tlQ==');
define('LOGGED_IN_SALT',   'cSe9Ylxk40YNDCwRnXT5qLWCKizu/FYFD/5yd/CMpG72sNMYLUAXFSnlPnu2YJZxnbfF8LMnalLJDO3Ti1b0ng==');
define('NONCE_SALT',       'WrIPF3Tc7UPXnXpYN9LYJQO9ZPnP8pF3dTlJUUjOnbj/wis5Bo0ng1cvkuEko7EABYwfdVDPjtWHP2y9Uk6OlQ==');

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
