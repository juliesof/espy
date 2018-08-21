<section id="frontpage-testimonials" class="fp-section mt-5">
	<h2 class="text-center">Words from our Clients</h2>
	<div id="fp-testimonials-layout">
		<!-- Testimonial 1 -->
		<div class="fp-testimonial flip-in-hor-bottom text-center">
			<?php
				$imageID = attachment_url_to_postid( "https://localhost/espy/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
				echo wp_get_attachment_image( $imageID, "full" );
				?>
			<div class="quote-text">
				<p class="d-none d-sm-block">&quot;Work that paint. We'll lay all these little funky little things in there. Imagination is the key to painting. Decide where your cloud lives. Maybe he lives right in here. We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p class="d-xs-block d-sm-none">&quot;We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p style="text-align: center;">- B. Ross</p>
			</div>
		</div>
		<!-- Testimonial 2 -->
		<div class="fp-testimonial flip-in-hor-bottom text-center">
			<?php echo wp_get_attachment_image( $imageID, "full" ); ?>
			<div class="quote-text">
				<p class="d-none d-sm-block">&quot;Work that paint. We'll lay all these little funky little things in there. Imagination is the key to painting. Decide where your cloud lives. Maybe he lives right in here. We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p class="d-xs-block d-sm-none">&quot;We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p style="text-align: center;">- B. Ross</p>
			</div>
		</div>
	</div>
</section>