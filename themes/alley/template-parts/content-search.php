<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-media">
		<?php  alley_post_thumbnail(); ?> 
	</div>
	<div class="post-content">
		<?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


		<?php if ( 'post' === get_post_type() ) : ?>
			<!-- Post Details -->
			<div class="post-details">
				<?php
				alley_posted_on();
				alley_posted_by();
				?>
			</div><!-- End Post Details -->
		<?php endif; ?>

		<div class="the-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<div class="post-details">
			<?php alley_entry_footer(); ?>
		</div><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
