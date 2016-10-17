<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'desig232_blogv2');

/** MySQL database username */
define('DB_USER', 'desig232_dmuser');

/** MySQL database password */
define('DB_PASSWORD', '57k9m14');

/** MySQL hostname */
define('DB_HOST', '209.200.244.80');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'VqY=dF6uAZ{oB}?A7bH/AUi:(F6RAgtkH!gMD+-AFo&3=-iI>pt=[(d_nDTrA-At');
define('SECURE_AUTH_KEY',  'mtd6 Cp.uL@?^:_C-:+t8UJbBTN#*RS8v}6-V`jHf1z+olI_Go3nAHv Oyu)(_(-');
define('LOGGED_IN_KEY',    '2Y!n$-3Ztde)Vrn/f5us.2}+mC/-^YL:zmBu,s7oBv`GAKol;9:{=~W*.s|9v:%Y');
define('NONCE_KEY',        'kz[4i3}=qDYDbuN{|EKTi&@Z{.C{(tllSfmFKnN%rSGrd#O%||-7@MZ5^A1ha+O3');
define('AUTH_SALT',        '{VWB/+=<8`T990x5BJ36Z:JiC!)k E!P|v!!a|@~xd4X9L3NduzZgn!ZO+KZ88-^');
define('SECURE_AUTH_SALT', 't+fu85+oZKVD~yQhhk0*no/+|T;?[HPp9Bp/^jwQ{k9I2Nq;eNc)PM0mu|%9XHad');
define('LOGGED_IN_SALT',   '{/i.+SBd.SAD96/v38;da9 |vd2+tlIVd_1z?aE|3_i-N/L$p=eZwZ+w(T#l<{!%');
define('NONCE_SALT',       '{m_|qa=8^JapWdRMs%Ek`J@}@]Qa+4us4]&9z~[N{5>i%n]440I<oOn5z=v*-cd4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dm_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
