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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          ':XX_^OU[#R,k^r/lGxyRi{Bv}&7YL%rb/[x.>Sk.OqBX|kcY+.]8%;1ZzO6d4<;+' );
define( 'SECURE_AUTH_KEY',   ')+`_. euO0:Tp$Nv;CDEP9L9@FF+pIJcNUJLJ3Y^wM&u}(;f3n4#-^JnA_7s*k)?' );
define( 'LOGGED_IN_KEY',     'b]%|#~1[y22G*reBUpCZV)>C!=k/,}2$}=h.$xn{CH;cnYSn9*/Ldb!VjpEjxRe%' );
define( 'NONCE_KEY',         'x3?(9cZxB5H$|c>XB(_*Nt1<t)e>RY:P/C8rw6Hs8E)uJbpYWEXA=358|JfC&?-9' );
define( 'AUTH_SALT',         '1b5-SMPBvG^Fi4Uz{o/an+FU?{R&*W.iTw%/Z.Gu7cI5Ml78Gn%SShK@nCvc0Z,@' );
define( 'SECURE_AUTH_SALT',  'ea/vL@[3xZA0IaWsT:<:tB0ImYQA?dLd!C&.Jm,Ik[OcE_%<G}rq>^9_MyQd?^KI' );
define( 'LOGGED_IN_SALT',    '-Qe4RU&#:PJ}eqK,?mAOG.?miw/!G{:}k1rf02>^`umE:$<B]j+mqF~SldFl_q^R' );
define( 'NONCE_SALT',        'o{i2ml#3FFRyPEb1~%X-sDcnuS Nz*}U)|s:{/+^TTcr(ihDZ*$@;:}WxtvU}gpJ' );
define( 'WP_CACHE_KEY_SALT', '7ZT0sV)FT_ cj86LeVaF& {vMLnHS`2klk73;j%*Xn}I6?%|&,Dx6qCh)n3!%*[%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
