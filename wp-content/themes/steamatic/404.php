<?php get_header(); ?>

  <div id="notfound-outer" class="container-fluid h-75" style="background-image: url('<?php print(get_stylesheet_directory_uri()); ?>/library/images/404.svg'); background-size: cover; background-position: bottom">
  	<div class="container h-100">
		<div id="notfound-inner" class="row text-lg-left row text-lg-left h-100 d-flex flex-column justify-content-center mr-5 notfound-inner">
			<div class="col-lg-6">
				
				<h1 id="notfound-title" class="text-white mb-3"><?php the_field('404_page_title', 'option'); ?></h1>
				<p class="text-white mb-3"><?php the_field('404_page_subtitle', 'option'); ?></p>

				<ul class="404-links list-unstyled">

				<li class="mb-2">
					<a class="text-white" href="<?php the_field('404_page_link_1', 'option'); ?>"><u><?php the_field('404_page_link_1_text', 'option'); ?></u></a>
				</li>
				
				<li class="mb-2">
					<a class="text-white" href="<?php the_field('404_page_link_2', 'option'); ?>"><u><?php the_field('404_page_link_2_text', 'option'); ?></u></a>
				</li>

				
				<li>
					<a class="text-white" href="<?php the_field('404_page_link_3', 'option'); ?>"><u><?php the_field('404_page_link_3_text', 'option'); ?></u></a>
				</li>

				</ul>
			</div><!-- end .col-lg-6 -->
  		</div><!-- end .row -->
  	</div><!-- end .container -->
  </div>
<?php get_footer(); ?>
