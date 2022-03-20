<?php
/**
 * Template Name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package victoriakliniken_video
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php 
			get_template_part( 'template-parts/component', 'hero-content' );
			get_template_part( 'template-parts/component', 'video-posts' );
			get_template_part( 'template-parts/component', 'banner-small' ); 
			?>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
