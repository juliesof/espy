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
	}); // end homepage SERVICES function

	$('#homepage-galleries').isotope({
		itemSelector: '.hp-gallery-item',
		layoutMode: 'masonry',
		masonry: {
			columnWidth: 10,
			gutter: 10
		}
	}); // end homepage GALLERIES function

	// $('.telephone-icon').on('click', function(){
	// 	if( $('.telephone-icon .telephone-icon-expanded') ){
	// 		$(this)
	// 			.removeClass('telephone-icon-expanded')
	// 			.addClass('telephone-icon-small');
	// 	} else if( $('.telephone-icon .telephone-icon-small') ) {
	// 		$(this)
	// 			.css('background-color', 'green')
	// 			.removeClass('telephone-icon-small')
	// 			.addClass('telephone-icon-expanded');
	// 	}
	// }); // end TELEPHONE-icon function
	var $tellyClick = $("#telephone-icon");
	$tellyClick.on('click', function(){
		$tellyClick.toggleClass("telephone-icon-small telephone-icon-expanded")
	}); // end TELEPHONE-icon function

}); // end document.ready
