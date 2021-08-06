<?php 
	
get_header();
// the_post(); 
// the_content();
?>
<section class="blog-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="text-center">
					<h2 class="block-title-48"><?php echo get_the_title()?></h2>
					<div class="blog-info">
						<span class="blog-info__date">
							<?php
							$date_str = get_the_date('F d, Y');
							echo $date_str;
							?>
						</span> | 
						<span class="blog-info__category">
							<?php
							$categories = get_the_category();
							$category_name = '';
							if(!empty($categories)) {
								$category_name = esc_html($categories[0]->name);
							}

							echo $category_name;
							?>
						</span>
					</div>
				</div>

                <?php
                $feature_img = get_the_post_thumbnail_url( get_the_ID(), 'full');
                ?>
				<div class="blog-content-wrap">
					<img class="blog" src="<?php echo $feature_img?>" >
                    <?php
                    the_post();
                    the_content();
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $backgroundImage = get_field('cta_background_image', 'option'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="cta" style="background-image: linear-gradient(0deg, rgba(43, 65, 138, 0.72), rgba(43, 65, 138, 0.72)), url(<?= $backgroundThumb; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
				<h2><?php the_field('cta_title', 'option'); ?></h2>
				<p class="subtitle"><?php the_field('cta_description', 'option'); ?></p>
				<?php $link = get_field('cta_link', 'option'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>
<?php
get_footer();