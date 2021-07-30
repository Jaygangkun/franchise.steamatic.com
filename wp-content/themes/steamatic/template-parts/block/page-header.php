<?php /* Block Name: Page Header */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="hero-header" style="background-image: linear-gradient(0deg, rgba(54,59,74,0.6), rgba(54,59,74,0.6)), url(<?= $backgroundThumb; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<?php
				if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
				  yoast_breadcrumb( '<span class="breadcrumbs">','</span>' );
				}
				?>
				<h1><?php the_field('title'); ?></h1>
				<p><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>