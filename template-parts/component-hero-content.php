<div class="hero-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
					<?php
						$title = get_field('page_title');
						$text = get_field('text');
					?>
					<span class="hero-content__title"><?php esc_html_e($title, 'victoriakliniken_video'); ?></span>
					<span class="hero-content__text"><?php esc_html_e($text, 'victoriakliniken_video'); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
