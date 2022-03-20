<div class="video-posts">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php 
					$count_posts = wp_count_posts($type = 'video');
			
					if ( $count_posts ) :
						$published_posts = $count_posts->publish;
						?>
						<span class="video-posts-counter">Hittar <?php esc_html_e($published_posts); ?> filmer</span>
						<?php
					endif;
				?>
			</div>
		</div>
		<div class="row">
			<?php 
				$args = array(  
					'post_type' => 'video',
					'posts_per_page' => -1, 
				);
	
				$loop = new WP_Query( $args ); 
				$i = 1;
				while ( $loop->have_posts() ) : $loop->the_post(); 
					$video_title = get_field('video_title');
					$video_link = get_field('video_link');

					if (preg_match('/src="([^"]+)/', $video_link, $matches)) {
						$video_url = $matches[1];
					}
					?>
					<div class="col-md-6 col-lg-4">
						<a href="<?php echo $video_url; ?>" class="video-post" data-fancybox="video-gallery" data-caption="<?php echo $video_title; ?>">
							<div class="video-link">
								<span class="video-overlay"></span>
								<?php echo $video_link; ?>
							</div>
							<span class="video-date"><?php echo get_the_date('F j, Y'); ?></span>
							<span class="video-title"><?php echo $video_title; ?></span>
						</a>
					</div>
				<?php
				$i++;
				endwhile;
	
				wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>
