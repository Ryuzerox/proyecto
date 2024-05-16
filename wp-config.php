<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u399181212_1FlpW' );

/** Database username */
define( 'DB_USER', 'u399181212_32cXg' );

/** Database password */
define( 'DB_PASSWORD', '4QLcrpK1LZ' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'XwXHMeL}n/E` >$dnO) Wv*eC:ci$[a2Bq5|/#LmsrvndQUNL@d*KTkoklw]axou' );
define( 'SECURE_AUTH_KEY',   'U>^>(>Wq-V6~@H}sZpu>Ye,PT4:qiM/{>PI*ME6AJg-W|?As4dje;]NIU!i,8gey' );
define( 'LOGGED_IN_KEY',     '#}ImSO%T%xf}`lz;r}>#D {+q8K|yj7bEEJmE<q`o+ NghQ?Iei]&wHgJP?S@BdL' );
define( 'NONCE_KEY',         '>9w)jl?4Zm=i+.4I]5p&7Jy`&I9XzhnVcYRq/nY/V:}C[9^ogp9s3~(8!o.fX3yV' );
define( 'AUTH_SALT',         'L`9FRCMBDPN&Fh!0_yK1CbEq!yG,8/*fq/zfnKAO*uv3^f0^0|eE*E}FGm%)IQ/^' );
define( 'SECURE_AUTH_SALT',  ',0~ ~@ lSg^v|l{UsvI?o1e>>;eV&1zPHsa$e@)T=g(+g8[aR2e6n=W]-)B^~83,' );
define( 'LOGGED_IN_SALT',    'k.$A[INdpOVo%1MBkE`6,M8Gquf|7AW762Y*;MZXNzm:R2XFp{4!68vb3GD|=~g8' );
define( 'NONCE_SALT',        'SH5~qqoNlxSX?^4&*O6bqJ7XU$bD6XVR:5%8pyjn;X63fk),UMN}gOpj_j9sk-02' );
define( 'WP_CACHE_KEY_SALT', 'u,>zG%BtOBy=Pf~5@u}Y1|+[cr@HQOwT4RmXQHDIqgiucnDvv}P_[5Uh|AR.S77+' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
