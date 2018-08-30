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

<!-- 	<div class="row">-->

		<main class="site-main" id="main"> 

			<?php 

				while ( have_posts() ) : the_post();
		  ?>

				<header class="entry-header text-center">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php 
					if( have_rows('template_row') ): 
						while( have_rows('template_row') ) : the_row();

						$text = get_sub_field('text_block');
						$image = get_sub_field('image');
				?>
					<section class="row block-row">
						<div class="col-lg-6 block-element ">
							
						</div>
						<div class="col-lg-6 block-element">
							
						</div>
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element ">
								
							</div>
							<div class="col-lg-6 block-element">
								
							</div>
						
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element ">
								
							</div>
							<div class="col-lg-6 block-element">
								
							</div>
				
					</section>

					<section class="row block-row">
							<div class="col-lg-6 block-element ">
								
							</div>
							<div class="col-lg-6 block-element">
								
							</div>
		
					</section>

				<?php endwhile; endif; ?>
		

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

<!-- </div> --><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
