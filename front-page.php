<?php
/**
 * The template for displaying the front page.
 *
 *
 * @package understrap
 */

get_header();
?>

	<div class="container-fluid" id="content-frontpage" tabindex="-1">

		<main class="site-main" id="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'frontpage-templates/frontpage', 'hero' ); ?>
				<?php get_template_part( 'frontpage-templates/frontpage', 'welcome' ); ?>
				<?php get_template_part( 'frontpage-templates/frontpage', 'services' ); ?>
				<?php get_template_part( 'frontpage-templates/frontpage', 'testimonials' ); ?>
				<?php get_template_part( 'frontpage-templates/frontpage', 'gallery' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<div class="telly-toggle">
				<div class="telephone-icon">
					<?php echo wp_get_attachment_image(173, "full"); ?>
				</div>
				<div class ="telephone-content">
					<span class="telephone-content-wrapper">
						<div class="telephone-toggle-content">
							<span>Call Us</span><br/>413.695.6487
						</div>
					</span>
				</div>
			</div>
			<!-- <script>
				AOS.init();
			</script> -->
		</main><!-- #main -->
			
</div><!-- Container end -->


<?php get_footer(); ?>