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
define( 'DB_NAME', 'wordpress_test' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_test' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Q1W2e3r4' );

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
define( 'AUTH_KEY',         'jD!CIEa~Tetx*=GEXqoV/Q~F/72f!= NVl{+QAVd1Y&hoyqp)/An%*ps9:JuE+V0' );
define( 'SECURE_AUTH_KEY',  'N!%FZO`]=Tn(5Ex;--+b?m~rG>B=U+W%{T?CHfI;7hMnF,8&|.D9+&VKEx)gzk&y' );
define( 'LOGGED_IN_KEY',    'H&gW-J^@.Ubhu&,vCR$u$C6{7QpjTe6`C0;@)`C4P-@<gp%nf$S]Qf@<HeH9,0o.' );
define( 'NONCE_KEY',        'nb;KPymX7K>~xFqK*$m|n8W~6tG@goOTf;f&hS1ljtAQm8J8GKgR^4K90#sY9a0k' );
define( 'AUTH_SALT',        'GC.3C6|0V*U]/YTk *z5b.7WV6rYZ@INWkuSn)-L9aKvlw^H>?3Y/xtw;G@`1K a' );
define( 'SECURE_AUTH_SALT', '}K=pMa0h%q8h:YW/+7Ifi(QcgUN@rwF{a8V@Qo%?lB4!:{AcQ_yey@DpFeXv*kFz' );
define( 'LOGGED_IN_SALT',   '6QOi~tM|A&bhiV[2aED$h1)}53~;{b}9:vvF.MN[B_E2YjrkT0Pi JXd_=mV<se-' );
define( 'NONCE_SALT',       'OP<Q+P, cBuyI5KuZ#RUzWHK@KDyyb8>EEEf1<]G@6z,~4v5S3vz~]1;r^Fkt ]&' );

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
