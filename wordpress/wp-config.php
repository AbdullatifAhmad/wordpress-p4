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
define( 'DB_NAME', 'review_page' );

/** Database username */
define( 'DB_USER', 'wonder' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '*7A^<f2Av{mm7uk+R1x8$3/>8j5HO/.~ER[ofYrU|HUwFF&C7fd-vk`MEE0#6+c6' );
define( 'SECURE_AUTH_KEY',  '|(SGj<]Mp851g9_QL}@Vla|=w3kQ>V7m*`^S4Qn,=+Bph~m|7oS}kbrsGKVAB^XL' );
define( 'LOGGED_IN_KEY',    '{jFD-*F6k2:d0wVE]c@|3Zx[r,a~h+kV2vUQ(--[D?GM*|9>,yOzk@&<Fk<AzI4u' );
define( 'NONCE_KEY',        '<0uwPi9/GWyQp.xd9P7iHN6dRu EQ#*E-E5?GF)<(?wkwc3wrL%`6m_Ybz6tp9.A' );
define( 'AUTH_SALT',        'Xi|mKm+$qpLwbeG6:s<|# f bkKhlnMIu0ISzAc+O-m,|g3eHLD(:?+2~^<wcq)p' );
define( 'SECURE_AUTH_SALT', 'w(C;Di/Wj}$]J7!EER,9.Cp]XH1&yg?345PtC=zzA+0vmQp#C=pL!{fq3+b?_/Hk' );
define( 'LOGGED_IN_SALT',   'Fp$-gPbq>^ >;.POOF?0gBc~pwv}m2o3mxXVn[~ihC}wC[c#ms734tBgb{o&m)Pn' );
define( 'NONCE_SALT',       'Cj{84;=riY`zH+r6n/u7QACbW4mKPp@1z$!i Vavv9N#W&J O4WPXFFwrs3=}mX5' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
