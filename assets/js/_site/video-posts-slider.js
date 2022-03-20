"use strict";

let Global = require('./global');
module.exports = {
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		videoPosts: $('.video-posts'),
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const $dom = this.$dom;

        $('[data-fancybox]').fancybox({
            toolbar  : false,
            smallBtn : true,
            // iframe : {
            //     preload : false
            // }
        })
        
	}
};