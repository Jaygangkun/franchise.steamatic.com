<?php
/*
  Author: Primer Co
  URL: htp://byprimer.co
*/


/************* INCLUDE NEEDED FILES ***************/


/*
1. library/primer.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/primer.php'); // if you remove this, primer will break
require_once('library/acf_blocks.php'); // ACF Gutenberg Blocks
require_once('wp_bootstrap_navwalker.php'); // Bootstrap Nav Walker

/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default

/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default


/************* THUMBNAIL SIZE OPTIONS *************/


// Thumbnail sizes
add_image_size( 'primer-1400', 1400, 0, true );



/************* ACTIVE SIDEBARS ********************/


// Sidebars & Widgetizes Areas
function primer_register_sidebars() {
  
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => __('Sidebar 1', 'primertheme'),
    	'description' => __('The first (primary) sidebar.', 'primertheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

}




/************* COMMENT LAYOUT *********************/

		
// Comment Layout
function primer_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
			    <?php 
			    /*
			        this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
			        echo get_avatar($comment,$size='32',$default='<path_to_url>' );
			    */ 
			    ?>
			    <!-- custom gravatar call -->
			    <?php
			    	// create variable
			    	$bgauthemail = get_comment_author_email();
			    ?>
			    <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'primertheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'primertheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'primertheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Your comment is awaiting moderation.', 'primertheme') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!


/************* SEARCH FORM LAYOUT *****************/


// Search Form
function primer_wpsearch($form) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('Search', 'primertheme') . '</label>
    <div class="form-group">
      <input type="text" class="form-control" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search...','primertheme').'" />
    </div>
    <input type="submit" class="btn btn-primary" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
} // don't remove this bracket!


/************* IMAGE FORMATTING *****************/


// Allow SVG Upload to WP
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


/************* ACF *****************/


// Add ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function getPaginationPosts(){
	$offset = $_POST['offset'];
	$counts = (int)$_POST['count'];

	?>
	<div class="row">
		<?php
		$posts = get_posts(array(
			'post_type' => 'post',
			'numberposts' => $counts, 
			'offset' => (int)$offset,
			'nopaging' => false
		));

		$count_posts = wp_count_posts();
		$count_total = $count_posts->publish;
		$count_per_page = $counts;
		$page_count = ceil($count_total / $count_per_page);
		$cur_page = (int)$_POST['page'];

		$post_index = 1;
		foreach($posts as $post){
			if($post_index > $counts){
				break;
			}
			$col_class = 'col-lg-4 blog-item-col';
			if($post_index == 1){
				$col_class = 'col-lg-8 blog-item-col';
			}
			$feature_img = get_the_post_thumbnail_url( $post->ID, 'full');
			?>
			<div class="<?php echo $col_class?>">
				<div class="blog-item-col-wrap bk-img" style="background-image:url(<?php echo $feature_img?>)">
					<div class="blog-item-col-content">
						<div class="blog-item__title"><?php echo $post->post_title?></div>
						<div class="blog-item__date">
							<?php
							echo date('M jS Y', strtotime($post->post_date));
							?>
						</div>
						<div class="">
							<a class="link link-blue" href="<?php echo get_permalink($post->ID)?>">Read More</a>
						</div>
					</div>
				</div>
			</div>
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
	<?php
	die();
}

add_action('wp_ajax_get_posts', 'getPaginationPosts');
add_action('wp_ajax_nopriv_get_posts', 'getPaginationPosts');
?>
