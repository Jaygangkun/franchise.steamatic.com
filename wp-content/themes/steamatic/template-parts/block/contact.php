<?php /* Block Name: Contact */ ?>

<section class="contact">
	
	<div class="contact-box" data-aos="fade-right">
		<p class="title">Phone</p>
		<p><?php the_field('phone'); ?></p>
		
		<p class="title">Address</p>
		<p><?php the_field('address'); ?></p>
		
		<p class="title">Sales</p>
		<p><?php the_field('email'); ?></p>
	</div><!-- end .contact-box -->
	
	<div class="container">
		<div class="row">
			<div class="col-lg-7 offset-lg-5" data-aos="fade-up">
				<p class="contact-info"><?php the_field('contact_info'); ?></p>
				<?php the_field('form'); ?>
			</div><!-- end .col-lg-7 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<img src="<?php the_field('image'); ?>">
</section>