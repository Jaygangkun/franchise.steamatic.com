<?php /* Block Name: Video Testimonial */ ?>

<?php $backgroundImage = get_field('video_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'large' ]; endif;
?>

<section class="video-testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
				<p class="subtitle"><?php the_field('subtitle'); ?></p>
				<h2><?php the_field('title'); ?></h2>
				<a class="video-link" data-fancybox href="<?php the_field('video_link'); ?>" style="background-image: linear-gradient(0deg, rgba(54,59,74,0.6), rgba(54,59,74,0.6)), url(<?= $backgroundThumb; ?>);"><i class="fa fa-play" aria-hidden="true"></i> <br>Play Video</a>
			</div><!-- end .col-lg-10 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>