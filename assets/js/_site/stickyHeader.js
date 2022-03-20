"use strict";
var Global = require('./global'); // require Global only if you need it
module.exports = {
	/*-------------------------------------------------------------------------------
   	# Cache dom and strings
   -------------------------------------------------------------------------------*/
    $dom: {
        domHeader: $('.site-header')
    },

    classes: {
        sticky: 'sticky',
        animateHeader: 'animate-header'
    },

    attr: {
        exampleDataAttr: 'data-something'
    },

    /*-------------------------------------------------------------------------------
    # Initialize
    -------------------------------------------------------------------------------*/
    init: function init() {
        // get dom and strings
        var $dom = this.$dom;
        var classes = this.classes;
        var attr = this.attr;
        var ww = Global.vars.windowWidth; // this variable is called from global.js file

        // functions

        // const HeaderOffsetTop = $('.site-header').offset().top;
        $(window).on('scroll', function () {
            
            if (ww > 767) {
                if ($(window).scrollTop() >= 200) {
                    $dom.domHeader.addClass(classes.sticky);
                } else {
                    $dom.domHeader.removeClass(classes.sticky);
                }

                if ($(window).scrollTop() >= 800) {
                    $dom.domHeader.addClass(classes.animateHeader);
                } else {
                    $dom.domHeader.removeClass(classes.animateHeader);
                }
            } else {
                if ($(window).scrollTop() >= 71) {
                    $dom.domHeader.addClass(classes.sticky);
                } else {
                    $dom.domHeader.removeClass(classes.sticky);
                }


                if ($(window).scrollTop() >= 800) {
                    $dom.domHeader.addClass(classes.animateHeader);
                } else {
                    $dom.domHeader.removeClass(classes.animateHeader);
                }
            }
        });
    }
};