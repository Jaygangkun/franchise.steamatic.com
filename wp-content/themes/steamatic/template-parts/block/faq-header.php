<?php /* Block Name: FAQ Header */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'large' ]; endif;
?>

<section class="faq-header" style="background-image: url(<?= $backgroundThumb; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8" data-aos="fade-left" data-aos-delay="400">
				<?php
				if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
				  yoast_breadcrumb( '<span class="breadcrumbs">','</span>' );
				}
				?>
				<h1><?php the_field('title'); ?></h1>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>