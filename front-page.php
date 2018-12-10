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
			<!-- <script>
				AOS.init();
			</script> -->
		</main><!-- #main -->
			
</div><!-- Container end -->


<?php get_footer(); ?>