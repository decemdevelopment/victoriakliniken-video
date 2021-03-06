<?php
/**
 * Template Name: FE Dev - Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package victoriakliniken_video
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			get_template_part( '__fe-template-parts/fe-component', 'banner-example' );
			get_template_part( '__fe-template-parts/fe-component', 'text-block-example' );
			get_template_part( '__fe-template-parts/fe-component', 'slider-example' );
			get_template_part( '__fe-template-parts/fe-component', 'video-posts' );
			get_template_part( '__fe-template-parts/fe-component', 'hero-content' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
