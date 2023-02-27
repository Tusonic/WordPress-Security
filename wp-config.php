<?php
// Wylaczenie edytora motywów i wtyczek
// Disable the Theme Editor and the Plugin Editor.
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

// In wp-config.php file locate:
// W wp-config znajdz plik
define('WP_DEBUG', false);

// And change it to:
// I zamien na to:
define('WP_DEBUG', false);

if ( ! WP_DEBUG ) {
	ini_set('display_errors', 0);
}

// HIDE ERROR php.ini
// Ukrycie błedów dla php.ini

error_reporting(0);
ini_set('display_errors','Off');
ini_set('error_reporting',E_ALL);

/* public_html/wp.config.php
########## START ########## */

error_reporting(0);
ini_set('display_errors','Off');
ini_set('error_reporting',E_ALL);
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define('WP_DEBUG', false);

if ( ! WP_DEBUG ) {
	ini_set('display_errors', 0);
}

// END
?>