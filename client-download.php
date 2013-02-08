<?php
	/* Template Name: Client Download */
?>

<?php
	get_header();
?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); 
	
		if ( post_password_required() ) {
			the_content();
		} else {
	?>
		<div class="container">
			<article id="post-<?php the_ID(); ?>" role="article">
				<header><h1 class="page-header"><span id="title"><?php the_title(); ?></span>
					<?php
					$zip_url = get_post_meta(get_the_ID(), 'zip_url', true);
					if(!empty($zip_url)){
						?>
						<button class="btn btn-large btn-primary" id="downloadAll" onclick="window.open('<?php echo $zip_url; ?>');"><i class="icon-download-alt icon-white"></i> Download All Images</button>
						<?php
					}?>
					<div style="height:0; clear:both;"></div>
					</h1>
				</header>
				<section class="post_content">
					<?php
						$photoset_id = get_post_meta(get_the_ID(), 'flickr_photoset_id', true);
						if(empty($photoset_id)){
							the_content(); 
						}
						else{
					?>
							<div class="alert alert-info">
							  <strong>Note:</strong> When downloading individual images, use your browser's <em>Save Image As</em> feature to save the images to your computer.
							</div>
							<div class="">
					<?php
								echo download_gallery($photoset_id);
					?>
							</div>
					<?php
						}
					?>
				</section>
				<footer>
					<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
				</footer>
			</article>
		</div>
	<?php } endwhile; ?>
	<?php else : ?>
		<article id="post-not-found">
			<header>
				<h1><?php _e("Not Found"); ?></h1>
			</header>
			<section class="post_content">
				<p><?php _e("Sorry, but the requested resource was not found on this site."); ?></p>
			</section>
			<footer></footer>
		</article>
	<?php endif; ?>
<?php get_footer(); ?>