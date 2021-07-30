<?php /* Block Name: Hero Header */ ?>

<?php if ( get_field('section_type') == 'video' ) : ?>

<section class="hero-header video">
		
	<video autoplay muted playsinline loop poster="<?php the_field('video_thumbnail'); ?>" id="heroVideo">
		<source src="<?php the_field('mp4_video'); ?>" type="video/mp4">
		<source src="<?php the_field('webm_video'); ?>" type="video/webm">
		<source src="<?php the_field('ogv_video'); ?>" type="video/ogg">
	</video>
	
	<img src="<?php the_field('video_thumbnail'); ?>" alt="Poster Image" class="video-poster" />
		
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<h1><?php the_field('title'); ?></h1>
			</div><!-- end .col-lg-8 -->
		</div><!-- end .row -->
		<div class="row">
			<div class="col-lg-6 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<p><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>

<?php else : ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="hero-header image" style="background-image: linear-gradient(0deg, rgba(54, 59, 74, 0.6), rgba(54, 59, 74, 0.6)), url(<?= $backgroundThumb; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<h1><?php the_field('title'); ?></h1>
			</div><!-- end .col-lg-8 -->
		</div><!-- end .row -->
		<div class="row">
			<div class="col-lg-6 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<p><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>

<?php endif; ?>

<section class="hero-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-lg-flex justify-content-between align-items-center mx-auto text-center" data-aos="fade-in" data-aos-offset="100">
				<p><?php the_field('hero_cta'); ?></p>
				<?php $link = get_field('hero_cta_button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>