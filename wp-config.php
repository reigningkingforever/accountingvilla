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
define( 'DB_NAME', 'accountingvilla' );

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
define( 'AUTH_KEY',         'V6p;7t9s-42gOtNtg^+.=r=Fb9m:[S`_<bX<rA|/;T3q)QdX6NF8BUn#P]3*E(rS' );
define( 'SECURE_AUTH_KEY',  'r~lldru5[- JPez1KcC3!hUw.SVCr)9<jUCtwaT[bzAAmt`yBml(oms^tVrU!O7@' );
define( 'LOGGED_IN_KEY',    'i&@[=Pp+awoo3jk:V7m){GTt%{6^36,%7yq. QjTN*IDs}aPl<sjDTY_+C6u2lcO' );
define( 'NONCE_KEY',        'W.lMC3W=k4@2PYfj%~5&.-?_<34;4,{FO*bxDQpQxkSH4Z-ryE)H7aowM-]0)VSK' );
define( 'AUTH_SALT',        '@`[W/l0)Jx!p$Y;>)vGnLmm+IwKUx1G9N@;D}!.8dO,d<[k*|W;*;Y[=FgNY.EB]' );
define( 'SECURE_AUTH_SALT', 'x+aeKCeFX?V30f%@j6/{]$~E[H{7c)J`^a2;2x[[/4I?=41bmTep/!?80+[J^`0r' );
define( 'LOGGED_IN_SALT',   'A4Z@?(%:t00R`ktU?pw4ad?te4`h?fzEwbZ~JiSy/36tdEf45]9>iN@*1j]%q8}U' );
define( 'NONCE_SALT',       '|zi|&GoLxUh!s I`-i;Sp<]d(!p8utSK?Fl/:%!^|INjmiBNo|{C3Uw9`m<9F/=$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acv_';

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
