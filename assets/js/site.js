jQuery(function($) {
	// Site Menu
	const menu = require('./_site/menu');
	menu.init();

	// Slick Slider
	const sliders = require('./_site/sliders');
	sliders.init();

	//Admin Menu
	const adminHeader = require('./_site/adminHeader');
	adminHeader.init();

	// Sticky Header
	const stickyHeader = require('./_site/stickyHeader');
	stickyHeader.init();

	// Video Posts Slider
	const videoPostsSlider = require('./_site/video-posts-slider');
	videoPostsSlider.init();
});
