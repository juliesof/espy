/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){
	var $servicesGrid = $("#services-grid")
	$servicesGrid.isotope({
		itemSelector:	'.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
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
