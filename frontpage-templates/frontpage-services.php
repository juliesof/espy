<?php
/*
*
*Template for Homepage Services Section
*
*/

//Retrieve header images from Services acf

$services = new WP_Query( array( 'post_type' => 'services')); //gets posts of post type services

$service_headers = array(); //this will be the list of image IDs

while ( $services -> have_posts()): $services -> the_post(); //for each post in Services...
	$header_image = get_field('header_photo'); //don't even need post ID since we are already in the post
	$service_headers[] = $header_image; //push image ID on 
endwhile;
?>
<section id="frontpage-services" class="mt-5">
	<div class="text-center mb-5">
		<h1>How Can We Help?</h1>
	</div>
	<!-- Begin Masonry Layout -->
	<main id="fp-services-grid">
		<article id="new-construction" class="fp-service-item fp-service-item--height2">
			<?php
			$image_ID = $service_headers[0];
			$image_srcset = wp_get_attachment_image_srcset( $image_ID, 'full' );
			$image_url = wp_get_attachment_image_url($image_ID, 'large');
			$img_alt = get_post_meta( $image_ID, '_wp_attachment_image_alt', true );
			?>
			<div class="service-image">
				<img src="<?php echo esc_attr($image_url); ?>" srcset="<?php echo esc_attr($image_srcset); ?>" alt="<?php echo $img_alt ?>">
			</div>
			<h3 class="service-header">New Construction</h3>
		</article>

		<article id="restoration" class="fp-service-item fp-service-item--width2">
			<?php
			$image_ID = $service_headers[1];
			$image_srcset = wp_get_attachment_image_srcset( $image_ID, 'full' );
			$image_url = wp_get_attachment_image_url($image_ID, 'large');
			$img_alt = get_post_meta( $image_ID, '_wp_attachment_image_alt', true );
			?>
			<div class="service-image">
				<img src="<?php echo esc_attr($image_url); ?>" srcset="<?php echo esc_attr($image_srcset); ?>" alt="<?php echo $img_alt ?>">
			</div>
			<h3 class="service-header">Restoration and Renovation</h3>
		</article>

		<article id="detective" class="fp-service-item fp-service-item--width1">
			<?php
			$image_ID = $service_headers[2];
			$image_srcset = wp_get_attachment_image_srcset( $image_ID, 'full' );
			$image_url = wp_get_attachment_image_url($image_ID, 'large');
			$img_alt = get_post_meta( $image_ID, '_wp_attachment_image_alt', true );
			?>
			<div class="service-image">
				<img src="<?php echo esc_attr($image_url); ?>" srcset="<?php echo esc_attr($image_srcset); ?>" alt="<?php echo $img_alt ?>">
			</div>
			<h3 class="service-header">Architectural Detective Work</h3>
		</article>

		<article id="green" class="fp-service-item fp-service-item--height2">
			<?php
			$image_ID = $service_headers[3];
			$image_srcset = wp_get_attachment_image_srcset( $image_ID, 'full' );
			$image_url = wp_get_attachment_image_url($image_ID, 'large');
			$img_alt = get_post_meta( $image_ID, '_wp_attachment_image_alt', true );
			?>
			<div class="service-image">
				<img src="<?php echo esc_attr($image_url); ?>" srcset="<?php echo esc_attr($image_srcset); ?>" alt="<?php echo $img_alt ?>">
			</div>
			<h3 class="service-header">Green Practices</h3>
		</article>

		<article id="purchase-consult" class="fp-service-item fp-service-item--width2">
			<?php
			$image_ID = $service_headers[4];
			$image_srcset = wp_get_attachment_image_srcset( $image_ID, 'full' );
			$image_url = wp_get_attachment_image_url($image_ID, 'large');
			$img_alt = get_post_meta( $image_ID, '_wp_attachment_image_alt', true );
			?>
			<div class="service-image">
				<img src="<?php echo esc_attr($image_url); ?>" srcset="<?php echo esc_attr($image_srcset); ?>" alt="<?php echo $img_alt ?>">
			</div>
			<h3 class="service-header">Real Estate Purchase Consultation</h3>
		</article>
	</main> <!-- end services-grid -->
</section>