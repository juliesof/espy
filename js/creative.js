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

	//toggle floating telephone icon number
	var $tellyToggle = $("#tellyToggle");
	$tellyToggle.on('click', function(){
		$tellyToggle.toggleClass("telephone-icon-small telephone-icon-expanded")
	}); // end TELEPHONE-icon function

}); // end document.ready
