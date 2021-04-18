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
define( 'DB_NAME', 'manufashion_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'system' );

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
define( 'AUTH_KEY',         '^$(6aXIIs]9arvdjgzHx`12jAqTfKjrQY{(.$)b`W!X]F8LQuH{mAByCLP>aMcN`' );
define( 'SECURE_AUTH_KEY',  'o&B2(iy&#+~]T-=!c89Kk+=$JNf!G_CX/:?pSX)O%XK*$C_7C3l!J5dD4%fq?P>p' );
define( 'LOGGED_IN_KEY',    'G^9/UZ%2k%NyN~d$md8+y4Z-y(<0pT}1@c>x&nQ<g%[Xs*>A>N}dpmdpK)78e9hk' );
define( 'NONCE_KEY',        '9R3$/(I_eL!ZV#+48_Fke<nGvuGAx13%$@h3.CcDUMdAv]{)IA/ Mx0.T6k9r2M ' );
define( 'AUTH_SALT',        'U.P?L vO`o_?eDEZ+^@)%gC=O}5xtu!JJ3FebO<3Y27lx8C.WCr7[`5S~E6u[&@A' );
define( 'SECURE_AUTH_SALT', 'G<p2&D#Hf~jRNR[C.EV!%x>1cbuS86n=q~0Azj|Hx6t#JMEQ2Xe|[6QxEh.ot%+0' );
define( 'LOGGED_IN_SALT',   'r@}91;$OQE7orIxy%K0/K/(xlBcT~NyW+u@5(..q7K%Q1RA+kO4lzg=#gyvI:+Q`' );
define( 'NONCE_SALT',       '^bf@P%9;C`t=B/[RUM,bk5_}+`awDrHIsZ^q+&Qj5nX8Y)OOV_,jr)pEg67L~)zW' );

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
