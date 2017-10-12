<?php
	$address_one = $instance['address_line_one'];
	$address_two = $instance['address_line_two'];
	$phone_number = $instance['phone_number'];
	$email_address = $instance['email'];
?>

<h3><?php echo $instance['contact_heading']; ?></h3>
<div class="contact-info">
<?php if(isset($address_one) || isset($address_two)) : ?>

	<address class="address">
		<i class="fa fa-map-marker"></i>
		<?php if(isset($address_one)) echo $address_one; ?>
		<?php if(isset($address_two)) echo '<br />' . $address_two; ?>
	</address>
<?php endif; ?>

<?php if(isset($phone_number)) : ?>	
	<span class="phone">
		<i class="fa fa-phone"></i>
		<?php echo $phone_number; ?>
	</span>
<?php endif; ?>

<?php if(isset($email_address)) : ?>
	<span class="email">
		<i class="fa fa-envelope"></i>
		<?php echo $email_address; ?>
	</span>
<?php endif; ?>
</div>