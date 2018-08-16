/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){
	//Homepage service grid
	var $servicesGrid = $('#services-grid')
	$servicesGrid.isotope({
		itemSelector:	'.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
	}); // end homepage SERVICES function

	//Homepage Gallery
	$('#homepage-gallery').isotope({
		itemSelector: '.hp-gallery-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.gallery-sizer',
		}
	}); // end homepage GALLERIES function

	//Service Gallery Page
	var $galMenu = $( '#cb-gallery-buttons' );
		$galGrid = $( '#cb-gallery-grid' ).isotope({
			filter: '.menu-gallery'
		});
	$galMenu.on('click','button',function(){
		var filterValue = $(this).attr('data-filter');
		$galGrid.isotope({ filter: filterValue });

	});


	//toggle floating telephone icon number
	var $tellyToggle = $('#tellyToggle');
	$tellyToggle.on('click', function(){
		$tellyToggle.toggleClass('telephone-icon-small telephone-icon-expanded')
	}); // end TELEPHONE-icon function

}); // end document.ready
