<?php
/*
Template Name: Cursos Express
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
					    	  <?php if( have_rows('curso') ):

						 	// loop through the rows of data
							    while ( have_rows('curso') ) : the_row();

							        // display a sub field value
							        ?>
							        <?php if($count==0){?>
							     	<div class="row up hide-for-small ">

									<div class="small-12 columns  wideCurseRow" >


										<div class="row ">
											<div class="small-12 columns wideCurse" >
													<img src="<?php the_sub_field('imagen');?>"/>


													<div class="wideCurseIn small-6 columns">
														<h1><?php the_sub_field('titulo');?></h1>
														<?php the_sub_field('descripcion');?>
														<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
													</div>
											</div>
										</div>






										<div class="row">
											<div class="small-12 columns wideCurse_footer">
												<div class="small-8 medium-6 large-8 columns wideCurseLeft">
														<?php if(get_sub_field('fecha')!=''){?>
														<?php   
															$datte= DateTime::createFromFormat('Ymd', get_sub_field('fecha'));
															//echo $datte->format('d-m-Y');

															?>



															
															<p>Fecha: <?php echo $datte->format('d-m-Y'); ?></p>
															<?php } ?>
													<p>Horario: <?php the_sub_field('horario');?></p>

													<p>Lugar: <?php the_sub_field('lugar');?></p>
												</div>
												<div class="small-1 medium-1 large-1 columns wideCurseCenter ">
													 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
													</div>
												<div class="small-3  medium-5 large-3 columns wideCurseRight ">
												       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
												      <?php $varrForm=get_sub_field('formulario'); ?>
													<?php //echo $varrForm;?>
													<div class="paypallButton">
													<?php echo do_shortcode('[gravityform id="'.$varrForm.'"] ');?>
													</div>
												       <!-- <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> -->


												</div>
											</div>
										</div>
									</div>


								</div>
								
								<!-- SECOND -->

								<div class="row hide-for-medium-up">
									<div class="small-12 medium-12 large-12 columns"></div>
									
										<!-- <div class="row"> -->
											  <div class="small-12 medium-6 large-6 columns thinCurse ">
											  	<div class="expressHeaderImageSmall	">
													<img  class=""src="<?php the_sub_field('imagen');?>"/>
												</div>
												<div class="wideCurseIn small-12 columns">
													<h3><?php the_sub_field('titulo');?></h3>
													<?php the_sub_field('descripcion');?>
													<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
												</div>

												<div class="small-12 columns wideCurse_footer">
													<div class="small-6 columns wideCurseLeft">
														
															<?php if(get_sub_field('fecha')!=''){?>

															<?php   
															$datte= DateTime::createFromFormat('Ymd', get_sub_field('fecha'));
															//echo $datte->format('d-m-Y');

															?>



															
															<p>Fecha: <?php echo $datte->format('d-m-Y'); ?></p>
															<?php } ?>
															<p>Horario: <?php the_sub_field('horario');?></p>

															<p>Lugar: <?php the_sub_field('lugar');?></p>
													</div>
													<div class="small-1 columns wideCurseCenter ">
															 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
															</div>
													<div class="small-5 columns wideCurseRight ">
														       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
														          <?php $varrForm=get_sub_field('formulario'); ?>
															<?php //echo $varrForm;?>
															<div class="paypallButton paypalSmall">
															<?php echo do_shortcode('[gravityform id="'.$varrForm.'"] ');?>
															</div>
														       <!-- <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> -->


													</div>
												</div>

											 </div>



					
										 
										</div>
									</div>

								<?php }else{ ?>
								<?php if($count==1){?>
								<div class="row ">
									<div class="small-12 medium-12 large-12 columns"></div>
									<?php } ?>
									
										<!-- <div class="row"> -->
											  <div class="small-12 medium-6 large-6 columns thinCurse ">
											  	<div class="expressHeaderImageSmall	">
													<img  class=""src="<?php the_sub_field('imagen');?>"/>
												</div>
												<div class="wideCurseIn small-12 columns">
													<h3><?php the_sub_field('titulo');?></h3>
													<?php the_sub_field('descripcion');?>
													<div class="requisitos">Requisitos Mínimos para realizar el curso: <?php the_sub_field('nivel_minimo');?></div>
												</div>

												<div class="small-12 columns wideCurse_footer">
													<div class="small-6 columns wideCurseLeft">
															<?php if(get_sub_field('fecha')!=''){?>
															<?php   
															$datte= DateTime::createFromFormat('Ymd', get_sub_field('fecha'));
															//echo $datte->format('d-m-Y');

															?>



															
															<p>Fecha: <?php echo $datte->format('d-m-Y'); ?></p>
															<?php } ?>

															<p>Lugar: <?php the_sub_field('lugar');?></p>
													</div>
													<div class="small-1 columns wideCurseCenter ">
															 <img class="imageBlock" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/diagonal-ex-foot.png"></img>
															</div>
													<div class="small-5 columns wideCurseRight ">
														       <div class="precioExpress"><?php the_sub_field('precio');?><span class="euroSymbolExpress">€</span></div>
														        <?php $varrForm=get_sub_field('formulario'); ?>
															<?php //echo $varrForm;?>
															<div class="paypallButton paypalSmall">
															<?php echo do_shortcode('[gravityform id="'.$varrForm.'"] ');?>
															</div>
														       <!-- <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> -->

										

													</div>
												</div>

											 </div>



					
										
										 <?php if($count==2){?>
										</div>
									</div>
								</div>
							<?php 
							$count=0;
							} ?>
								<?php

							



								} ?>
							       
							       
							        

								
								<?php $count++;?> 


								<?php
								    endwhile;

								else :

								    // no rows found

								endif;

								?>
							 <?php if($count==2){?>
							   <div class="small-12 medium-6 large-6 columns"></div>
							 </div>
							 <?php  }?>


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
$("select#input_4_3").change(function() {
	//console.log('change');
            var _div_id = $(this).val();
            $(".cDiv").hide();
            var endDiv = ('#'+_div_id)
            //console.log(endDiv);

            $(endDiv).toggle();
        }); 









</script>

