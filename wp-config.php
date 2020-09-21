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
define( 'DB_NAME', 'techblog_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'X$8U!)^# @rmq;s!X6:EQ_R$3cEd j!R^##Z~<l-d>H?vH&@a> S70>C?I{7MY-O' );
define( 'SECURE_AUTH_KEY',  '&@#s}d~Y(d:_=+^l?cC=u:-S}FxV%UCl5*oA3pWDG`@POd2%EWIto|.AX7;GRDmk' );
define( 'LOGGED_IN_KEY',    'j;a!_woQfr,uBD;jg),hj)=Bmqu0#rJj}lAWn2<k-puuffWB ]a/C_Ad7(F{W5X_' );
define( 'NONCE_KEY',        '[@O >+L@@[jrcdQQY;x_J0!$M/<JIU[S49Yj{y]w%*o2d8#n8io]qNTKLO;VCI/$' );
define( 'AUTH_SALT',        '_4x+}ujci!4v%1uyiuSiWbnCk{~3`%GBJ2j_6Z}eA2*%@q# ,jXM<:ceYE#?OI.}' );
define( 'SECURE_AUTH_SALT', '*Wod7C%q4yc _4qO!5iLH.X[}uxi3u$SJVtl:!FEUd>`[5ZVVH#+4(o@9#f4=.e{' );
define( 'LOGGED_IN_SALT',   'x/nAwAs>?E*N}4.4J`7Q=*JB~r3c=Xl>9Y1yPv24EH9-Umu[{g;kgJ>#/ o {K9,' );
define( 'NONCE_SALT',       '.`H58LM>xt?F^L(Pfkp@C+mweV,.qM`6~NUY*_]/jV:yaPZwB,m>.~}O+k%if}|i' );

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
