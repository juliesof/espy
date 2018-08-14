<?php
/**
 * The template for displaying the front page.
 *
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

	<div class="container-fluid" id="content-frontpage" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'frontpage-templates/frontpage', 'hero' ); ?>
					<?php get_template_part( 'frontpage-templates/frontpage', 'welcome' ); ?>
					<?php get_template_part( 'frontpage-templates/frontpage', 'services' ); ?>
					<?php get_template_part( 'frontpage-templates/frontpage', 'testimonials' ); ?>
					<?php get_template_part( 'frontpage-templates/frontpage', 'gallery' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>