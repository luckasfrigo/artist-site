<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alley
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'alley' ); ?>
	</a>
	<!-- Mobile Menu -->
	<div class="container">
		<div class="block-mobile">
			<!-- Logo -->
			<div class="logo">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
					<?php
				endif;
				$alley_description = get_bloginfo( 'description', 'display' );
				if ( $alley_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $alley_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
			<!-- End Logo -->
			<!-- Mobile -->
			<div class="menu-mobile">
				<button> 
					<span class="item item-1"></span>
					<span class="item item-2"></span>
					<span class="item item-3"></span>
				</button>

			</div>
			<!-- End Mobile -->
		</div>
	</div>

	<div class="hide-menu"></div>
	<!-- End Mobile Menu -->
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="header affix">
					<div class="table">
						<div class="table-cell">
							
							
							<!-- Logo -->
							<div class="logo">
								<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title">
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								else :
									?>
									<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
									<?php
								endif;
								$alley_description = get_bloginfo( 'description', 'display' );
								if ( $alley_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo $alley_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
								<?php endif; ?>
							</div>
							<!-- End Logo -->
							<!-- Navigation -->
							<div class="main-menu">
								<nav>
									<?php
										if (has_nav_menu('menu-1')) {
						                    wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'container' => 'ul',
												'menu_class'      => 'menu-list',
												'depth' => 1,
											));
						                }
					                ?>
					            </nav>
					            </div>
							<!-- End Navigation -->
							<div class="mt-5 center d-flex justify-content-end align-items-center">
							<div id="top-social">
					
								<?php if(get_theme_mod('alley_facebook')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_twitter')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_instagram')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_pinterest')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_bloglovin')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_tumblr')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_youtube')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_dribbble')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_soundcloud')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_vimeo')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_linkedin')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
								<?php if(get_theme_mod('alley_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('alley_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
					
							</div>
							</div>
							<!-- End Socials -->

							<div class="copyright">
								<p>	
									<span class="copyright">
										<?php printf(esc_html__('%1$s %2$s %3$s - ', 'alley'), '&copy;', esc_attr(date_i18n(__('Y', 'alley'))), esc_attr(get_bloginfo())); ?>
									</span>
									<?php
									/* translators: 1: Theme name, 2: Theme author. */
									printf( esc_html__( 'Theme By %1$s : %2$s.', 'alley' ), '', '<a target="_blank" rel="designer" href="'.esc_url( 'https://zthemes.net/' ).'">'. esc_html__( 'ZThemes', 'alley' ). '</a>' );
									?>
								</p>
							</div>
							<div class="close-block">
								<a href="javascript:void(0)"><div class="btn-close"></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>