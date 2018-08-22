<?php
/**
 * Template Name: Block Template
 * 
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
				
			?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<section>
					<?php the_content(); ?>
				</section>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

</div><!-- .row -->

</div><!-- Container end -->

<?php get_footer(); ?>
