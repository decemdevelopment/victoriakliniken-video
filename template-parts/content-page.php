<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package victoriakliniken_video
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php victoriakliniken_video_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
