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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'udemy_db_1' );

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
define( 'AUTH_KEY',         'CGKMHuqbobE.wjbFk/U.(uL0&C=86s+Q~wJYytU%c<*T ]wJl^Ace^`Pe|6-F),.' );
define( 'SECURE_AUTH_KEY',  'i-bEs8;nEB*VG!>#p)Ja&F1;dcc?jO<3a~V:oaPt/&-v}Ffv0$_jT)#MHGVgdLay' );
define( 'LOGGED_IN_KEY',    '8u@yM1Vqe_M^!l(iH.jwQ}AO<avb-&4Noth]MhZtJ/(^Ij3I0CrCJLkaKF[<Q}pZ' );
define( 'NONCE_KEY',        '$c Z5crE0gi3I`URCwH0<,y-]taSD6hkc*!iWd-x$ORQ/-L+ag0,Rrt:Pg <VMDN' );
define( 'AUTH_SALT',        '?T6pOijM9NjrF]]w4[zFS~n..$EFBjny&^J^Y[$p.K^:0IvI5qboqi{fb+3=#hK0' );
define( 'SECURE_AUTH_SALT', '}IQK*#(4$`7}iV,$g4HndocYt/HIQm3fy6&.6KvWi13|@G[e[l69@aftP)PXi^:c' );
define( 'LOGGED_IN_SALT',   ' =;ir5XTFCHE?whyyys}hb*|FI:[HMl#ECMQ7a0=E?qeDD/mGP3c.45Pp5}RFb7y' );
define( 'NONCE_SALT',       '<]C7K#eL@c`|n)7f/Aw& DN{MR*WPrY2,hm8K6}HhaN2)fPRWH]WM|ME9[NFDo(T' );

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
