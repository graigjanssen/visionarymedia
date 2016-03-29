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
define('DB_NAME', 'visionarymedia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=h;TZ(wh?JMnAq|>U@ri1@{kzyInqSs;Eg{,-tUS3<-u|0H0.(iC@dPvf25pAG3Q');
define('SECURE_AUTH_KEY',  'UHC!J=*RLN:3`9f10Z8e!htPF:wJ2iGnB!t/`%_rMs||2R;cZ<n,D(d7R?bD?D$7');
define('LOGGED_IN_KEY',    '9&!B0}wd3vZ;jZ>T{1}lFUBJy|0PG)l2e6(/_S) WW&o+RW<W~+E|j0m%cIo]bpC');
define('NONCE_KEY',        'Q1L9&k!bs0eclIg%x4|y]oRy4fpiM|ehsh=Y?q7:%ndq|K5%13e3%O0Fb5M(}<$K');
define('AUTH_SALT',        'srEPT#~S18/W`MSe^LT{Rx&?Sg]OIpfJhW!FqAck-Z;s )#|!wQ#HME=McI:PSWB');
define('SECURE_AUTH_SALT', 'sgz]|ZdlQi8y--Fdti~&H!B-$oEAE!) OIuUTRAobHBb6~z])geXK+GU*{e_|*@x');
define('LOGGED_IN_SALT',   'f*>?]5Yz)yv:F<km7$N6aSkTwayw%jOs+y!q P-d%/AtQ&];x}yw-Vh~&H[h?Xj+');
define('NONCE_SALT',       'v:+e9ilnKkpa1VE+lH7QD8_qIhkSK+_8]->q2fIO&sluH+#lCt$GRK6j[w^zt/9w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
