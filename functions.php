<?php
require_once( get_stylesheet_directory() . '/inc/pre-get-posts.php' );
require_once( get_stylesheet_directory() . '/inc/filter-content.php' );
require_once( get_stylesheet_directory() . '/inc/remove-capital-p.php' );

function mp_childtheme() {
	wp_enqueue_style( 'childtheme', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mp_childtheme' );

add_filter( 'the_content', function( $content ) {
	if ( is_single() ) {
		$content .= sprintf(
			'<p>%s</p>',
			sprintf(
				esc_html__( 'Artigo publicado originalmente no site %s em %s.', 'plugin-api' ),
				sprintf(
					'<a href="%s">%s</a>',
					get_permalink(),
					get_bloginfo( 'name' )
				),
				get_the_date( 'j F, Y' )
			)
		);
	}
	return $content;
});