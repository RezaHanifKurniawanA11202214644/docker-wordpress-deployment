<?php
define('FS_METHOD', 'direct');
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'h}8x#q]k;m1fd>`-1u~yMct<n$`mPB)#-XdEA,*y63q$uR2,JBc;q|`nkzPxZO|&' );
define( 'SECURE_AUTH_KEY',  '{( <j|l+kIW(?Y,9 +Y_+~C9a/yP-o!}Z273e)sdTO=_aFQpN0p1 aG|m`G#PB@|' );
define( 'LOGGED_IN_KEY',    'iAx|sKJ<i4|4b|cI,@B5IcL#?<iB+z-kbrGH@>xwn7p52{l~))U,dkXV5]JcS*E-' );
define( 'NONCE_KEY',        'HCgq?>s=N7u&2oLlp@$_/Oq/)Hgq*.rh){[bz{ #t7#BAV1I6+pGdYryWtOrs`V^' );
define( 'AUTH_SALT',        '~wkZmBV;U1@rHo@%<|+G$VPi!L/Cy*g@/^d0By`{?}2{ZfB_8kT(]9^2I$fj+($o' );
define( 'SECURE_AUTH_SALT', '~q#?+ :VW2 lBM=d$/Y}b0FxG%&*%--{6xRz /8ZHdoGSDiD@L=v-47&}+2BYL?-' );
define( 'LOGGED_IN_SALT',   'Hzl]$g?6G3$>@VC?#LEAMyXrq4-DF.<`tiCfu.@=gujmfpx}#.|mbTLXw_HMz3B3' );
define( 'NONCE_SALT',       'O_;C[RlI[di]0/J>!5t3={>e<W{GqQ.!E5+vUCvMwK[z9{f#9sT5Ib@LD7vR?FH$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
