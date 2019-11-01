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
define( 'DB_NAME', 'smartprogrammersdb' );

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
define( 'AUTH_KEY',         '13#f?mU2:`RniJ8;x!zsyy~9.cC75nI4n]z d4@YB;cx6t[PNCxso^,<y Sd4#;6' );
define( 'SECURE_AUTH_KEY',  'p,}iNXK2B[5UAN5}uu5yfIL<andc g>RqD*yLT;IdoH_--CZI#aky^qD|RFOXrZ*' );
define( 'LOGGED_IN_KEY',    'jVw`{SsDGh$L&JU4UZVGa9ST9V0Jv6!g|9zw+,C?3cW<[CV8kmUh.T(6epg .XmQ' );
define( 'NONCE_KEY',        '?{6VOFAi@SLcC(rZ@2#<4QRP{hv(3r^jo+sGplhB}GS.yuRhe#jy[Iwpp Oo0HJW' );
define( 'AUTH_SALT',        'MsJF~-]n<[G3j<+YLc%jb;ar$8A|*-ABQjLv;pqvm1w<@*Tw=DQR|X?n rIHO_UT' );
define( 'SECURE_AUTH_SALT', '_Tgb{Atgo=76v<]-5J.~`;3vg~L5gTvzIb/U/R1+pf-Z23= sMCs8ogivQRki6a.' );
define( 'LOGGED_IN_SALT',   'MiYcTh,a2~p_:w,34 M%HAu=C;C`l>=gb6`1S7n$%ET{<^VPDR1kuj<q&A2o@o(.' );
define( 'NONCE_SALT',       'X*:%1>)Dtw1#Y]M.o|kh7R6(6ei$@Gikd*i$faV|V1mI9`IzK)[SzI{[DKJo>zaq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SmartProgrammersWP_';

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
