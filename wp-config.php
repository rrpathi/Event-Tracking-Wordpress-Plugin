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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i+t BK[(/_vsQ7g^5m3tMMIV)3;9M+ROC.z$;qA,2M(Y>~Gi2DgRcs,&6Bsz9Bq ');
define('SECURE_AUTH_KEY',  'DGO qQlNdZH#,{k8FXk]D|.I=C Dq1!_`xe3#`#iTpIWF)N,eu1o#$`%n4V+HYWA');
define('LOGGED_IN_KEY',    '1sc}+]nUQslN8QtPFCG4>[ue&Cn]&S0feP;}+IZlleJTnMDE-fs8<i^Kj8sShPdI');
define('NONCE_KEY',        '>V&;)*LBg)tnl>|_}n9kGTm!#9;~adhGM87$@W~8a_s$]8&BXN2kLAbf (E+o-$4');
define('AUTH_SALT',        '.5[}:(v}+sC#HvCnk?ce4Ww=D$;O;b76`A2mH6lG]]Zk.iPqn}dQ_[gfR3k(l8X5');
define('SECURE_AUTH_SALT', 'aa[Q2=#5Q-&^c`~nKDt(4-(-)!&Qp bj;ADCTTvl])>M=8?FE(PpcGj6_kh:BUaz');
define('LOGGED_IN_SALT',   '/)U1_ww>P/|}+{7F=z2PNU+<U$I;*4yRdA]Lnn(m0FUd3 w:5G#>wn$mT`wG0:I>');
define('NONCE_SALT',       '~GsOsGxC|H(Ess}?q3N;~%#zsU QBH[V*F~EI0>|y,4{ARp_C(5&fs &alujE7!b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
