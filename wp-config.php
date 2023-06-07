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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stepdovo_step2-it-sol-db' );

/** Database username */
define( 'DB_USER', 'stepdovo_step2-it-sol-user' );

/** Database password */
define( 'DB_PASSWORD', 'L5;1i~iEAwL$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4z2jiwL]kys;fq?+X#i;i{&X1qP[D1ziE=qX7Di@f5o?)MP/Ys%#dl^YoJ#Ke&X&' );
define( 'SECURE_AUTH_KEY',  '(NnL6i+y@{$90k4 ARtgiH$tf9MZYn`rJ,?s*e|wx8S@u6VDFtl!4^^9*7+u<M{+' );
define( 'LOGGED_IN_KEY',    'sA-{cY&FKz.{d #Ky)9:(.km%|S[Wr| mpN`CKe<;!+nB#RyQj7{fkV6(Y[6DI#S' );
define( 'NONCE_KEY',        'TwXSN_g?hXmTmg,>.YEoU)^{CEv78Z1Ndb%:>b:9ON8KAE^@=3~5~8Lo~{DCff+W' );
define( 'AUTH_SALT',        's1`,SY9CD<ADs</T`yGM(+:0v;w)?<JT:Z-uddXA&=o5{-O45;qa*Ttf~[lb0$lQ' );
define( 'SECURE_AUTH_SALT', 'yu{3du00,&)X9/S+r]|,#U`M^&gPKYu*%=MSu#t=~[h41s^Mwt^>31R1dA! 8aSj' );
define( 'LOGGED_IN_SALT',   '5_MI4Io_LQ7dN.tEaP;TgPx~iMDFlMA70LNGDwiQ~Bv>#$9*p`!5 $ug`3E*?d0o' );
define( 'NONCE_SALT',       'ir?9<sK^e(7yqdtOW]e:f1N@s=u&%zwU=5vK-qDY39g._UdKl1}/Gx|KWSzrXB!&' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
