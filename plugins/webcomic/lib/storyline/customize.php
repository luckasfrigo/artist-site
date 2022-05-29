<?php
/**
 * Customize API functionality
 *
 * @package Webcomic
 */

namespace Mgsisk\Webcomic\Storyline;

/**
 * Add customize hooks.
 *
 * @return void
 */
function customize() {
	add_filter( 'webcomic_integrate_meta_default', __NAMESPACE__ . '\hook_integrate_webcomic_meta_default_storylines', 9 );
}

/**
 * Integrate comic taxonomies.
 *
 * @return void
 */
function hook_integrate_webcomic_meta_default_storylines() {
	if ( ! get_theme_mod( 'webcomic_integrate' ) || ! is_a_webcomic() ) {
		return;
	}

	$instance = [
		'title'      => esc_html__( 'Comic Storylines', 'webcomic' ),
		'collection' => 'webcomic',
	];
	$args     = (array) webcomic( 'GLOBALS.wp_registered_sidebars.webcomic-integrate-meta' );

	if ( isset( $args['before_widget'] ) ) {
		$args['before_widget'] = str_replace( [ ' id="%1$s"', '%2$s' ], [ '', '%s' ], $args['before_widget'] );
	}

	the_widget( __NAMESPACE__ . '\Widget\WebcomicStorylinesList', $instance, $args );
}
