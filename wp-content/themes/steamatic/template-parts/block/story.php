<?php /* Block Name: Story */ ?>

<section class="story">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-5">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('info_block_one'); ?></p>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6 mb-5">
				<img class="img-fluid" src="<?php the_field('image_one'); ?>" data-aos="fade-up">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		<div class="row align-items-center">
			<div class="col-lg-6 order-lg-2 mb-5">
				<p><?php the_field('info_block_two'); ?></p>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6 order-lg-1 mb-5">
				<img class="img-fluid" src="<?php the_field('image_two'); ?>" data-aos="fade-up">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<p><?php the_field('info_block_three'); ?></p>
			</div><!-- end .col-lg-10 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<img class="story-shape" src="<?php echo get_template_directory_uri(); ?>/library/images/ellipse.svg" data-aos="fade-right" data-aos-offset="400">
</section>