<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alley
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php alley_posted_cate(); ?>
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="title">', '</h1>' );
			else :
				the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
				<!-- Post Details -->
				<div class="post-details">
					<?php alley_posted_on(); ?>
					<?php alley_posted_by(); ?>
					<?php alley_posted_comments(); ?>
				</div>
				<!-- End Post Details -->
			<?php endif; ?>
	</header>
	<div class="post-media">
	<?php alley_post_thumbnail(); ?> 
	</div>
	<div class="post-content">

		<div class="the-excerpt">
			<?php
			if (is_singular()) {
	               the_content();
	            } else {
	               the_excerpt();
	        }
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alley' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

