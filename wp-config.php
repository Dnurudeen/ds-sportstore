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
define( 'DB_NAME', 'ds_sportstore_db' );

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
define( 'AUTH_KEY',         '`(j;`$gK~Ok@3?W{ZHRfFE%2mHlRw3YS*OPpN+M6c0UuTF}j&?N_KzjQ6nFMg:5C' );
define( 'SECURE_AUTH_KEY',  '~1j=s}>4%ly#Z+d.[4&GlQ*4pOZh</Ut=1ebvDMwl(;0VN)i6~>r@}b^6$*Jx66s' );
define( 'LOGGED_IN_KEY',    'h;{;1x%4vJ@QN=A48#k$;TKB}xwiRyO<%n1R|41DJkp#OEnA!0(&U25lP9%@a}bk' );
define( 'NONCE_KEY',        'ssjpAH<Z,z8dq]6e{7)HB=02~#LS&u;/(7n8<|272BFf_es8p:B!~<v<n`B)X6z.' );
define( 'AUTH_SALT',        'Lw;+R&}^fHb(REC7W+=LV`)~0fE=(Yx6gQ?6hBkbUKU0$P7y[ a1MA~Wim~8:lS:' );
define( 'SECURE_AUTH_SALT', '_WV4.6;8;hfN@h}AKNQ#$Y{MQOE}iN*Hg<E^:uy:2qkQb86!Tk;-gBIhbTB^a!(`' );
define( 'LOGGED_IN_SALT',   'N.`o72q HCa#hG ojAUcC[Clh#`Vb`gms^*N?`A/6XZ`Fm!E:Fk>>>b/N>k`Hu}(' );
define( 'NONCE_SALT',       'g==m[rB4L|&][ 5:mm@dayLl2(}1zOF+>sG,-oC4UnPXmcM*%k__$,R(m(m7GZ~W' );

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
