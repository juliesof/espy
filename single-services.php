<?php
/**
 * The template for displaying the individual service pages.
 * Template Name: Homepage Services
 *
 * @package understrap
 */

get_header();

$container   = 'container-fluid';

?>

<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<div class="row">

		<main class="site-main" id="main">

			<?php 

				$images = array();

				while ( have_posts() ) : the_post();
					// Add variables from ACF
					$header = get_field('header_photo');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
					$image_4 = get_field('image_4');
					$image_5 = get_field('image_5');

					$images[] = array(
						$image_1, 
						$image_2, 
						$image_3, 
						$image_4, 
						$image_5
					);

					$img_count = 0;
					$count = 0;
					foreach($images[0] as $i){
						if($i != null){
							$img_count++;
						}
						$count++;
					}
			 ?>

				<header class="entry-header service-entry-header">
					<?php echo wp_get_attachment_image($header, "full"); ?>
					<?php the_title( '<h1 class="service-entry-title text-center">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<section class="service-content container">
					<?php the_content(); ?>
				</section>

				<section class="bottom-images container-fluid">

					<?php // 1 image layout
						if( $img_count == 1) { 
					?>
						<div class="row">
							<div class="single-service-block col-12 d-flex justify-content-center align-items-center">
								<?php echo wp_get_attachment_image($image_1, "full") ?>
							</div>
						</div>

					<?php  // 2 image layout
						} elseif( $img_count == 2 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-md-6">
							<?php echo wp_get_attachment_image($image_1, "full") ?>
						</div>
						<div class="single-service-block col-md-6">
							<?php echo wp_get_attachment_image($image_2, "full") ?>
						</div>
					</div>
					
					<?php  // 3 image layout
						} elseif( $img_count == 3 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-md-4">
							<?php echo wp_get_attachment_image($image_1, "full") ?>
						</div>
						<div class="single-service-block col-md-4">
							<?php echo wp_get_attachment_image($image_2, "full") ?>
						</div>
						<div class="single-service-block col-md-4">
							<?php echo wp_get_attachment_image($image_3, "full") ?>
						</div>
					</div>	

					<?php  // 4 image layout
						} elseif( $img_count == 4 ) { 
					?>
						<div class="row">
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_1, "full") ?>
							</div>
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_2, "full") ?>
							</div>
						</div> <!-- end row 1 -->

						<div class="row">
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_3, "full") ?>
							</div>
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_4, "full") ?>
							</div>
						</div> <!-- end row 2 -->

					<?php  // 5 image layout
						} elseif( $img_count == 5 ) { 
					?>
						<div class="row">
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_1, "full") ?>
							</div>
							<div class="single-service-block col-md-6">
								<?php echo wp_get_attachment_image($image_2, "full") ?>
							</div>
						</div> <!-- end row 1 -->

						<div class="row">
							<div class="single-service-block col-md-4">
								<?php echo wp_get_attachment_image($image_3, "full") ?>
							</div>
							<div class="single-service-block col-md-4">
								<?php echo wp_get_attachment_image($image_4, "full") ?>
							</div>
							<div class="single-service-block col-md-4">
								<?php echo wp_get_attachment_image($image_5, "full") ?>
							</div>
						</div> <!-- end row 2 -->

					<?php } else { // no images ?>
						<div></div>
					<?php } ?>

				</section>

			<?php endwhile; // end of the loop. ?>

			<div class="telly-toggle">
				<div class="telephone-icon">
					Icon
				</div>
				<div class ="telephone-content">
					<span class="telephone-content-wrapper">
						<div class="telephone-toggle-content">
							413.555.5555
						</div>
					</span>
				</div>
			</div>

		</main><!-- #main -->

</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
