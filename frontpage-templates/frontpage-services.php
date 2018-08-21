<section id="frontpage-services" class="mt-5">
	<div class="text-center mb-5">
		<h2>How Can We Help?</h2>
	</div>
	<!-- Begin Masonry Layout -->
	<main id="fp-services-grid">
		<article id="new-construction" class="fp-service-item fp-service-item--height2">
			<div class="fp-services-inner-wrapper">
				<h2 class="service-header">New Construction</h2>
				<div class="fp-service-photo">
					<?php 
						$constr = attachment_url_to_postid( "/espy/wp-content/uploads/2018/08/ext-3.jpg" );
						//echo wp_get_attachment_image( $constr, "full" ); 
						?>
				</div>
			</div>
		</article>

		<article id="restoration" class="fp-service-item fp-service-item--width2">
			<div class="fp-services-inner-wrapper">
				<h2 class="service-header">Restoration and Renovation</h2>
				<div class="fp-service-photo">
					<?php 
						$rnr = attachment_url_to_postid( "https://localhost/espy/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
						//echo wp_get_attachment_image( $rnr, "full" ); 
						?>
				</div>
			</div>
		</article>

		<article id="detective" class="fp-service-item fp-service-item--width1">
			<div class="fp-services-inner-wrapper">
				<h2 class="service-header">Architectural Detective Work</h2>
				<div class="fp-service-photo">
					<?php 
						$detect = attachment_url_to_postid( "https://localhost/espy/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
						//echo wp_get_attachment_image( $detect, "full" ); 
						?>
				</div>
			</div>
		</article>

		<article id="green" class="fp-service-item fp-service-item--height2">
			<div class="fp-services-inner-wrapper">
				<h2 class="service-header">Green Practices</h2>
				<div class="fp-service-photo">
					<?php 
						$green = attachment_url_to_postid( "https://localhost/espy/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
						//echo wp_get_attachment_image( $green, "full" ); 
						?>
				</div>
			</div>
		</article>

		<article id="purchase-consult" class="fp-service-item fp-service-item--width2">
			<div class="fp-services-inner-wrapper">
				<h2 class="service-header">Real Estate Purchase Consultation</h2>
				<div class="fp-service-photo">
					<?php 
						$estate = attachment_url_to_postid( "https://localhost/espy/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
						//echo wp_get_attachment_image( $estate, "full" ); 
						?>
				</div>
			</div>
		</article>
	</main> <!-- end services-grid -->
</section>