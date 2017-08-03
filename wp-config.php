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
define('DB_NAME', 'humescores');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*q(Sh7)Is)/:ALL,)Iv({!k8bb1S6)Fn)KAD%p@5o$rz$bq`0%FxUb4(ENh)nZx[');
define('SECURE_AUTH_KEY',  'e&7l#@1UciuOICPA/+1;TGQTFP2g?S w[x8h_a;{2qZ!EnEb)IU6B;OZ~)t0KE}k');
define('LOGGED_IN_KEY',    '3EM[E)<D.S?>OR(6E)QLz5@:Z&5u[:c_xz/9D7`8QhMmn1Whv2qp#(d9nCdEWw+j');
define('NONCE_KEY',        'IgP%fy>*m_sQ)B 4gaI,E+#atEe:+2NY6L6*Hum<dIHOAIHmGF-`:U{vTgEh?v7!');
define('AUTH_SALT',        '!<O/`gZDr}lL-5kiq;c[1NB7b 5.`f;@MmYiW(v?;VY:5~?[k_F[a+X/5!V%rW&T');
define('SECURE_AUTH_SALT', '-S0>D%.gn6z/FI3k/8u!pOT;+L{,+It<[9ds11<HhUD15(S93L`ijXI_KXHqN}[ ');
define('LOGGED_IN_SALT',   'h[2V]J3jX(K)Prg4!I}kho}W~Omj:tf)OwxL&}NpS:v-3R2{tLu]A:kCZn[ECxdO');
define('NONCE_SALT',       'Al^xzY=!a8cax|Ab`]dy9{[f ;IuC<$#5T)b{Ky^=I,!;Vu)KcMmsnP73<r?Rt!M');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
