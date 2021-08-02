<?php /* Block Name: Blog Content */ ?>

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

				<div class="blog-content-wrap">
					<?php the_field('content') ?>
				</div>
			</div>
		</div>
	</div>
</section>