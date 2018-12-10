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
<div id="content-area">
	<div id="gallery-welcome">
			<div class="page-header">
				<h1 class="page-title text-center">Gallery</h1>
			</div>
			<div class="gallery-content text-center">
				<p>Click a category to see its gallery</p>
			</div>
		</div>
	<nav id="cb-gallery-menu" class="navbar navbar-expand-sm d-none">	
		<button id="gallery-menu-toggle" class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#cb-gallery-buttons" aria-controls="cb-gallery-buttons" aria-expanded="false" aria-label="Toggle navigation">
			<h4 class="mb-0">Sort Items <i class="fa fa-caret-down"></i></h4>
		</button>
		<div id="cb-gallery-buttons" class="collapse navbar-collapse button-group filter-button-group">
			<button data-filter=".interiors">Interior</button>
			<button data-filter=".exteriors">Exterior</button>
			<button data-filter=".kitchens">Kitchen</button>
			<button data-filter=".baths">Bath</button>
			<button data-filter=".cabinetry">Cabinetry</button>
			<button data-filter=".before-after">Before &amp; After</button>
		</div>
	</nav>
	<div id="cb-gallery-grid" class="grid gallery-hidden">
		<div class="cb-gallery-spacer"></div>
	<?php
	$num = 0;//used for each gallery image then incremented
	while ( have_posts() ) : the_post();
		$header_photo = get_field('header_photo');
		$image_srcset = wp_get_attachment_image_srcset($header_photo,'xlarge');
		$image_url = wp_get_attachment_image_url( $header_photo, "med-large" );
		$img_alt = get_post_meta( $header_photo, '_wp_attachment_image_alt', true);
		$title = get_the_title();
		$description = get_field('description');
		global $post;
		$slug = $post->post_name;
	?>
		<div data-filter=".<?php echo esc_attr( $slug ); ?>" class="cb-gallery-item photo-menu">
			<div class="cb-image-frame">
				<img 
					src="<?php echo esc_attr( $image_url ); ?>" 
					srcset = "<?php echo esc_attr( $image_srcset ); ?>"
					sizes = "33vw"
					alt = "<?php echo $image_alt; ?>"
				>
				<!-- .photo-menu-title -->
			</div>
			<div class="category-info">
				<div class="category-info-frame">
					<h3 class="category-title"><?php echo $title ?></h3>
					<p><?php echo $description ?></p>
				</div>
			</div>
		</div>

	<?php
	while(the_repeater_field('gallery_images')):
		$image_id = get_sub_field('image');
		$image_srcset = wp_get_attachment_image_srcset($image_id,'large');
		$image_url = wp_get_attachment_image_url( $image_id, "med-large" );
		$img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
	?>

		<div class="cb-gallery-item all-images <?php echo $slug ?>">
			<div class="cb-image-frame">
			<a class="<?php echo strtolower($title); ?>-category">

				<img 
					data-featherlight="#featherlight-content<?php echo $num; ?>"
					src="<?php echo esc_attr( $image_url ); ?>" 
					srcset = "<?php echo esc_attr( $image_srcset ); ?>"
					sizes ="(min-width: 992px) 25vw, 50vw"
					alt = "<?php echo $image_alt; ?>"
				>
				</a>
			</div>
		</div>
		<div id="featherlight-content<?php echo $num; ?>" class="d-none">
			<a class="<?php echo strtolower($title); ?>-category"><img 
				src="<?php echo esc_attr( $image_url ); ?>" 
				srcset = "<?php echo esc_attr( $image_srcset ); ?>"
				sizes = "(max-width: 575px) 80vw,50vw"
				alt = "<?php echo $image_alt; ?>"
			></a>
		</div>

		<?php $num++; endwhile; endwhile; ?>
			<!-- .cb-gallery-item title-gallery -->
	</div><!-- #cb-gallery-grid -->
</div>
<?php get_footer(); 
