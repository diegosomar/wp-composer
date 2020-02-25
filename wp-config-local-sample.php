<?php

/**
 * This file is generated manually by users, which contains
 * specific local data
 */

define( 'LOCAL_DB_NAME', '' );
define( 'LOCAL_DB_USER', '' );
define( 'LOCAL_DB_PASS', '' );
define( 'LOCAL_DB_HOST', '' );

define( 'WP_SITEURL', '' );
define( 'WP_HOME', '' );

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', true);
if (WP_DEBUG) {
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors', 0);
}

define('SITE_ENV', 'development');

// ========================
// Custom Content Directory
// ========================
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', $protocol . $_SERVER['HTTP_HOST'] . '/site/content' );

define('WPMU_PLUGIN_DIR', dirname( __FILE__ ) . '/content/mu-plugins');
define('WPMU_PLUGIN_URL', $protocol . $_SERVER['HTTP_HOST'] . '/site/content/mu-plugins');

define('ABSPATH', dirname(__FILE__) . '/core/');
