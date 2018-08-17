/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){
	// //Frontpage service grid
	// var $servicesGrid = $('#services-grid')
	// $servicesGrid.isotope({
	// 	itemSelector:	'.grid-item',
	// 	percentPosition: true,
	// 	masonry: {
	// 		columnWidth: '.grid-sizer'
	// 	}
	// }); // end frontpage SERVICES function
	var $servicesGrid = $('#fp-services-grid')
	$servicesGrid.isotope({
		itemSelector:	'.fp-service-item',
		layoutMode: 'masonry'
	}); // end frontpage SERVICES function

		$('#fp-gallery-grid').isotope({
		itemSelector: '.fp-gallery-item',
		layoutMode: 'masonry',
	}); // end frontpage GALLERIES function

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
	$tellyToggle.on('hover', function(){
		$tellyToggle.toggleClass('telephone-icon-small telephone-icon-expanded')
	}); // end TELEPHONE-icon function

}); // end document.ready
