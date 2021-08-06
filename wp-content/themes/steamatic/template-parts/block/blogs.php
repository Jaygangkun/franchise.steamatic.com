<?php /* Block Name: Blogs */ ?>

<section class="blogs">
	<div class="container" id="blogs_content">
		<div class="row">
		<?php
			$counts = 8;
			$posts = get_posts(array(
				'post_type' => 'post',
				'numberposts' => $counts, 
				'offset' => 0,
				'nopaging' => false
			));

			$count_posts = wp_count_posts();
			$count_total = $count_posts->publish;
			$count_per_page = $counts;
			$page_count = ceil($count_total / $count_per_page);
			$cur_page = 1;

			$post_index = 1;
			foreach($posts as $post){
				if($post_index > $counts){
					break;
				}
				
				$col_class = 'col-lg-4 blog-item-col';
				if($post_index == 1){
					$col_class = 'col-lg-8 blog-item-col';
				}
				
				$feature_img = get_the_post_thumbnail_url( $post->ID, 'full' );
				?>
				<div class="<?php echo $col_class?>">
					<div class="blog-item-col-wrap bk-img" style="background-image:url(<?php echo $feature_img?>)">
						<div class="blog-item-col-content">
							<div class="blog-item__title"><?php echo $post->post_title?></div>
							<div class="blog-item__date"><?php echo date('M jS Y', strtotime($post->post_date)); ?></div>
							<a class="btn btn-secondary" href="<?php echo get_permalink($post->ID)?>">Read More</a>
						</div><!-- end .blog-item-col-content  -->
					</div><!-- end .blog-item-col-wrap -->
				</div><!-- end .col-lg-4 -->
				<?php
				$post_index++;
			}
		?>
		</div>

		<div class="blogs-pagination">
            <div class="pagination">
                <span class="pagination-link pagination-link--icon" page-index="<?php echo ($cur_page - 1) < 1 ? 1 : ($cur_page - 1) ?>">Previous</span>
                <?php
                for($pindex = 1; $pindex <= $page_count; $pindex++){
                    if($pindex == $cur_page){
                        ?>
                        <span class="pagination-link pagination-link--num active" page-index="<?php echo $pindex?>"><?php echo $pindex ?></span>
                        <?php
                    }
                    else {
                        ?>
                        <span class="pagination-link pagination-link--num" page-index="<?php echo $pindex?>"><?php echo $pindex ?></span>
                        <?php
                    }
                }
                ?>
                <span class="pagination-link pagination-link--icon" page-index="<?php echo ($cur_page + 1) > $page_count ? $page_count : ($cur_page + 1) ?>">Next</span>
            </div>
        </div>
	</div>
</section>