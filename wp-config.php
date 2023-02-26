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

/* public_html/wp.config.php
########## START ########## */

define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define('WP_DEBUG', false);

if ( ! WP_DEBUG ) {
	ini_set('display_errors', 0);
}

// END
?>