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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alfie' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         ']rg;!VF@6l:(x&tpH,)/eh /CMJAJ4@*88>gMOts42E,vBH3Arsbgj:P3-7yMTd,');
define('SECURE_AUTH_KEY',  'CfCm~/3~dWZdl>aol+YHh~1w@6/V NKiISVV|B-~BFk+ 3NSe0l0^9pnvG%$!ciz');
define('LOGGED_IN_KEY',    'B+Mj]?,&Bvw+f0#Mjww!$Mq[-ajH&`U}WN]54yAH!eYha}4r7 e%EiQ`,[+&Cj^u');
define('NONCE_KEY',        'H/Tx^j/Hqw^].!KX@E-im>&[RL1|XYY7EX||7q0E:6![`Nnq7ml1H?*CcbUo-!Q]');
define('AUTH_SALT',        'OIF+Mn3&_!WU}/RJ}sy4W>fHs @ivc~AoA~(@5S:CKao+2-D|w=ob3I^QdFW]sbY');
define('SECURE_AUTH_SALT', '!GuNGYXNmNaupO<x~tHI|t.{;-U|.erb}a:ZRsv.c*GjFV~521MX<c 5:|#Qjln1');
define('LOGGED_IN_SALT',   'g ;ij>9{J1iw-_IP@t-$prQ8%BV_yQa#f{2K$Aqh_ RDGlP<YI@4mo]J12_HUwT}');
define('NONCE_SALT',       'keI>zyG-sIV.- %=`Y|y9b|1bc>I-$#!,0k!I|N+T%*`7BdH1U-?i$D7{-dsVo-R');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'alfie_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';