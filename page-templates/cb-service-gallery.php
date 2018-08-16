<?php
/**
 * Template Name: Services Gallery
 *
 * Template for displaying the interactive services gallery.
 *
 * @package understrap
 */

get_header();
?>

<div id="cb-gallery-buttons" class="button-group filter-button-group">
	<button data-filter=".kitchen-gallery">Kitchen</button>
	<button data-filter=".exterior-gallery">Exterior</button>
</div>
<div id="cb-gallery-grid" class="grid">
<?php
while ( have_posts() ) : the_post();
	//galleries from dashboard
	the_content();
endwhile;
?>
</div>

<?php get_footer(); 
