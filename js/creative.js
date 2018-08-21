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

	// Front Page Services Grid
	var $servicesGrid = $('#fp-services-grid');
	$servicesGrid.isotope({
		itemSelector:	'.fp-service-item'
	}); // end frontpage SERVICES function

	//Front Page Gallery Section
	var $fp_gallery = $('#fp-gallery-grid');
	$fp_gallery.isotope({
		itemSelector: '.fp-gallery-item'
	}); // end frontpage GALLERIES function

	//Portfolio Gallery Page
	var $textMenu 	= $( '#cb-gallery-buttons' );
		$galMenu	= $( '.photo-menu' )
		$galGrid 	= $( '#cb-gallery-grid' ).isotope({
			itemSelector: '.cb-gallery-item',
			percentPosition: true,
			filter: '.photo-menu',
			stagger: 30,
			masonry: {
				columnWidth: '.cb-gallery-spacer'
			}
		});
	$textMenu.on('click','button',function(){
		var filterValue = $(this).attr('data-filter');
		$galGrid.isotope({ filter: filterValue });
	});
	$galMenu.click(function(){
		var firstFilter = $(this).attr('data-filter');
		$galGrid.isotope({ filter: firstFilter });
	});

	//toggle floating telephone icon number
	var $tellyToggle = $('#tellyToggle');
	$tellyToggle.on('hover', function(){
		$tellyToggle.toggleClass('telephone-icon-small telephone-icon-expanded'
			)
		// 	if($tellyToggle.hasClass('telephone-icon-small')){
		// 	$tellyToggle.switchClass('telephone-icon-small', 'telephone-icon-expanded', 800);
		// }else{
		// 	$tellyToggle.switchClass('telephone-icon-expanded', 'telephone-icon-small', 800);
		// }
	}); // end TELEPHONE-icon function

}); // end document.ready
