/**
 * Read More/Less Module JS
 *
 * @package     Cold Spring School
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */

var windowWidth = jQuery(window).width();

function readMoreLess() {
	if (jQuery(".fulltext").length) {
		jQuery(".fulltext").hide();
		if(jQuery('.section-two-column-content').find('.fulltext').length !== 0) {
			jQuery("<a class='readmore rm' href='#'>learn more ></a>").insertAfter(".fulltext");
		} else {
			jQuery("<a class='readmore' href='#'>read more ></a>").insertAfter(".fulltext");
		}
	}

	jQuery('.blockquote-box .readmore, .two-column-content .readmore').click(function (event) {
	    event.preventDefault();
	    var fullT = jQuery(this).prev();
	    if ( (fullT).is(':visible') ) {
	    	jQuery(fullT).fadeIn("slow").css("display","none");
	    } else {
	    	jQuery(fullT).fadeIn("slow").css("display","inline");
	    }
	    jQuery(this).text(jQuery(this).text() == 'read less <' ? 'read more >' : 'read less <');
	});	

	jQuery('.section-two-column-content .readmore').click(function (event) {
		event.preventDefault();
	    var fullT = jQuery(this).prev();
	    if ( (fullT).is(':visible') ) {
	    	jQuery(fullT).fadeIn("slow").css("display","none");
	    } else {
	    	jQuery(fullT).fadeIn("slow").css("display","inline");
	    }
	    jQuery(this).text(jQuery(this).text() == 'Learn more <' ? 'Learn more >' : 'Learn more <');
	});		
}


if(jQuery('.section-two-column-content, .two-column-content').find('.fulltext').length !== 0) {
	readMoreLess();
	jQuery('.readmore.rm').closest(".section-two-column-content").addClass("readm");
	jQuery('.readmore.rm').closest(".two-column-content").addClass("readm");
} else if ( (windowWidth < 769) && (jQuery('.blockquote-box').find('.fulltext').length !== 0) ) {
	readMoreLess();
}