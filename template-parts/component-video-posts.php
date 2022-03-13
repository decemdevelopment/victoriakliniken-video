<div class="video-posts">
	<div class="video-posts-container">
		<span class="video-posts-counter">Hittar 9 filmer</span>
		<div class="video-posts-wrapper">
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
					?>
					<a data-fancybox data-type="iframe" data-src="http://codepen.io/fancyapps/full/jyEGGG/" href="javascript:;" class="video-post" data-caption="Caption #<?php echo $i; ?>">
						<div class="video-link">
							<span class="video-overlay"></span>
							<?php echo $video_link; ?>
						</div>
						<span class="video-date"><?php echo get_the_date('F j, Y'); ?></span>
						<span class="video-title"><?php esc_html_e($video_title); ?></span>
					</a>
				
				<?php
				$i++;
				endwhile;
	
				wp_reset_postdata(); 
			?>
		</div>
	</div>
</div>
