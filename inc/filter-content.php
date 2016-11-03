<?php

namespace MeetupPorto\Demo\FilterContent;

function filter_content( $content ) {
	if ( is_front_page() ) {
		remove_filter( 'the_content', __NAMESPACE__ . '\filter_content' );
		$content = get_the_excerpt();
		add_filter( 'the_content', __NAMESPACE__ . '\filter_content' );
	}
	return $content;
}
add_filter( 'the_content', __NAMESPACE__ . '\filter_content' );