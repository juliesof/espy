/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){
	$('.masonry-layout').isotope({
		itemSelector: '.grid-item',
		layoutMode: 'masonry',
		masonry: {
			columnWidth: 10,
			gutter: 10
		}
	});
});
