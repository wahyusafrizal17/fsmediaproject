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
define( 'DB_NAME', 'fsmediaproject' );

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
define( 'AUTH_KEY',         'd<iGz=veV_o5zV:k{9p8Ki}1#w4i>l:Na@D!7gd2Z`YQ(vE[>k*B[a->/=UC>Kg,' );
define( 'SECURE_AUTH_KEY',  'SwMpY#l)57!{:Gb`M0m)@!KD<hv%nax`ekoe=6Qn+$TZfH`g%o>:/?EZrV`b[2I:' );
define( 'LOGGED_IN_KEY',    'O7/EwMKf4+RI75ggMynx&Dw:8JWOJyG+Q$Gw[QWsWt;vEoIAPt|V_~slUX&d)PF2' );
define( 'NONCE_KEY',        '#b$<[lZcvLe5lHvbxYkA@8FM#f_dpofH_K5q7H%]5Y5vR{p]&h+Ndl^*3c@>(i9B' );
define( 'AUTH_SALT',        '|~QGK`2E)es-YOvYHQQQj<i-gRK`!?Czb RrD*{t3J?T-WS`|$,<^;<ej2a+d)Dc' );
define( 'SECURE_AUTH_SALT', 'J%F{%@|}cwYo+*xe)Fw0c8KZ3{M:wO$^t-q3>CmLqOf^x^IwaukAk6/40NIs1bOS' );
define( 'LOGGED_IN_SALT',   '}RD9^lP:fF*L<10*mp>XdG%Lt5M@DI_YDH51>m;Q9!+/`dD/lo)3Lmg]rmfP0aw)' );
define( 'NONCE_SALT',       '5>4+@50WsN.2p(w(9WTgp_g7#Mg{)j^5NM9ZzwF8z.hl$gI1b4Hi*0U:nN]e,=vu' );

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
