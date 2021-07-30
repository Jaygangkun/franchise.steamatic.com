<footer role="contentinfo">
	<div class="container">
		<div class="row text-lg-left text-center">
			<div class="col-lg-4">
				<?php if ( get_field('footer_logo', 'option') ) : ?>
					<a class="footer-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('footer_logo', 'option') ?>" class="img-fluid"></a>
				<?php else : ?>
					<a class="footer-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				<?php endif; ?>
			</div><!-- end .col-lg-4 -->
			
			<div class="col-lg-8">
				<?php wp_nav_menu( array( 'menu' => 3 ) ); ?>
				
				<div class="d-lg-flex justify-content-between">
					<div class="social">
						<a href="<?php the_field('instagram_link', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg"></a>
						<a href="<?php the_field('linkedin_link', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin.svg"></a>
					</div><!-- end .social -->
					
					<span><?php the_field('copyright_message', 'option') ?></span>
				</div><!-- end .d-flex -->
			</div><!-- end .col-lg-8 -->
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</footer> <!-- end footer -->

</div> <!-- end #container -->

<!-- all js scripts are loaded in library/primer.php -->
<?php wp_footer(); ?>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html> <!-- end page. what a ride! -->
