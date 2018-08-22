<section id="frontpage-services" class="mt-5">
	<div class="text-center mb-5">
		<h1>How Can We Help?</h1>
	</div>
	<!-- Begin Masonry Layout -->
	<main id="fp-services-grid">
		<article id="new-construction" class="fp-service-item fp-service-item--height2">
			<div class="service-image">
				<?php
					$homeURL = esc_url(get_home_url());
					$imageConstr = attachment_url_to_postid( $homeURL."/wp-content/uploads/2018/08/ext-3.jpg" );
					echo wp_get_attachment_image( $imageConstr, "full" );
					?>
			</div>
			<h3 class="service-header">New Construction</h3>
		</article>

		<article id="restoration" class="fp-service-item fp-service-item--width2">
			<div class="service-image">
				<?php
					$homeURL = esc_url(get_home_url());
					$imageRnR = attachment_url_to_postid( $homeURL."/wp-content/uploads/2018/08/renov-fp-crop.jpg" );
					echo wp_get_attachment_image( $imageRnR, "full" );
					?>
			</div>
			<h3 class="service-header">Restoration and Renovation</h3>
		</article>

		<article id="detective" class="fp-service-item fp-service-item--width1">
			<div class="service-image">
				<?php
					$homeURL = esc_url(get_home_url());
					$imageDetective = attachment_url_to_postid( $homeURL."/wp-content/uploads/2018/08/arch-detect-fp-crop.jpg" );
					echo wp_get_attachment_image( $imageDetective, "full" );
					?>
			</div>
			<h3 class="service-header">Architectural Detective Work</h3>
		</article>

		<article id="green" class="fp-service-item fp-service-item--height2">
			<div class="service-image">
				<?php
					$homeURL = esc_url(get_home_url());
					$imageGreen = attachment_url_to_postid( $homeURL."/wp-content/uploads/2018/08/menu-exterior.jpg" );
					echo wp_get_attachment_image( $imageGreen, "full" );
					?>
			</div>
			<h3 class="service-header">Green Practices</h3>
		</article>

		<article id="purchase-consult" class="fp-service-item fp-service-item--width2">
			<div class="service-image">
				<?php
					$homeURL = esc_url(get_home_url());
					$imageConsult = attachment_url_to_postid( $homeURL."/wp-content/uploads/2018/08/consultation-fp-crop.jpg" );
					echo wp_get_attachment_image( $imageConsult, "full" );
					?>
			</div>
			<h3 class="service-header">Real Estate Purchase Consultation</h3>
		</article>
	</main> <!-- end services-grid -->
</section>