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
define('AUTH_KEY',         'L} BQD`doBW{DS^sC,k AUW#)JgF}F]V*8e<6w&jI;U;*Wkb<#Y$C.TtSm!w.O?,');
define('SECURE_AUTH_KEY',  'B :z[X&gj@y,DS8wQ1+4q[If#>3M,{+.Hs)`fR<B7l!$VmuDH%u!45D+,1s20dW=');
define('LOGGED_IN_KEY',    '$rf#OI+x_cf`fl) :t1q~g69}Ci12k%8[Nae!-[=r/sY6:VB.s80b7!Q[YHc8lG|');
define('NONCE_KEY',        '{+pVa(Nt3/NL!fmdI[h^!CLhIC:Tim=j{X{5L@LXl`Mfegc5<ADk4?J6P@&Y{-}0');
define('AUTH_SALT',        'l]Iwg<4G2YL[[fxhyH]kT]6FM$s/3M;g.#XHQ=Zm-T&p!do$Y@h]$VdjSE3Rg!20');
define('SECURE_AUTH_SALT', 'f+M{PKQ&6.s6vG>#0---)<B%4*AFQsVo=_Cei;pf*a$snlFxA~*jI{jd#Mnqw&AE');
define('LOGGED_IN_SALT',   '-)Ep}#.O5R5Xvczi<DF`Rm03n[YjZ6PKM=s^L2d{}Ud?3#sjvP#<B+sRy{fDW_y{');
define('NONCE_SALT',       ')>U>WxNAg:?yP3~dKnHc)v}R(?0r=;pUV@W|vWQ<H:>gV6b;ZXe9l~lVvT}W6 E6');

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
