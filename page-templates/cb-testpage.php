<?php
/**
 * Template Name: Test Page
 *
 * Completely empty page
 * Good for testing php code
 *
 * @package understrap
 */

$image_id = 132;
$img_src = wp_get_attachment_image_url( $image_id, 'large' );
$img_srcset = wp_get_attachment_image_srcset( $image_id, 'full' );
$img_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ); ?>

<img src="<?php echo esc_attr( $img_src ); ?>" srcset="<?php echo esc_attr( $img_srcset ); ?>" sizes="100vw" alt="<?php echo $img_alt; ?>">

<?php
echo "</br> test test test test test </br>";
echo $test_srcset = wp_get_attachment_image_srcset( $image_id, 'medium' );
echo "</br>test test test test test </br>";
?>	