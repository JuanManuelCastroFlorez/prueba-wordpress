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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'n3`~azf0D=sj;jq[v9,k%rm`sLRv/C{k~qDo2@ Z8q0rRboe]h0l_G:3t-?.i@Gs' );
define( 'SECURE_AUTH_KEY',  '8An3r>Hk.{{#9I4Sblf%aZPN%Qk[XXNW%K-zl>zGB|,oOT&?oeaC8w&LcU{QM,$X' );
define( 'LOGGED_IN_KEY',    ']4_thm!41*|_0N]cKbkhQ|,8[j:kV])+#+XzP8r`y@pBvN,S 4 iBLd)R# ^k@/{' );
define( 'NONCE_KEY',        'P/zBhV.Of})JEb?a1O&fWE$|}SA7AI~ee4,vqx1}/1|fusFVY2v%-<1|j|>t{@u_' );
define( 'AUTH_SALT',        '#ADgw0GsLZ9HAj1U]/j!Qjc^t=VIzZlK]w2rJ#Y6=/kQwY[Gju=g!|^[::)K!K2?' );
define( 'SECURE_AUTH_SALT', 'PdO_m~ey-J}>Yhql0dPzS>1OZP5G2fGhb@TP&JcgnX+EeH+8?HU$@g-f/:%LB*U;' );
define( 'LOGGED_IN_SALT',   'vmw(4]uG!wBvhSrA2(X2URf`$*ZN>5>zPv>yy_VA&d82TEK<m];k3,_yO2540rk~' );
define( 'NONCE_SALT',       'vnwI+<0o:<0gI,K3qO$~$g/DVQ42!R}]zT%>(d-{ X,ltk&xc:7fE/x*zM*/ i9)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
