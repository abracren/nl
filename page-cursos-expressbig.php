<?php
/*
Template Name: Cursos Express Big
*/
?>
<?php $count = 0;?>
<?php get_header(); ?>

<div class="cursosMain">
 <?php get_template_part( 'partials/content', 'expressheaderImagen' ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<div class="row all">
					    		<div class="small-12 columns">

					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					 <?php $args = array( 'post_type' => 'cursos_express', 'posts_per_page' => 100 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();

							        // display a sub field value
							        ?>
							      
							     	<div class="row upRow hide-for-small ">

									<div class="small-12 columns  wideCurseRow" >


										<div class="row ">
											<div class="small-12 columns wideCurse" >
													<img src="<?php the_field('inagen');?>"/>


													<div class="wideCurseIn small-6 columns">
														<h1><?php the_field('titulo');?></h1>
														<?php the_field('descripcion');?>
														<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_field('nivel_minimo');?></div>
													</div>
											</div>
										</div>






										<div class="row">
											<div class="small-12 columns wideCurse_footer">
												<div class="small-8 medium-6 large-8 columns wideCurseLeft">
							

															
															
												</div>
												<div class="small-1 medium-1 large-1 columns wideCurseCenter ">
													 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
													</div>
												<div class="small-3  medium-5 large-3 columns wideCurseRight ">
												       <div class="precioExpress"><?php the_field('precio');?><span class="euroSymbolExpress">€</span></div>
												      <?php $varrForm=get_field('formulario'); ?>
													
							
													<?php if( have_rows('locaciones') ):?>
												  	  <a data-reveal-id="cursosModalX" ><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> 
												<div id="cursosModalX" class="reveal-modal medium" data-reveal data-reveal-ajax="true" >
						
													<?php //echo $varrForm;?>
													
													<div class="row">
													<div class="medium-6 columns">
														<?php gravity_form($varrForm, false, false, false, '', true); ?>
													</div>
													<div class="medium-6 columns">
														<?php if( have_rows('locaciones') ):?>
														<?php
														// loop through the rows of data
															while ( have_rows('locaciones') ) : the_row();

																        // display a sub field value
														 ?>
														 <div class="unitLocation cDiv" id="<?php the_sub_field('codigo');?>">
														 <p>Curso:<?php the_title();?></p>
														 <p>Ciudad:<?php the_sub_field('ciudad');?></p>
														 <?php $date = DateTime::createFromFormat('Ymd', get_sub_field('fecha'));?>
														
														 <p>fecha:<?php echo $date->format('d/m');?></p>

														 <p>Centro:<a href="<?php the_sub_field('centro_link');?>" target="_blank"><?php the_sub_field('lugar');?></a></p>
															
														 </div>
														 <?php
														    endwhile;

														else :

														    // no rows found

														endif;

														?>
														

													</div>
													</div>
													  <a class="close-reveal-modal">&#215;</a>
								
												 
												</div> 
												<?php endif;?>
																			</div>
											</div>
										</div>
									</div>


								</div>
								
					

								

							





								<?php
								    endwhile;

							


								?>
							

							</div>
							</div>
							</div> <!-- endROWaLL -->

					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
    
				

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
</div>
<?php get_footer(); ?>
<script>

$(".cDiv").hide();

$("select#input_12_5").change(function() {
	console.log('change');
            var _div_id = $(this).val();
            $(".cDiv").hide();
            var endDiv = ('#'+_div_id)
            console.log(endDiv);

            $(endDiv).toggle();
        }); 

$(document).foundation();
</script>
