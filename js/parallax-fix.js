/**
 * Parallax Module JS
 *
 * @package     Cold Spring School
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

var windowWidth = jQuery(window).width();

// Get Background Image Size
jQuery.fn.getBgImage = function(callback) {
	var height = 0;
	var path = jQuery(this).css('background-image').replace('url', '').replace('(', '').replace(')', '').replace('"', '').replace('"', '');
	var tempImg = jQuery('<img />');
	tempImg.hide();
	tempImg.bind('load', callback);
	jQuery('body').append(tempImg); 
	tempImg.attr('src', path);
	jQuery('#tempImg').remove(); 
};

// Aspect Ratio - mobile images
function aspectRatioMobile () {
	jQuery('.non-title .parallax-mobile').each(function(){
		var $this = jQuery(this);
		jQuery(this).getBgImage(function() {
			var backHeight = jQuery(this).height();
			var backWidth = jQuery(this).width();
			var backgImg = backHeight / backWidth;
	        var ratioBackg = (backgImg * 100) + '%';
	        jQuery($this).css('padding-bottom', ratioBackg);
		});
	});
}

if (windowWidth < 769) {
	aspectRatioMobile();
}