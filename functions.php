<?php

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */

// add_action( 'genesis_setup', 'load_include_files', 15 );
function load_include_files() {

	foreach ( glob( dirname( __FILE__ ) . '/includes/*.php' ) as $file ) { include $file; }
}