<?php
/**
 * The template for displaying the alternating blocks layout
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

				while ( have_posts() ) : the_post();
		  ?>

				<header class="entry-header text-center">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header><!-- .entry-header -->

					
					<section class="row block-row">
						<div class="col-lg-6 block-element block-1">
							test 1
						</div>
						<div class="col-lg-6 block-element block-2">
							test 2
						</div>
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element block-1">
								test 1
							</div>
							<div class="col-lg-6 block-element block-2">
								test 2
							</div>
						
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element block-1">
								test 1
							</div>
							<div class="col-lg-6 block-element block-2">
								test 2
							</div>
				
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element block-1">
								test 1
							</div>
							<div class="col-lg-6 block-element block-2">
								test 2
							</div>
		
					</section>
		

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
