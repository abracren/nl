<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-8 medium-8 columns first clearfix" role="main">
						<h1 class="archive-title"><span><?php _e('Search Results for:', 'jointstheme'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<?php get_template_part( 'partials/content', 'byline' ); ?>
						
								</header> <!-- end article header -->
					
								<section class="entry-content">
								    <?php the_excerpt('<span class="read-more">' . __('Leer más &raquo;', 'jointstheme') . '</span>'); ?>
					
								</section> <!-- end article section -->
						
								<footer class="article-footer">
							
								</footer> <!-- end article footer -->
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>	
					
						    <?php if (function_exists('joints_page_navi')) { ?>
						        <?php joints_page_navi(); ?>
						    <?php } else { ?>
						        <nav class="wp-prev-next">
						            <ul class="clearfix">
						    	        <li class="prev-link"><?php next_posts_link(__('&laquo; Entadras Antiguas', "jointstheme")) ?></li>
						    	        <li class="next-link"><?php previous_posts_link(__('Entradas Nuevas &raquo;', "jointstheme")) ?></li>
						            </ul>
						        </nav>
						    <?php } ?>		
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("No hay resultados.", "jointstheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Prueba de Nuevo.", "jointstheme"); ?></p>
    					    	</section>
    					    	<section class="search">
                                    			<p><?php get_search_form(); ?></p>
                		                </section> <!-- end search section -->
    					    	<footer class="article-footer">
    					    	    <p><?php _e(".", "jointstheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    			
    			    <?php get_sidebar(); ?>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
