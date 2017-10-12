<?php
	$image_int = $instance['responsive_image'];
	$responsive_image = wp_get_attachment_image_src($image_int, 'full');
?>

<img src="<?php echo $responsive_image[0]; ?>" class="img-responsive" alt="" />