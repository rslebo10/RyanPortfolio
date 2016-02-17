<?php

function my_excerpt_length( $length ) {
	$length = '35';
	return $length;
}

add_filter( 'excerpt_length', 'my_excerpt_length' );