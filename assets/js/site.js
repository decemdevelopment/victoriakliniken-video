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

	//Admin Menu
	const videoPostsSlider = require('./_site/video-posts-slider');
	videoPostsSlider.init();
});
