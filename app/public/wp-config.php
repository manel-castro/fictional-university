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
define( 'AUTH_KEY',          '9ejtxj~Nl=;<kiq;X((Z~-k^pLGvkyLpG:p&g-$Y6IBA9c#em7J`]x};MeVJSH,p' );
define( 'SECURE_AUTH_KEY',   'zI#rQ1OfGRXbeQ$:0HLDGz0Oqn9?>rU&Ir>-uLpyavIc0k=<`:q)a%j#/(?/sCG-' );
define( 'LOGGED_IN_KEY',     '<d`d~&qi3#RWK=_C |[YhUS]12!3IaA;io-D<p/Q*Xi :4*sdUPf>ZhV//h*cejV' );
define( 'NONCE_KEY',         '*K/A~ VvNtP^#f]Tc+ent`m(D`hnU@q;_zVZb1a?AoHCS Su<8( r^Htk%!l#f%L' );
define( 'AUTH_SALT',         'Ae=EQOy+}T!SG0v3I.fMdb0dK>n*yL,)2|o5`~ ,(ICQQ,u# )ANq$6jKZ29riwk' );
define( 'SECURE_AUTH_SALT',  'cJ7mLkO{@TpWwCe=mA^DXcjovL.sHhyBg1,Mv!E4;rw_flYZCHL+vwD?SNIhnDo1' );
define( 'LOGGED_IN_SALT',    '#!`%#=dE&=!&+]x_C90QH;sb(O?Vdm=IObtl9]Mpl YGr:lTaF6ap~}HNc(rQWiE' );
define( 'NONCE_SALT',        'fe)C[JXmD5^vS]VcQFae>CKb,}B12*A|WrFr)b}/@gP,ozRBb-g8&|-m-2-Fz-p-' );
define( 'WP_CACHE_KEY_SALT', '?`W.%rYA0/=XA}ovF}eq YC!A>btBJrQI1ib>s%h-I_AB{Lb]|*7*tARq7e;.+ E' );


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
