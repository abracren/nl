<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			
    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
				<?php// get_template_part( 'partials/content', 'byline' ); ?>

		<p class="tags"><?php// the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
		<?php //comment_form()?>
		<p></p>							
		<p></p>							
		<p></p>							
	<?php// comments_template(); ?>	
													
</article> <!-- end article -->