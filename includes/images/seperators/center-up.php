<?php $center = 50 + ( intval( $settings->centerpoint ) / 2 ); ?>

<svg class="be-angle-seperator" viewBox="0 0 100 <?php echo $settings->height; ?>" preserveAspectRatio="none" width="100%">
	<path class="be-angle-seperator-path" d="M0 0 L0 <?php echo $settings->height; ?> L100 <?php echo $settings->height; ?> L100 0 L<?php echo $center; ?> <?php echo $settings->height; ?> Z" fill="<?php echo $fill; ?>"></path>
</svg>


