<?php
/**
 * The template for displaying the alternating blocks layout
 *
 *
 * @package understrap
 */

get_header();

?>

<div class="container-fluid" id="content" tabindex="-1">

	<?php 

		while ( have_posts() ) : the_post();
	?>

		<header class="entry-header text-center">
			<?php the_title( '<h1 class="block-header">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php 
			if( have_rows('template_row') ): 
				while( have_rows('template_row') ) : the_row();

				$text = get_sub_field('text_block');
				$image = get_sub_field('image');
		?>
			<section class="row block-row">
				<div class="col-lg-6 block-element">
					<?php echo wp_get_attachment_image($image, 'full') ?>
				</div>
				<div class="col-lg-6 block-element">
					<?php echo $text ?>
				</div>
			</section>

		<?php endwhile; endif; ?>


	<?php endwhile; // end of the loop. ?>
	
	<div class="telly-toggle d-sm-inline d-none">
			<div class="telephone-icon">
				<?php echo wp_get_attachment_image(140, full); ?>
			</div>
			<div class ="telephone-content">
				<span class="telephone-content-wrapper">
					<div class="telephone-toggle-content">
						<span class="d-lg-inline d-none">Call Us</span><br/>413.695.6487
					</div>
				</span>
			</div>
		</div>
</div><!-- Container end -->

<?php get_footer(); ?>
