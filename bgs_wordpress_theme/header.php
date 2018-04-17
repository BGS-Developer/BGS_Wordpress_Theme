<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BGS_Wordpress_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bgs_wordpress_theme' ); ?></a>

	<header id="masthead" class="site-header"
					style="
							background-color:<?php echo get_theme_mod('header-background', 'transparent');?>;
							padding-top:<?php echo get_theme_mod('header-padding-y', '10px');?>;
							padding-bottom:<?php echo get_theme_mod('header-padding-y', '10px');?>;
	">
		<div class="container flex-between">
				<div class="site-branding st-3">
					<?php
					if( has_custom_logo() ){
						the_custom_logo();
					}
					else{
						if ( is_front_page() && is_home() ) {
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						}
						else{
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						}
					}

					$bgs_wordpress_theme_description = get_bloginfo( 'description', 'display' );
					if ( $bgs_wordpress_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description" style="display:<?php echo get_theme_mod('header-radio', 'block');?>"><?php echo $bgs_wordpress_theme_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation st-9">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bgs_wordpress_theme' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<button class="btn-md-r" type="button" name="button">Button</button>
	<div id="content" class="site-content">
