<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package victoria_kliniken
 */

?>

<?php 
	$socialLinks = get_field('social_links', 'option');
?>

	<?php if ( 'behandlingar' == get_post_type() ) : ?>
		<?php 
			$slidingCalculatorTitle = get_field('sliding_calculator_title', 'option');
			$slidingCalculatorText = get_field('sliding_calculator_text', 'option');
			$slidingCalculatorButton = get_field('sliding_calculator_button', 'option');
			$slidingCalculatorSmallText = get_field('sliding_calculator_small_text', 'option');
			$loanMinValue = get_field('sliding_calculator_loan_min_value', 'option');
			$loanMaxvalue = get_field('sliding_calculator_loan_max_value', 'option');
			$numOfRatesMin = get_field('sliding_calculator_rate_min_value', 'option');
			$numOfRatesMax = get_field('sliding_calculator_rate_max_value', 'option');
		?>
		
	<?php endif; ?>

	<footer id="colophon" class="site-footer">
		<div class="footer-wrapper">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 col-sm-12">
						<ul class="footer-contact footer-items">
							<span class="footer-title"><?php _e('Kontakt', 'victoriakliniken_video'); ?></span>
							<?php if ( have_rows('footer_contact', 'option') ) : ?>
							<li class="footer-item">
							</li>
							<?php while( have_rows('footer_contact', 'option') ) : the_row(); ?>
							<li class="footer-item">
								<?php the_sub_field('footer_contact_info', 'option'); ?></li>
							<?php endwhile; ?>
							<?php endif; ?>
							<li class="footer-item"><?php echo get_field('footer_contact', 'option'); ?></li>
						</ul>
					</div>

					<div class="col-lg-4 col-sm-12">
						<div class="footer-nav footer-items">
							<ul class="footer-socials footer-items m-hide">
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['instagram_url']; ?>">
										<span class="footer-social-icon font-instagram"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['facebook_url']; ?>">
										<span class="footer-social-icon font-facebook"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['twitter_url']; ?>">
										<span class="footer-social-icon font-twitter"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['youtube_url']; ?>">
										<span class="footer-social-icon font-youtube"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-5 col-sm-12">
						<div class="footer-column-four-wrapper">
							<div class="footer-subscription footer-items">
								<div class="subscription-wrapper">
									<?php if ( get_field('subscribe_title', 'option') ) : ?>
										<h4 class="footer-title"><?php echo get_field('subscribe_title', 'option'); ?></h4>
									<?php endif; ?>
									<div class="newsletter">
										<input type="text" placeholder="Din mail address">
										<button class="btn newsletter-btn"><?php _e('ANMÄL', 'victoriakliniken_video'); ?></button>
									</div>
								</div>
							</div>
							<ul class="footer-socials footer-items d-hide">
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['instagram_url']; ?>">
										<span class="footer-social-icon font-instagram"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['facebook_url']; ?>">
										<span class="footer-social-icon font-facebook"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['twitter_url']; ?>">
										<span class="footer-social-icon font-twitter"></span>
									</a>
								</li>
								<li class="footer-social">
									<a target="_blank" class="social-icon" href="<?php echo $socialLinks['youtube_url']; ?>">
										<span class="footer-social-icon font-youtube"></span>
									</a>
								</li>
							</ul>
							
							<?php if (have_rows('badges', 'option')): ?>	
							<div class="footer__badges-wrapper">
								<ul>
									<?php while(have_rows('badges', 'option')): the_row();

										$badgeImage = get_sub_field('badge_image');
									?>
										<li class="footer__badges-badge">		
											<img src="<?php echo $badgeImage['url'];?>" alt="<?php echo $badgeImage['alt'];?>">
										</li>
									<?php endwhile;?>				
									
								</ul>
							</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>

            <div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright-wrapper">
							<a class="site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo" title="<?php bloginfo( 'name' ); ?>">
								<img class="site-logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-small.svg" alt="<?php bloginfo( 'name' ); ?> Small Logo" title="<?php bloginfo( 'name' ); ?>">
							</a><!-- .site-branding -->
							<small class="copyright">
								&copy; <?php echo date("Y"); ?> AB Victoriakliniken, all rights reserved
							</small>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>