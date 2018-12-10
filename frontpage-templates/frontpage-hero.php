<div id="hero" class="row">	
	<?php 
		$hero_image = get_post_thumbnail_id();
		$hero_srcset = wp_get_attachment_image_srcset( $hero_image, 'full' );
		$hero_url = wp_get_attachment_image_url($hero_image, 'large');
		$img_alt = get_post_meta( $hero_image, '_wp_attachment_image_alt', true );
	?>
	<div class="hero-image-wrapper">
		<img 
			id="hero-image" 
			src="<?php echo esc_attr($hero_url); ?>" 
			srcset="<?php echo esc_attr($hero_srcset); ?>" 
			alt="<?php echo $img_alt ?>"
			sizes="100vw"
		>
	</div>
	<div class="header-content">
		<h1 
			class="slogan hero-text" 
			data-aos="fade-in" 
			data-aos-delay="150"
			data-aos-duration="2000">
				Every House Has a<br/>Story to Tell
		</h1>
	</div>
	<a href="#frontpage-welcome" class="bounce">
		<div class="scroll-icon">
			<i class="fa fa-caret-down fa-2x"></i>
		</div>
	</a>
</div>