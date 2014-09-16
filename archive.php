<?php get_header(); ?>
<div class="blogPages">
						  <?php get_template_part( 'partials/content', 'blogindexheader' ); ?>


				<div class="fullWidth oooBack2"> 
								
							</div>
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
				
				    <div id="main" class="large-8 medium-8 columns first clearfix equalBlog" role="main">
				
					    <?php if (is_category()) { ?>
						    <h1>
							    <span><?php _e("Categoría:", "jointstheme"); ?></span> <?php single_cat_title(); ?>
					    	</h1>
					    
					    <?php } elseif (is_tag()) { ?> 
						    <h1>
							    <span><?php _e("Etiquetado:", "jointstheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h1>

						    	<span><?php _e("Post de:", "jointstheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h1>
					    <?php } elseif (is_day()) { ?>
						    <h1>
	    						<span><?php _e("Archivos Diarios:", "jointstheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1>
				    	    	<span><?php _e("Archivos Mensuales:", "jointstheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1>
					    	    <span><?php _e("Archivos Anuales", "jointstheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'archive' ); ?>
					
					    <?php endwhile; ?>		
					
					        <?php if (function_exists('joints_page_navi')) { ?>
						        <?php joints_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Entradas Antiguas', "jointstheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Entradas Nuevas &raquo;', "jointstheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    						<?php get_template_part( 'partials/content', 'missing' ); ?>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	    			<?php get_sidebar(); ?>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>