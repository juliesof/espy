<?php
/**
 * Displays the Homepage Gallery
 *
 */

// Begin custom gallery query

$gallery = new WP_Query( array( 'post_type' => 'galleries'));

wp_reset_postdata();// End custom gallery query
?>
<section id="fp-gallery">
	<h1 class="text-center">Galleries</h1>
	<div id="fp-gallery-grid" class="container">
		<div class="row">
			
			<?php	
			// loop the gallery posts and display each featured image
			while( $gallery -> have_posts() ): $gallery -> the_post(); 

				$image_id = get_field('header_photo');
				$image_srcset = wp_get_attachment_image_srcset($image_id,'full');
			
				$image_url = wp_get_attachment_image_url( $image_id, "med-large" );
			
				$img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
				global $post;
				$slug = $post->post_name;
				$slug = '/galleries/#'.$slug
			?>
				<div class="fp-gallery-item col-sm-6 col-lg-4">
					<a href="<?php echo esc_url( home_url( $slug ) ); ?>">	
						<div class="fp-gallery-inner">
							<h3 class="image-title"><?php the_title(); ?></h3>
							<img
								src = "<?php echo esc_attr( $image_url ); ?>"
								srcset = "<?php echo esc_attr( $image_srcset ); ?>"
								sizes = "(max-width: 575px) 80vw, (max-width: 991) 40vw, 30vw"
								alt = "<?php echo $image_alt; ?>"
							>
		 				</div><!-- .fp-gallery-inner -->
		 			</a>
				</div><!-- .fp-gallery-item -->
			<?php endwhile;?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #fp-gallery -->


