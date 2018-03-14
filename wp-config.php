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
define('DB_NAME', 'amitblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

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
define('AUTH_KEY',         '|tVzG3k-F*PGwg[rQEQ99507;-{B> ;L$:d^9{v:OmfUpSx5/=Bh5^bC IGLC`V|');
define('SECURE_AUTH_KEY',  'xbPX$mnYSd/cRcW_{C[S}h@#I`V)+~5}@$q$Mb*=r2q5gBW4Q+zwEO::gMmm:iaN');
define('LOGGED_IN_KEY',    'c2IQstZ0m/|7h!ta-S%yG:V7vt7^N]qd?J>CX[IY>D7uO2Ejcj/YUrQ$3Ufu ;`H');
define('NONCE_KEY',        'otTz>i[YoGegD`~U43L=~~AUqv|p7.TkT>Of e9}La0,s@kHL1;#dfUQ3`en^(t~');
define('AUTH_SALT',        'H?x`oVgWW+V(<O{O@g[Q _2eq:^a}t;6B<Uihw+s7n;pJ!pOSU!Re$IO7y,s}4&z');
define('SECURE_AUTH_SALT', 'SvR6?f3!}BJ-v=cwWd==6>A)g0R2z,J?E`~C,83x+2XV[S+o4?Q~v{iB~>/w>V(Y');
define('LOGGED_IN_SALT',   'U2Y@BY4o5^Xhn)_t(.?*(C9zi>#/@wx0tr>#Xu0YUI`k3s4igtNFHTV]&J<r=XN:');
define('NONCE_SALT',       '5]y=|jzB )$m1D!G$Zq%xWgWrBh+C{h ><7t!n|=,Ve&O5SL^=V=B[`HdCF1{{lr');

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
