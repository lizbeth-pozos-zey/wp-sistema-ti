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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intro_tics' );

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
define( 'AUTH_KEY',         'jAz=`w-dW)EW,CDRWwe.@ (6^O82y(dSpjPGidBuR:XE:w`u#;-hOl?HN[_ /4[3' );
define( 'SECURE_AUTH_KEY',  ',w;xMfRZaR.XEiD$eb;rNb^c-)B3_&K8U^EehcovJ. >0bMP*0HM#BrMiK|Tno}j' );
define( 'LOGGED_IN_KEY',    '{Hv7*VTuMN*X>b?5@^G/Cdae.>735VV+`JK.=Qk$Lm#{ +M+YvuEx^@B> hag lm' );
define( 'NONCE_KEY',        'S{b|}_.bsrtU$[^~)@zxMl9>v}Tc54&Vc5[Ejek/=`&;<[(O/jaAUZu~#I7(d7/V' );
define( 'AUTH_SALT',        'Y`hR)U{yk8WV YJq`WMk|=_kFka97y)/_ FDt+n:q*^&.do,AR>re@/bUmP|[}BD' );
define( 'SECURE_AUTH_SALT', '6tbZ$^!!B;6=09:+W0,Bn/jG^l:o.9~dw0Pc<|a*P<{fQ,bes,uzw;lbL9uT>/EY' );
define( 'LOGGED_IN_SALT',   'Mjbpb3G:vqw9A1*`L5h@4jj##jfZ11R`iD5<Hzcdb;COOhD>k=;y$Htxa*oaHLj|' );
define( 'NONCE_SALT',       'K$+2UXcP@Jb/0*y7{69/@`aGmg[U#+63eVs;)g(KaO:35W6bbH?SQ1~/)E0I+[F-' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
