<?php
	$bannerTitle = get_field('banner_small_title');
	$bannerLink = get_field('banner_small_link');
	$bannerText = get_field('banner_small_text');
	$centeredText = get_field('centered_text');
	$backgroundImageMobile = get_field('banner_small_background_mobile');
	$backgroundImageDesktop = get_field('banner_small_background_desktop');
?>
<div class="banner-small has-responsive-img">
	<div class="banner-small__background">
		<picture>
			<!-- Picture on large screens-->
			<source media="(min-width: 1200px)" srcset="<?php echo $backgroundImageDesktop['url']; ?>">
			<!-- Picture on tablet screens-->
			<source media="(min-width: 768px)" srcset="<?php echo $backgroundImageDesktop['url']; ?>">
			<!-- Picture on screens less than 768px width-->
			<img class="has-cover-img" src="<?php echo $backgroundImageMobile['url']; ?>" alt="<?php echo $backgroundImageMobile['alt']; ?>">
		</picture>
	</div>
	<div class="container">
		<div class="row">
			<div class="offset-lg-2 col-lg-6">
				<div class="banner-small-wrap">
					<h3 class="banner-small__title section-title section-title--small"><?php echo $bannerTitle; ?></h3>
					<?php if ($bannerText) : ?>
						<div class="banner-small__text entry-content">
							<?php echo $bannerText; ?>
						</div>
					<?php endif; ?>
					<div class="banner-small__btn-wrap">
						<a href="<?php echo $bannerLink['url']; ?>" class="btn">
							<span class="btn-text"><?php echo $bannerLink['title']; ?></span>
							<span class="btn-icon font-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>