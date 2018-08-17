<?php
/**
 * The template for displaying the individual service pages.
 *
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
						echo [$i][$count];
						if($i[$count] != null){
							$img_count++;
						}
						$count++;
					}

					echo $img_count;
			 ?>

				<header class="entry-header service-entry-header">
					<img src="<?php echo $header ?>">
					<?php echo $img_count ?>
					<div class="header-content">
						<?php the_title( '<h1 class="entry-title header-text text-center">', '</h1>' ); ?>
					</div>
				</header><!-- .entry-header -->

				<section class="service-content">
					<?php the_content(); ?>
				</section>

				<section class="bottom-images">
					<?php // 1 image layout
						if( $img_count == 1) { 
					?>
						<div>
							1 image
						</div>
					<?php  // 2 image layout
						} elseif( $img_count == 2 ) { 
					?>
						<div>
							2 images
						</div>
						<div>
							
						</div>
					<?php  // 3 image layout
						} elseif( $img_count == 3 ) { 
					?>
						<div>
							3 images
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
					<?php  // 4 image layout
						} elseif( $img_count == 4 ) { 
					?>
						<div>
							
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
					<?php  // 5 image layout
						} elseif( $img_count == 5 ) { 
					?>
						<div>
							
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
						<div>
							
						</div>
					<?php } else { ?>
						<div>no images</div>
					<?php } ?>
				</section>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
