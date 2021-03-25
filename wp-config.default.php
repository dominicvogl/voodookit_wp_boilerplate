<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files so make sure these are only set once.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    2.0.0
 * @author     Studio 24 Ltd  <hello@studio24.net>
 */
  

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
define('AUTH_KEY',         '<7<9}:+ud39#KXlAG|a5mUGK/h-d@PS!Ys`MToi:fgQ ~v3<Na<0dQ#[roQ4`|bH');
define('SECURE_AUTH_KEY',  '|04[3RQtnV+-o|mbuc- ONr_#s>@f4F]MznLM-&|w#f~@A+<!;[.iZ?Q4r.{.dJ6');
define('LOGGED_IN_KEY',    'U*y{,f o#9^w#ppJ0%)nnVP4N[jp(mCZIRVxGyJvgp%~.hRmO_VE+Rql_sZhS9bw');
define('NONCE_KEY',        '@y&LqU7<e;0B]8AG6#@*QR]wDPnU7Gb3ZknZ:Ka- H[LNA0{:aWx<$mq&rJ+-1TV');
define('AUTH_SALT',        '-VId|Dx7&Cb07+)Hl8Y62^8JNHyx<m{Q9sO#R=B:;<1aI)$P &l #o9vbk4y|-4y');
define('SECURE_AUTH_SALT', '+tKu46%|s)CnoyXn;CrWDP^S;nm W:c=k`[Z6}BTH]{vP[R9giPz;!R[+}L0 `~A');
define('LOGGED_IN_SALT',   '6EKrnikIn?:G4%RH3RZih+e~^6HXu~jm(m#*|W-q?J7?;/TL|b ~6(eVDx+bweyj');
define('NONCE_SALT',       'Rh/{+y)K)!EQJl@%A>4M:U{*k%%d$tax7UR4Jr?uVAH568iiLy[O7?DQe-~[m{+T');

/**#@-*/


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'erh319_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


// Recommended WP config settings, uncomment to use these

/**
 * Increase memory limit. 
 */
define('WP_MEMORY_LIMIT', '128M');

/**
 * Limit post revisions.
 */
define('WP_POST_REVISIONS', 5);

/**
 * Disable automatic updates.
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**
 * Disable file editor.
 */
define( 'DISALLOW_FILE_EDIT', true );
