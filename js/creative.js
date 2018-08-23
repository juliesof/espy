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

	// Front Page animated scroll-down arrow


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
		var firstClick = $(this).attr('data-filter');
		$galGrid.isotope({ filter: firstClick });
		$textMenu.removeClass('d-none')
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

// smooth scrolling for internal page links.  Many thanks to Chris Coyier of css tricks
		// Select all links with hashes
		var $allLinks = $('a[href*="#"]')
		$allLinks
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function(event) {
				// On-page links
				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
					&& 
					location.hostname == this.hostname
					&&
					!$(this).hasClass('children-nav-tab')
				) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					// Does a scroll target exist?
					if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000, function() {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
								return false;
							} else {
								$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
								$target.focus(); // Set focus again
							};
						});
					}
				}
		});//end smooth anchor scroll
	

}); // end document.ready
