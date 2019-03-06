<?php
/**
 * File mobile-navigation.js.
 *
 * @link        https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package     Cold_Spring_School
 * @subpackage  JS
 * @author      Andres Posada
 * @link        https://github.com/posadallano
 * @since       1.0.0
 */


// Mobile Menu

var windowWidth = jQuery(window).width();

// Insert site-navigation-left After site-branding
function moveNavigationLeft () {
	jQuery(".site-navigation-left").insertAfter(jQuery(".site__header .site-branding"));
}

// Wrap Menus
function wrapMenus () {
	jQuery('.site-navigation-left, .site-navigation-right').wrapAll( "<div class='wrap-menu-mobile'></div>" );
}

// Wrap Social Icons
function wrapSocial () {
	jQuery('.site__header .white-version, .site__header .white-version, .social-media-footer.only-mobile').wrapAll( "<div class='social-header'></div>" );
}


// Check if banner exist
function logoTop () {
	if ( (jQuery('.page-wrapper').find('.banner').length == 0) && (!jQuery('header').hasClass("template-fixed")) ) {
		jQuery('header.close-main-nav .site-branding').css('padding-bottom', '30px');
	}
}

(function($) {
	// Custom Hamburger Menu
	$(document).ready(function() {
		// Cache jQuery elements
		var $burgerMenu = $(".burgerMenu");

		// Burger_Menu
		$burgerMenu.click(function() {
			$('.site__header .site-branding').toggleClass('open');
			$('body .site__header .social-header').toggleClass('open');
			$('body .site__header').toggleClass('open');
			if($('.wrap-menu-mobile').css('left')=='0px'){
			    $('.wrap-menu-mobile').animate({left: '-768px'}, 400);  

			}else{
			    $('.wrap-menu-mobile').animate({left:0}, 400); 
			}
			$('.burgerMenu__wrap').toggleClass('open');
		});


		if (windowWidth < 769) {
			moveNavigationLeft();
			wrapMenus();
			wrapSocial();
			$('.site-navigation-left, .site-navigation-right').show();
			$( ".social-header" ).insertAfter( "#site-navigation-right" );
		} else {
			logoTop();
		}


	});
})(jQuery);
