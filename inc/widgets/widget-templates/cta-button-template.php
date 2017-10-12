<?php
	$button_align = $instance['button_align'];

	switch($button_align){
		case 'align-center' :
			$align_class = "text-center";
			break;
		case 'align-left' :
			$align_class = "text-left";
			break;
		case 'align-right' :
			$align_class = "text-right";
			break;
		default :
			$align_class = "text-center";
			break;
	}
?>


<div class="cta-button-overlay"></div>
<div class="cta-button-container <?php echo $align_class; ?>">
	<a href="<?php echo $instance['button_link']; ?>" class="button large-button cta-button"><?php echo $instance['button_text']; ?></a>
</div>