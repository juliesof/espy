/*!
 * Creative JS ver 1.0
 *
 */
jQuery( document ).ready(function( $ ){

	//insert spans into site title for to stack in small screen widths
	var $siteTitle = $('.site-title');
		$titleWords = $siteTitle.text().split(" ");
		$count 		= 0;
	//remove current text from site title
	$siteTitle.empty();
	// loop each word in the site title and wrap them in spans
	$.each($titleWords, function(i, v) {
		$siteTitle.append($("<span class='span-" + $count + "'>").text(v + " "));
		$count++;
	});

	// after spans are created unhide the header content
	var $headerWrapper = $('.header-hide');
	if($headerWrapper){
		$headerWrapper.removeClass('header-hide');
	}

	// size hero image to fill viewport
	if ($('body').hasClass('home')){
		var $hero = $('#hero');
		function heroHeight(){
			if( $(window).width() > 992 ) {
					$navbar = $('#wrapper-navbar');
					$height = $(window).height() - $navbar.height();
				$hero.css({'height':$height});
			}else {
				$hero.css({'height':'50vh'});
			}
		}
		//run on page load
		heroHeight();
		//run on page resize
		$(window).resize(heroHeight);
	}


	//toggle floating telephone icon number
	var $tellyToggle 		= $('.telly-toggle');
	var $tellyToggleIcon 	= $('.telephone-icon'); 
	$(window).one('scroll', function(){
		$tellyToggle.removeClass('expanded-icon');
	});
	$tellyToggle.on('click', function(){
		$tellyToggle.toggleClass('expanded-icon');
	}); 
	// end TELEPHONE-icon functionality


	//-----Isotope
	//
	//Front Page Services Section
	var $servicesGrid = $('#fp-services-grid').isotope({
		itemSelector: '.fp-service-item'
	}); // end frontpage SERVICES function
	
	//
	//CB Gallery Page
	var $textMenu 	= $( '#cb-gallery-menu' );
		$galButtons	= $( '#cb-gallery-buttons' );
		$galMenu	= $( '.photo-menu' );
		$galWelcome	= $( '#gallery-welcome' );
	//Filter gallery with hashtag in url
	var $hashID = '.' + window.location.hash.substring(1);// Store # parameter and add "." before hash
		$initFilter = '';
	if ($hashID == '.') {
		$initFilter = '.photo-menu';
	} else {
		$initFilter = $hashID;
		$('button[data-filter="'+$hashID+'"]').addClass('active-category');
		$textMenu.removeClass( 'd-none' );
		$galMenu.addClass( 'd-none' );
		$galWelcome.addClass( 'd-none' );
	}
	var	$cb_gallery = $( '#cb-gallery-grid' ).isotope({
			itemSelector: '.cb-gallery-item',
			stagger: 10,
			filter: $initFilter,
			percentPosition: true,
			masonry: {		
				columnWidth: '.cb-gallery-spacer'
			}
		});
	//show content when isotope finishes loading
	$cb_gallery.imagesLoaded().removeClass('gallery-hidden');
	// trigger isotope filter when button or photo menu is clicked
	var $galleryMenuButton = $('#cb-gallery-menu' > 'button');
	$galleryMenuButton.on('click','button',function(){
		var filterValue = $(this).attr('data-filter');
		$cb_gallery.isotope({ filter: filterValue });
	});
	$galMenu.click(function(){
		var $firstClick = $(this).attr('data-filter');
		$('button[data-filter="'+$firstClick+'"]').addClass( 'active-category' );
		$cb_gallery.isotope({ filter: $firstClick });
		$textMenu.removeClass('d-none');
		$galMenu.addClass( 'd-none' );
		$galWelcome.addClass( 'd-none' );
	});
	//Change color of gallery menu button on click (active category) 
	$galButtons.on('click','button',function(){
		var $filterValue = $(this).attr( 'data-filter' );
		$( '#cb-gallery-buttons>button' ).removeClass( 'active-category' );
		$(this).addClass( 'active-category' );
		$cb_gallery.isotope({ filter: $filterValue });
		if ($filterValue == '.all-images'){
			$cb_gallery.isotope('shuffle');
		}
	});
	// featherlight addons
	$('.exteriors-category').featherlightGallery({
		
			nextIcon: 'next zzzzzzzz',
			previousIcon: 'xxxxxx previous',
			gallerFadeIn: 900,
		
	});
	//End CB Gallery


	// smooth scrolling for internal page links.  Many thanks to Chris C of css tricks
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
