<?php
/**
 * The ACF template for displaying portfolio galleries
 *
 * Template for displaying the interactive services gallery.
 *
 * @package understrap
 */

get_header();
?>

<div id="cb-gallery-buttons" class="button-group filter-button-group d-none">
	<button data-filter=".interior-gallery">Interior</button>
	<button data-filter=".exterior-gallery">Exterior</button>
	<button data-filter=".kitchen-gallery">Kitchen</button>
	<button data-filter=".bath-gallery">Bath</button>
	<button data-filter=".cabinetry-gallery">Cabinetry</button>
	<button data-filter=".bef-aft-gallery">Before &amp; After</button>
</div>
<div id="cb-gallery-grid" class="grid">
	<div class="cb-gallery-spacer"></div>
<?php
while ( have_posts() ) : the_post();
	$header_photo = get_field('header_photo');
	$fields = get_fields();
	$title = get_the_title();
	$i		= 1;
	?>
		<div data-filter=".<?php echo strtolower($title) ?>-gallery" class="cb-gallery-item photo-menu">
			<div class="photo-menu-content-box">
				<?php echo wp_get_attachment_image($header_photo,"full") ?>
				<?php the_title('<h3 class="photo-menu-title">','</h3>') ?>
			</div>
		</div>
	<?php
	while ( $fields[ 'image_'.$i ] ): ?>

		<div class="cb-gallery-item <?php echo strtolower($title) ?>-gallery">
			<?php echo wp_get_attachment_image($fields['image_'.$i],"full") ?>
		</div>

	<?php $i++; endwhile;
endwhile;
?>
</div>

<?php get_footer(); 
