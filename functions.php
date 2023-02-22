<?php
// =========================================================================
// REMOVE WORDPRESS VERSION
// USUWANIE WERSJI WORDPRESA
// =========================================================================

// Remove WP version number from head section
// Usuwanie wersji z sekcji head
remove_action('wp_head', 'wp_generator');

// extra clean
// ekstra czyszczenie
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// Remove WP version number from RRS feeds
// Usuwanie WP wersji z kanałów RRS
function my_secure_generator( $generator, $type ) {
	return '';
}
add_filter( 'the_generator', 'my_secure_generator', 10, 2 );


// Remove WP version number from scripts
// Usuwanie WP wersji w skryptach
function my_remove_src_version( $src ) {
	global $wp_version;

	$version_str = '?ver='.$wp_version;
	$offset = strlen( $src ) - strlen( $version_str );

	if ( $offset >= 0 && strpos($src, $version_str, $offset) !== FALSE )
		return substr( $src, 0, $offset );

	return $src;
}

// clean up the code
// czyszczenie kodu
add_filter( 'script_loader_src', 'my_remove_src_version' );
add_filter( 'style_loader_src', 'my_remove_src_version' );

?>