<?php

namespace MeetupPorto\Demo\PreGetPosts;

function posts_per_page( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		$query->set( 'posts_per_page', '3' );
		$query->set( 'cat', '-29' );
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\posts_per_page' );
