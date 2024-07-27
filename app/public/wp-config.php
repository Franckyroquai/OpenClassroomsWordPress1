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
define( 'AUTH_KEY',          'n#$=f%476qSX[JYg[B#yp&+OF[+0>=*Pd,u+!TE;reWHymj2e~zo){2fis,I5(p+' );
define( 'SECURE_AUTH_KEY',   'QZ1CSrT*Q[[%VQp>U U4{+RinE[dye^]HS3Z3%xm-ln&ObDVcrmcdi&NH)1s$(DM' );
define( 'LOGGED_IN_KEY',     '*p:9r-!Q+sIZct!*v}&m-$Q(uG;$x..:0?9hk!3,)W&7mnM%KC;<Mfq)~]`J8wC(' );
define( 'NONCE_KEY',         'p*zo:UQXaF1T~oLL HIN0R[wTf[nfGjG ..7;]+QMcq=&9Pz.1=TI|CEF?T5zA1q' );
define( 'AUTH_SALT',         'T`Pec7F%Lw<Yu/p!D},6e).e<]l|Q=*IMg{`kC{ec6%J4/5~^Wc4-x3Yvt2bI/x_' );
define( 'SECURE_AUTH_SALT',  '1bN&e+D>%]9KLb%p:(I9WOEi vR8{Um+8B&~*kR6?~|!nVBhRcy**kn%ZBp&3PdU' );
define( 'LOGGED_IN_SALT',    'g9 hN2s!`NiYgb45+EgK>>E$o_ TLwjrMrayT}{c)*P,e;05.JRl8iM3sik.!ONl' );
define( 'NONCE_SALT',        'C.Cjm<Zh/l/)z/4-Jz~td5(tGo=Fnq`QX>(J:w#S2<5qP[ZS@ib`X^KJ!EzoTl7[' );
define( 'WP_CACHE_KEY_SALT', 'LMtN.&xjFj?:zPoZ^ZP9o#oQZI>W=Na67yE%BeYrr.oC3=_i:Yr_xBcuPH>b+8Q]' );


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
