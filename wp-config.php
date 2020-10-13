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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l/XYtOrAH+A5aw7d<IFwxxLtz7A&0 X;ay8Onaq{^YVB}Ucu2@ve8sBVFW1I:^M>' );
define( 'SECURE_AUTH_KEY',  'c94cOKg-qMD!N9J7@,en5:=]EXA$[?ksx8zij!-)^7IugLZzvr!*5!LF-*?F5bcK' );
define( 'LOGGED_IN_KEY',    '&FoO{Q6.LPNos$ter0nx294fIh/X*<$a#=d2eGXFVl~QBV512e3sF+Zriq39dY}i' );
define( 'NONCE_KEY',        'c6n2 mot{->6>?/YrYFx{;nQ6,xg{0<3I1k2rQSKP~Jl=BvX<v<Q}$.<~Gje3CJ!' );
define( 'AUTH_SALT',        'AS@7lupCvK>Dzddg)NYVLQ`QIv:o?l.!S@CwhC21oa+sR<ukUlA?2X(VyYb|;ep6' );
define( 'SECURE_AUTH_SALT', 'tpy`e5/?_/;+5jkqBQl5qtm{,QuT2QxW>G]9VIk[n7)Peo^#:rxhVki8rs06=m=_' );
define( 'LOGGED_IN_SALT',   '*wUE`P}}J/h0[TG`?|/-VFTEK|UMGx^pYlS4&;z02[-O]6!)Z;b9a^[H!.k[hk_|' );
define( 'NONCE_SALT',       'kpE(H cznl%`4Ek})D;e;p=3=$B^GsTgz`B2q41*6Ad*-^W?Ob,.Gt2C!9+cebS~' );

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
