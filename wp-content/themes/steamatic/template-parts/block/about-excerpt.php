<?php /* Block Name: About Excerpt */ ?>

<section class="about-excerpt">
	
	<img class="top-image" src="<?php the_field('top_image'); ?>">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
				<h2><?php the_field('title'); ?></h2>
				<p class="subtitle"><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-7 -->
		</div><!-- end .row -->
		
		<div class="row">
			
			<?php if( have_rows('reasons') ): while ( have_rows('reasons') ) : the_row(); ?>
			
			<div class="col-lg-3">
				<div class="reason" data-aos="fade-up">
					<img src="<?php the_sub_field('icon'); ?>">
					<p class="reason-title"><?php the_sub_field('reason_title'); ?></p>
					<p><?php the_sub_field('reason_subtitle'); ?></p>
					<?php $link = get_sub_field('button'); if( $link ): ?>
						<a class="btn btn-secondary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php endif; $link = NULL; ?>
				</div><!-- end .reason -->
			</div><!-- end .col-lg-3 -->
			
			<?php endwhile; endif; ?>
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>