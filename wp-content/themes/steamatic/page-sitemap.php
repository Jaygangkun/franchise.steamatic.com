<?php /* Template Name: Sitemap Page */

get_header(); ?>

<section class="sitemap">
	<div class="container">
		<?php
		if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
		  yoast_breadcrumb( '<span class="breadcrumbs text-center d-block">','</span>' );
		}
		?>
		<h1 class="text-center mb-5">Sitemap</h1>
		
	<?php 
	the_content();
	get_template_part('/partials/sitemap'); 
	?>
	
	</div><!-- end .container -->
</section>


<?php get_footer();