				<div class="fullWidth oooBack">

					<footer class="footer" role="contentinfo">
					
						<div id="inner-footer" class="row clearfix">

						
							<div class="large-12 medium-12 columns">
								<div class="row footLinks">
								  <div class="small-12 medium-5  columns">
																	  	
									    <!--<form class="newsletter-form" role="form">-->
									    <label class="newsletter-label">
									        <img class="newsletter-icon pull-left" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/newsletter-icon.png"><?php the_field('texto_subscripcion','option');?></label>
									    <div class="input-group input-group-lg">
									        <span class="input-group-btn">
									            <a class="button btn-default top-search-btn btn-primary" data-reveal-id="contactoMain" style="width: 100%" href="#" target="_blank">SUSCRÍBETE</a>
									        </span>
									    </div>
									    <!-- /input-group -->

									    <!--</form>-->

									</div>
								 
								  <div class="small-12 medium-2  columns">
								  	<ul class="list-unstyled footer-nav footer-nav-first">
								  		<?php if( have_rows('columna_1','options') ):

									                // loop through the rows of data
									                    while ( have_rows('columna_1','options') ) : the_row();

									                        // display a sub field value
									                        ?>

									                <li>
									                    <a href="<?php the_sub_field('link')?>">
									                    <?php the_sub_field('titulo')?>
									                    </a>
									                </li>
									                  <?php
									                            endwhile;

									                        else :

									                            // no rows found

									                        endif;

									                        ?>	
									                
									            
									    </ul>
								  </div>
								
								<div class="small-12 medium-2  columns">
								  	<ul class="list-unstyled footer-nav footer-nav-first">
									               <?php if( have_rows('columna_2','options') ):

									                // loop through the rows of data
									                    while ( have_rows('columna_2','options') ) : the_row();

									                        // display a sub field value
									                        ?>

									                <li>
									                    <a href="<?php the_sub_field('link')?>">
									                    <?php the_sub_field('titulo')?>
									                    </a>
									                </li>
									                  <?php
									                            endwhile;

									                        else :

									                            // no rows found

									                        endif;

									                        ?>	
									            
									    </ul>
								  </div>
								  <div class="small-13 medium-3  columns">
								  	<ul class="list-unstyled footer-nav footer-nav-first">
									               <?php if( have_rows('columna_3','options') ):

									                // loop through the rows of data
									                    while ( have_rows('columna_3','options') ) : the_row();

									                        // display a sub field value
									                        ?>

									                <li>
									                    <a href="<?php the_sub_field('link')?>">
									                    <?php the_sub_field('titulo')?>
									                    </a>
									                </li>
									                  <?php
									                            endwhile;

									                        else :

									                            // no rows found

									                        endif;

									                        ?>	
									    </ul>
								  </div>
								</div>
							</div>
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
			                <div class="large-12 medium-12 columns">		
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>		
						</div> <!-- end #inner-footer -->			
					</footer> <!-- end .footer -->
				  </div>
				 
				  <div id="contactoMain" class="reveal-modal" data-reveal>
				  	
 					<?php echo do_shortcode('[gravityform id="2" name="Subscripción"]')?>

				</div>
				</div> <!-- end #container -->
				

			</div> <!-- end .inner-wrap -->
		<!-- </div> end .off-canvas-wrap -->
						
				<!-- all js scripts are loaded in library/joints.php -->
				<?php wp_footer(); ?>
	</body>

</html> <!-- end page -->