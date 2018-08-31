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
			<?php the_title( '<h1>', '</h1>' ); ?>
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
</div><!-- Container end -->

<?php get_footer(); ?>
