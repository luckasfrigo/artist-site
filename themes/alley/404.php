<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package alley
 */

get_header();
?>

	<main id="primary"  class="col-lg-8 offset-lg-4">
		<div class="block-wrapper">
			<article id="page-404" class="post">
				<div class="post-media">
					<?php alley_post_thumbnail(); ?> 
				</div>
				<div class="post-content">
					<div class="the-content">
						<h2 class="title">
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alley' ); ?>
						</h2>
						<div class="post_404_not_found">
							<div class="page_message_404">
								<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'alley' ); ?>
							</div>
							<div class="go-to-home">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e('Back To Home','alley'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</main><!-- #main -->

<?php
get_footer();
