<?php

// In wp-config.php file locate:
define('WP_DEBUG', false);

// And change it to:
define('WP_DEBUG', false);

if ( ! WP_DEBUG ) {
	ini_set('display_errors', 0);
}

?>