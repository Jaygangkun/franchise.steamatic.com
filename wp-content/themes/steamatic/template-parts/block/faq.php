<?php /* Block Name: FAQ */ ?>

<section class="faqs" style="background: <?php the_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<h2><?php the_field('title'); ?></h2>
				
				<?php if( have_rows('faqs') ): while ( have_rows('faqs') ) : the_row(); ?>
				
				<div class="q-a">
					<div class="q">
						<?php the_sub_field('question'); ?>
						
						<div class="close toggle">-</div><!-- end .close -->
						<div class="open toggle">+</div><!-- end .open -->
					</div><!-- end .q -->
					
					<div class="a">
						<?php the_sub_field('answer'); ?>
					</div><!-- end .a -->
					
					
				</div><!-- end .q-a -->
				
				<?php endwhile; endif; ?>
				
			</div><!-- end .col-lg-12 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>