<?php
/**
 * Storyline shortcodes
 *
 * @package Webcomic
 */

namespace Mgsisk\Webcomic\Storyline;

use function Mgsisk\Webcomic\Taxonomy\webcomic_term_count_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_term_description_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_term_media_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_term_title_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_term_updated_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_term_link_shortcode;
use function Mgsisk\Webcomic\Taxonomy\webcomic_terms_list_shortcode;

/**
 * Add shortcodes.
 *
 * @return void
 */
function shortcodes() {
	add_shortcode( 'webcomic_storyline_count', __NAMESPACE__ . '\webcomic_storyline_count_shortcode' );
	add_shortcode( 'webcomic_storyline_description', __NAMESPACE__ . '\webcomic_storyline_description_shortcode' );
	add_shortcode( 'webcomic_storyline_media', __NAMESPACE__ . '\webcomic_storyline_media_shortcode' );
	add_shortcode( 'webcomic_storyline_title', __NAMESPACE__ . '\webcomic_storyline_title_shortcode' );
	add_shortcode( 'webcomic_storyline_updated', __NAMESPACE__ . '\webcomic_storyline_updated_shortcode' );
	add_shortcode( 'webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'first_webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'previous_webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'next_webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'last_webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'random_webcomic_storyline_link', __NAMESPACE__ . '\webcomic_storyline_link_shortcode' );
	add_shortcode( 'has_webcomic_storyline', __NAMESPACE__ . '\has_webcomic_storyline_shortcode' );
	add_shortcode( 'is_a_webcomic_storyline', __NAMESPACE__ . '\is_a_webcomic_storyline_shortcode' );
	add_shortcode( 'is_a_first_webcomic_storyline', __NAMESPACE__ . '\is_a_webcomic_storyline_shortcode' );
	add_shortcode( 'is_a_previous_webcomic_storyline', __NAMESPACE__ . '\is_a_webcomic_storyline_shortcode' );
	add_shortcode( 'is_a_next_webcomic_storyline', __NAMESPACE__ . '\is_a_webcomic_storyline_shortcode' );
	add_shortcode( 'is_a_last_webcomic_storyline', __NAMESPACE__ . '\is_a_webcomic_storyline_shortcode' );
	add_shortcode( 'is_webcomic_storyline', __NAMESPACE__ . '\is_webcomic_storyline_shortcode' );
	add_shortcode( 'is_first_webcomic_storyline', __NAMESPACE__ . '\is_webcomic_storyline_shortcode' );
	add_shortcode( 'is_previous_webcomic_storyline', __NAMESPACE__ . '\is_webcomic_storyline_shortcode' );
	add_shortcode( 'is_next_webcomic_storyline', __NAMESPACE__ . '\is_webcomic_storyline_shortcode' );
	add_shortcode( 'is_last_webcomic_storyline', __NAMESPACE__ . '\is_webcomic_storyline_shortcode' );
	add_shortcode( 'webcomic_storylines_list', __NAMESPACE__ . '\webcomic_storylines_list_shortcode' );
}

/**
 * Display a comic storyline count.
 *
 * @uses [webcomic_term_count] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Unused shortcode content.
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_count_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_count_shortcode( $atts, $content, $name );
}

/**
 * Display a comic storyline description.
 *
 * @uses [webcomic_term_description] The type argument is always set to
 * `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Unused shortcode content.
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_description_shortcode( $atts, string $content, string $name ) : string {
	if ( isset( $atts['collection'] ) ) {
		webcomic_error( __( 'The classic behavior of [webcomic_storyline_description] is deprecated; please refer to the webcomic_storyline_description_shortcode() documentation for updated usage information.', 'webcomic' ) );

		return webcomic_compat( 'webcomic_term_description_shortcode_', [ $atts, $content, $name ], '' );
	}

	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_description_shortcode( $atts, $content, $name );
}

/**
 * Display a comic storyline image.
 *
 * @uses [webcomic_term_media] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Optional shortcode content; mapped to $args['size'].
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_media_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_media_shortcode( $atts, $content, $name );
}

/**
 * Display a comic storyline title.
 *
 * @uses [webcomic_term_title] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Unused shortcode content.
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_title_shortcode( $atts, string $content, string $name ) : string {
	if ( isset( $atts['prefix'] ) || isset( $atts['collection'] ) ) {
		webcomic_error( __( 'The classic behavior of [webcomic_storyline_title] is deprecated; please refer to the webcomic_storyline_title_shortcode() documentation for updated usage information.', 'webcomic' ) );

		return webcomic_compat( 'webcomic_term_title_shortcode_', [ $atts, $content, $name ], '' );
	}

	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_title_shortcode( $atts, $content, $name );
}

/**
 * Display a comic storyline updated time.
 *
 * @uses [webcomic_term_updated] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Optional shortcode content; mapped to $args['format'].
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_updated_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_updated_shortcode( $atts, $content, $name );
}

/**
 * Display a comic storyline link.
 *
 * @uses [webcomic_term_link] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Optional shortcode content; mapped to $args['link'].
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storyline_link_shortcode( $atts, string $content, string $name ) : string {
	if ( isset( $atts['collection'] ) ) {
		// Translators: The shortcode name.
		webcomic_error( sprintf( __( 'The classic behavior of [%s] is deprecated; please refer to the webcomic_storyline_link_shortcode() documentation for updated usage information.', 'webcomic' ), $name ) );

		return webcomic_compat( 'webcomic_term_link_shortcode_', [ $atts, $content, $name ], '' );
	}

	if ( ! $atts ) {
		$atts = [];
	} elseif ( isset( $atts['args'] ) && is_string( $atts['args'] ) ) {
		parse_str( htmlspecialchars_decode( $atts['args'] ), $atts['args'] );
	}

	$atts['args']['type'] = 'storyline';

	return webcomic_term_link_shortcode( $atts, $content, $name );
}

/**
 * Display content if the post has a comic storyline.
 *
 * @uses has_webcomic_storyline()
 * @param array  $atts {
 *     Optional attributes.
 *
 *     @type string $scope Optional scope to check. May be a collection ID (like
 *                         webcomic1), a scope keyword (like own or crossover),
 *                         or empty.
 *     @type mixed  $term Optional term to check.
 *     @type mixed  $post Optional post to check.
 * }
 * @param string $content Content to display if the post has a comic storyline.
 * @param string $name Shortcode name.
 * @return string
 */
function has_webcomic_storyline_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $content ) {
		return '';
	}

	$args = shortcode_atts(
		[
			'scope' => '',
			'term'  => null,
			'post'  => null,
		], $atts, $name
	);

	if ( ! has_webcomic_storyline( $args['scope'], $args['term'], $args['post'] ) ) {
		return '';
	}

	return do_shortcode( $content );
}

/**
 * Display content if the term is a comic storyline.
 *
 * @uses is_a_webcomic_storyline()
 * @param array  $atts {
 *     Optional attributes.
 *
 *     @type mixed $term Optional term to check.
 *     @type mixed $relative Optional reference term.
 *     @type array $args Optional arguments. The shortcode name determines the
 *                       value of the relation argument.
 * }
 * @param string $content Content to display if the term is a comic storyline.
 * @param string $name Shortcode name.
 * @return string
 */
function is_a_webcomic_storyline_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $content ) {
		return '';
	}

	$args = shortcode_atts(
		[
			'term'     => null,
			'relative' => null,
			'args'     => [],
		], $atts, $name
	);

	if ( is_string( $args['args'] ) ) {
		parse_str( htmlspecialchars_decode( $args['args'] ), $args['args'] );
	}

	if ( empty( $args['args']['relation'] ) ) {
		$args['args']['relation'] = substr( $name, 5, strpos( $name, '_', 5 ) - 5 );

		if ( 'web' === $args['args']['relation'] ) {
			$args['args']['relation'] = '';
		}
	}

	if ( ! is_a_webcomic_storyline( $args['term'], $args['relative'], $args['args'] ) ) {
		return '';
	}

	return do_shortcode( $content );
}

/**
 * Display content if the query is for a comic storyline archive.
 *
 * @uses is_webcomic_storyline()
 * @param array  $atts {
 *     Optional attributes.
 *
 *     @type mixed $collections Optional collections to check for.
 *     @type mixed $terms Optional terms to check for.
 *     @type mixed $relative Optional reference term.
 *     @type array $args Optional arguments. The shortcode name determines the
 *                       value of the relation argument.
 * }
 * @param string $content Content to display if the query is for a comic
 * storyline archive.
 * @param string $name Shortcode name.
 * @return string
 */
function is_webcomic_storyline_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $content ) {
		return '';
	}

	$args = shortcode_atts(
		[
			'collections' => null,
			'terms'       => null,
			'relative'    => null,
			'args'        => [],
		], $atts, $name
	);

	if ( is_string( $args['collections'] ) ) {
		$args['collections'] = preg_split( '/&|,/', $args['collections'] );
	}

	if ( is_string( $args['terms'] ) ) {
		$args['terms'] = preg_split( '/&|,/', $args['terms'] );
	}

	if ( is_string( $args['args'] ) ) {
		parse_str( htmlspecialchars_decode( $args['args'] ), $args['args'] );
	}

	if ( empty( $args['args']['relation'] ) ) {
		$args['args']['relation'] = substr( $name, 3, strpos( $name, '_', 3 ) - 3 );

		if ( 'webco' === $args['args']['relation'] ) {
			$args['args']['relation'] = '';
		}
	}

	if ( ! is_webcomic_storyline( $args['collections'], $args['terms'], $args['relative'], $args['args'] ) ) {
		return '';
	}

	return do_shortcode( $content );
}

/**
 * Display a list of comic storylines.
 *
 * @uses [webcomic_terms_list] The type argument is always set to `storyline`.
 * @param array  $atts Optional attributes.
 * @param string $content Optional shortcode content; mapped to $args['link'].
 * @param string $name Shortcode name.
 * @return string
 */
function webcomic_storylines_list_shortcode( $atts, string $content, string $name ) : string {
	if ( ! $atts ) {
		$atts = [];
	}

	$atts['type'] = 'storyline';

	return webcomic_terms_list_shortcode( $atts, $content, $name );
}
