<section id="frontpage-testimonials" class="fp-section mt-5">
	<h1 class="text-center">Words from our Clients</h1>
	<div id="fp-testimonials-layout">
		<!-- Testimonial 1 -->
		<div 
			class="fp-testimonial text-center"
<<<<<<< HEAD
			data-aos="fade-in" 
			data-aos-delay="300"
			data-aos-duration="1200"
=======
			data-aos="slide-up" 
			data-aos-delay="90"
			data-aos-duration="900"
>>>>>>> 48e66cd473050d7837ab9552453eeb93f6ad7fb4
		>
			<?php
				$url1 = esc_url(get_home_url());
				$testimonialImg = attachment_url_to_postid( $url1."/wp-content/uploads/2018/08/vines-border-transparent-med.png" );
				echo wp_get_attachment_image( $testimonialImg, "full" );
				?>
			<div class="quote-text" style="font-size: 16px;">
				<p class="d-none d-sm-block">&quot;There are 'go to' people in every trade, but in this certain brand of carpentry and project design there is no one quite like Kris. Forget about his big heart—having fronted endless time and resources in support of the fledgling David Ruggles Center; forget about his uncanny knack for dating the structures he works to restore, born from his sheer native curiosity; Kris figures out the best way to approach the needs of his clients and the building by which they hope to do right.&quot;</p>
				<p>Steve Strimer, Director of the David Ruggles Center</p>
			</div>
		</div>
		<!-- Testimonial 2 -->
		<div 
			class="fp-testimonial text-center"
<<<<<<< HEAD
			data-aos="fade-in" 
			data-aos-delay="600"
			data-aos-duration="1200"
=======
			data-aos="slide-up" 
			data-aos-delay="90"
			data-aos-duration="900"
>>>>>>> 48e66cd473050d7837ab9552453eeb93f6ad7fb4
		>
			<?php echo wp_get_attachment_image( $testimonialImg, "full" ); ?>
			<div class="quote-text" style="font-size: 16px;">
				<p class="d-none d-sm-block">&quot;Work that paint. We'll lay all these little funky little things in there. Imagination is the key to painting. Decide where your cloud lives. Maybe he lives right in here. We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p class="d-xs-block d-sm-none">&quot;We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted.&quot;</p>
				<p style="text-align: center;">- B. Ross</p>
			</div>
		</div>
	</div>
</section>