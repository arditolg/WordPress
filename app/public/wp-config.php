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
define( 'AUTH_KEY',          '!D85={l!ZF@AEVO=L}Yd||iPc=sOgR,7g|;5TPfk:2iY)xh78~drmc.*:JUB.x.*' );
define( 'SECURE_AUTH_KEY',   '|P_vrN{3VQjL9X^#T/=b5CvJB-}_r4kQSL}nDny_8<kQGO;V#+wv$P)*,(-/aR8o' );
define( 'LOGGED_IN_KEY',     'L]VvS_g2{o`HRfr<C;ez}!mX?D+E{e@X~;YuR)ou<r--5~MW,QCu!0ljl#c$79kD' );
define( 'NONCE_KEY',         '3VgSVtlB=EN85d1^erQt>Qe`P3Sez#T]?~YA}-)hJaKf:$7tL$+eJ/T>W7EBpp$<' );
define( 'AUTH_SALT',         'Je&:__;|1)zpZj5<u$lv[KW;}kyN6m,|HhVZ{2NG`OpUqiuO5E`KrAx3]E3`vIkG' );
define( 'SECURE_AUTH_SALT',  '5tVF#(2aw4=%4/- 7/wq4et$4u:gwAE.H_0dYUT(ZXYzw{3#[q;ky!o5.}J$9c~.' );
define( 'LOGGED_IN_SALT',    'FIfm)A41BV(o@}H?@4+CRXtb`Qi)g4Y&E(`*W IY$?,7PE20#^u8XIu,*+V0 O%s' );
define( 'NONCE_SALT',        'WWdMxFJWeU[G^J!]mtOJd*V}=0|%,A$TrinH|QQYe><ns9/A)fb`?DH!3!#6FOOb' );
define( 'WP_CACHE_KEY_SALT', 'P*fax},0zsvUUM8;.fG?2OC8;_N3.z]TH43NU-R~,Jl/jM!Pnb:dHVypPN$vs#-l' );


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
