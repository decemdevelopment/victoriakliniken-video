<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package victoriakliniken_video
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); if(is_front_page()) {echo ' itemscope itemtype="http://schema.org/WebSite"';} elseif(is_page()) {echo ' itemscope itemtype="http://schema.org/WebPage"';} elseif(is_home()) {echo ' itemscope itemtype="http://schema.org/Blog"';} ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'victoriakliniken_video' ); ?></a>

	<?php
		$headerCtaLink = get_field('header_cta_link', 'option');
	?>
	
	<header id="masthead" class="site-header">
		<div class="site-header-wrapper">
			<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo" title="<?php bloginfo( 'name' ); ?>">
			</a><!-- .site-branding -->

			<a href="javascript:;" class="menu-btn js-menu-btn"><span></span></a>    <!-- menu-button -->

			<div class="header__menu">
				<nav id="site-navigation" class="main-navigation js-main-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'primary-menu clear',
						'container'      => false
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			
			<span>Lang</span>
			<span class="header__btn-wrapper">
				<a href="<?php echo $headerCtaLink['url']; ?>" class="btn">
					<span class="btn-text"><?php echo $headerCtaLink['title']; ?></span>
					<span class="btn-icon font-chevron-right"></span> 
				</a>
			</span>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
