<?php /* Block Name: Join */ ?>

<section class="join">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
				<h2><?php the_field('title'); ?></h2>
				<p class="subtitle"><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-7 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<div class="container-fluid">
		<div class="row align-items-end">
			<div class="col-lg-5 offset-lg-1" data-aos="fade-left">
				<p><?php the_field('info'); ?></p>
				<ul class="points">
					
					<?php if( have_rows('points') ): while ( have_rows('points') ) : the_row(); ?>
					
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/check.svg">
							<span><?php the_sub_field('point'); ?></span>
						</li>
					
					<?php endwhile; endif; ?>
					
				</ul><!-- end .points -->
				
				<?php $link = get_field('button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
				
			</div><!-- end .col-lg-6 -->
			
			<?php $image = get_field('image'); if( !empty($image) ): 
				$thumb = $image['sizes'][ 'large' ]; endif;
			?>
			
			<div class="col-lg-6 text-lg-right pl-lg-3 px-0 text-center">
				<img class="img-fluid" src="<?= $thumb; ?>">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container-fluid -->
</section>