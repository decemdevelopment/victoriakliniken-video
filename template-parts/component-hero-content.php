<div class="hero-content">
	<div class="hero-content--wrapper">
		<?php
			$title = get_field('page_title');
			$text = get_field('text');
		?>
		<div class="hero-content--half">
			<span class="hero-content--title"><?php esc_html_e($title, 'victoriakliniken_video'); ?></span>
			<span class="hero-content--text"><?php esc_html_e($text, 'victoriakliniken_video'); ?></span>
		</div>
		<div class="hero-content--half"></div>
	</div>
</div>
