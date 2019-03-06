/**
 * Calendar Module JS
 *
 * @package     Cold Spring School
 * @subpackage  JS
 * @author      Adrian Morelos ~ Esteban Rocha ~ Jonathan Caiaffa
 * @link        https://github.com/adrian-morelos
 *              https://github.com/Esteban-Rocha
 *              https://github.com/jcaiaffa
 * @since       1.0.0
 */

var body = jQuery("body");
if (body.hasClass("single-tribe_events")) {
	body.addClass("bg_green");
	jQuery('header.site__header').addClass('template-fixed');
	jQuery('#content').addClass('content-calendar-csc');
}

if (body.hasClass("post-type-archive-tribe_events")) {
	body.addClass("bg_green");
	jQuery('header.site__header').addClass('template-fixed');
	jQuery('#content').addClass('content-calendar-csc');
}