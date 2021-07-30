<?php /* Block Name: Team */ ?>

<section class="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 text-center mx-auto mb-5" data-aos="fade-up">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-7 -->
			
		</div><!-- end .row -->
		
		<div class="row justify-content-center">
			
			<?php $count = 1; if( have_rows('team_members') ): while ( have_rows('team_members') ) : the_row(); ?>
			
			<?php $backgroundImage = get_sub_field('member_image'); if( !empty($backgroundImage) ): 
				$backgroundThumb = $backgroundImage['sizes'][ 'large' ]; endif;
			?>
			
			<div class="col-lg-4">
				<div class="member" style="background-image: linear-gradient(0deg, rgba(54,59,74,0.5), rgba(54,59,74,0.5)), url(<?= $backgroundThumb; ?>);" data-aos="fade-up">
					<p class="name"><?php the_sub_field('name'); ?></p>
					<p><?php the_sub_field('job_title'); ?></p>
					
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#teamMember<?= $count; ?>"><?php the_sub_field('button_title'); ?></button>
				</div><!-- end .member -->
			</div><!-- end .col-lg-4 -->
			
			<!-- Modal -->
			<div class="modal fade member-modal" id="teamMember<?= $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
			  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				  
			    <div class="modal-content">
			      <div class="modal-body">
				      
				      <button type="button" class="close" data-dismiss="modal">X</button> 
				      <img src="<?= $backgroundThumb; ?>" alt="<?php the_sub_field('name'); ?>">
			        <p class="member-intro"><?php the_sub_field('name'); ?> -  <?php the_sub_field('job_title'); ?></p>
			        <p><?php the_sub_field('info'); ?></p>
			        
			        
			      </div><!-- end .modal-body -->
			    </div><!-- end .modal-content -->
			  </div><!-- end .modal-dialog -->
			</div><!-- end .modal -->
			
			<?php $count++; endwhile; endif; ?>
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>