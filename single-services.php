<?php
/**
 * The template for displaying the individual service pages.
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
					<div class="service-content-box">
						<?php the_content(); ?>
					</div>
				</section>

				<section class="bottom-images container">

					<?php // 1 image layout
						if( $img_count == 1) { 
					?>
						<div class="row">
							<div class="single-service-block col-sm-6 offset-sm-3 d-flex justify-content-center align-items-center">
								<div class="service-image-frame">
									<?php 
										$image_srcset = wp_get_attachment_image_srcset($image_1,'xlarge');
										$image_url = wp_get_attachment_image_url( $image_1, "med-large" );
										$img_alt = get_post_meta( $image_1, '_wp_attachment_image_alt', true);?>
									<img 
										src="<?php echo esc_attr( $image_url ); ?>" 
										srcset = "<?php echo esc_attr( $image_srcset ); ?>"
										sizes = "(max-width: 575px) 95vw, 45vw"
										alt = "<?php echo $image_alt; ?>"
									>
								</div>
							</div>
						</div>

					<?php  // 2 image layout
						} elseif( $img_count == 2 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
										$image_srcset = wp_get_attachment_image_srcset($image_1,'xlarge');
										$image_url = wp_get_attachment_image_url( $image_1, "med-large" );
										$img_alt = get_post_meta( $image_1, '_wp_attachment_image_alt', true);?>
									<img 
										src="<?php echo esc_attr( $image_url ); ?>" 
										srcset = "<?php echo esc_attr( $image_srcset ); ?>"
										sizes = "(max-width: 575px) 95vw, 45vw"
										alt = "<?php echo $image_alt; ?>"
									>
							</div>
						</div>
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
										$image_srcset = wp_get_attachment_image_srcset($image_2,'xlarge');
										$image_url = wp_get_attachment_image_url( $image_2, "med-large" );
										$img_alt = get_post_meta( $image_2, '_wp_attachment_image_alt', true);?>
									<img 
										src="<?php echo esc_attr( $image_url ); ?>" 
										srcset = "<?php echo esc_attr( $image_srcset ); ?>"
										sizes = "(max-width: 575px) 95vw, 45vw"
										alt = "<?php echo $image_alt; ?>"
									>
							</div>
						</div>
					</div>
					
					<?php  // 3 image layout
						} elseif( $img_count == 3 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-sm-4">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_1,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_1, "med-large" );
									$img_alt = get_post_meta( $image_1, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-4">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_2,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_2, "med-large" );
									$img_alt = get_post_meta( $image_2, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-4">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_3,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_3, "med-large" );
									$img_alt = get_post_meta( $image_3, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
					</div>	

					<?php  // 4 image layout
						} elseif( $img_count == 4 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_1,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_1, "med-large" );
									$img_alt = get_post_meta( $image_1, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_2,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_2, "med-large" );
									$img_alt = get_post_meta( $image_2, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
					</div> <!-- end row 1 -->

					<div class="row">
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_3,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_3, "med-large" );
									$img_alt = get_post_meta( $image_3, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_4,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_4, "med-large" );
									$img_alt = get_post_meta( $image_4, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
					</div> <!-- end row 2 -->

					<?php  // 5 image layout
						} elseif( $img_count == 5 ) { 
					?>
					<div class="row">
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_1,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_1, "med-large" );
									$img_alt = get_post_meta( $image_1, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-6">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_2,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_2, "med-large" );
									$img_alt = get_post_meta( $image_2, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 45vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
					</div> <!-- end row 1 -->

					<div class="row">
						<div class="single-service-block col-sm-4 pb-2 pb-sm-0">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_3,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_3, "med-large" );
									$img_alt = get_post_meta( $image_3, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-4 d-none d-sm-block">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_4,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_4, "med-large" );
									$img_alt = get_post_meta( $image_4, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
						<div class="single-service-block col-sm-4 d-none d-sm-block">
							<div class="service-image-frame">
								<?php 
									$image_srcset = wp_get_attachment_image_srcset($image_5,'xlarge');
									$image_url = wp_get_attachment_image_url( $image_5, "med-large" );
									$img_alt = get_post_meta( $image_5, '_wp_attachment_image_alt', true);?>
								<img 
									src="<?php echo esc_attr( $image_url ); ?>" 
									srcset = "<?php echo esc_attr( $image_srcset ); ?>"
									sizes = "(max-width: 575px) 95vw, 30vw"
									alt = "<?php echo $image_alt; ?>"
								>
							</div>
						</div>
					</div> <!-- end row 2 -->

					<?php } else { // no images ?>
						<div></div>
					<?php } ?>

				</section>

			<?php endwhile; // end of the loop. ?>

			<div class="telly-toggle expanded-icon d-sm-inline d-none">
				<div class ="telephone-content">
					<div class="telephone-toggle-content">
						<div class="telephone-toggle-content-frame">
							<div class="d-lg-inline d-none">Call Us</div>
							<div>413.695.6487</div>
						</div>
					</div>
				</div>
				<div class="telephone-icon-frame">
					<i class="fa fa-phone fa-2x"></i>
				</div>
			</div>
		</main><!-- #main -->

</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
