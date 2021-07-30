<?php /* Block Name: Image */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="image" data-aos="fade-in" style="background-image: url(<?= $backgroundThumb; ?>);"></section>