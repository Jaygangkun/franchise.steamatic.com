<?php /* Block Name: Services */ ?>

<section class="services">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-7 text-center mx-auto mb-5" data-aos="fade-up">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-7 -->
			
		</div><!-- end .row -->
		
		<div class="row">
			
			<?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
			
			<div class="col-lg-3 service" data-aos="fade-up">
				<img src="<?php the_sub_field('service_icon'); ?>">
				<p class="service-title"><?php the_sub_field('service_title'); ?></p>
				<p><?php the_sub_field('service_info'); ?></p>
			</div><!-- end .col-lg-3 -->
			
			<?php endwhile; endif; ?>
			
		</div><!-- end .row -->
		
		<?php $link = get_field('button'); if( $link ): ?>
			<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
		<?php endif; $link = NULL; ?>
		
	</div><!-- end .container -->
</section>