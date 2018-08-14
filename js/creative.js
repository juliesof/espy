/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){
	$('.masonry-layout').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		layoutMode: 'masonry',
		masonry: {
			columnWidth: '.grid-sizer',
			gutter: 10
		}
	});
});
