<?php /* Block Name: Join Info */ ?>

<?php $backgroundImage = get_field('video_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'large' ]; endif;
?>

<section class="join-info">
	<div class="container">
		<div class="row align-items-lg-end">
			<div class="col-lg-5" data-aos="fade-up">
				<a class="video-link" data-fancybox href="<?php the_field('video_link'); ?>" style="background-image: linear-gradient(0deg, rgba(54,59,74,0.6), rgba(54,59,74,0.6)), url(<?= $backgroundThumb; ?>);"><i class="fa fa-play" aria-hidden="true"></i> <br>Play Video</a>
			</div><!-- end .col-lg-5 -->
			
			<div class="col-lg-6 offset-lg-1 text-right" data-aos="fade-right">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('info'); ?></p>
			</div><!-- end .col-lg-7 -->
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>