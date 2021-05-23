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
define( 'DB_NAME', 'maket' );

/** MySQL database username */
define( 'DB_USER', 'maket_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ubqzbg5ThlIp9MFp' );

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
define( 'AUTH_KEY',         ';^K|l&rb%Y?|r:sD$yP|R1pB56qFGJ|tWI2e,5]Ol_kO2T$D,Jr-Rpu=F@7vyc52' );
define( 'SECURE_AUTH_KEY',  'XvF o`Mpg7)U4Sn15D{rMu![l3U(:I]p3{H.}K=HTX~&rE}Uq7ml|^+a#9lKxNc_' );
define( 'LOGGED_IN_KEY',    '?d<86B0ELIH>b6ay?7M7oh<D1iq#fpyuI2Diwyz`l5:$4<*SS)UbtK>K/W*dQERL' );
define( 'NONCE_KEY',        'KN7r3#KPy1bhpb?z4{PQ=QP2CBI~MdPSd!+[,[MP@u8B|Hh .WE[sB#Mqc2Pz,~&' );
define( 'AUTH_SALT',        'g=Xp@V[TwF?{Q@/Pb#N9j4[RR}o%=lP:SuptO?68D*<gVhX[plWqM!5?{k._Xllw' );
define( 'SECURE_AUTH_SALT', 'eR=?:88+egxg7d=^ki$4sPW7-[!f y5<k#!DZ!m%%j#b4~}Wz!{IZv^lV_zs?*I5' );
define( 'LOGGED_IN_SALT',   ':oZL.v>L5+a[,97v6idS,(LeeaImGXL7UyPF;UV[nuv3E=1vgmZ2C9eN)2E8_a:d' );
define( 'NONCE_SALT',       'g0<ACDVS5FFp2`fi_ {ZWrl*z]mOY7m/!K.f&^QBKS7)`}<vfvyMWt&$/65FYjs,' );

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
