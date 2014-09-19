<div id="cursosSidebar" class="sidebar large-4 medium-4 columns equalBlog"  role="complementary">

	<!-- This content shows up if there are no widgets defined in the backend. -->
	<div class="styckPanel ">
		<?php if(get_field('tapa_curso')!=''){?>
		<div class="tapaCurso" style="margin-top:0px;">
			<img src="<?php the_field('tapa_curso'); ?>" alt="curso"/>
		</div>
		<?php  }?>
		<div class="panel LeyendPanel">
			<h6 class="buyLeyend">Compra tu curso AHORA MISMO de forma segura con Pay Pal y vive la experiencia.</h6>
		</div>
	

		<div class="panel buyItem">
			<div class="row" style="padding: 10px;">
				<?php if( get_field('compra_alternativa') ){ ?>
				
				<?php } ?>
				 <div class="small-6 medium-6 large-6 columns centerText" style="margin-top: 15px;">
				  	<div class=""style="color:#17B5FF;text-decoration:none;font-size:2.4em;"> <?php the_field('precio_rebajado'); ?>€ </div>
				  	<div class=""style="color:#ff0000!important;text-decoration:line-through;font-size:2em;"><?php the_field('precio'); ?>€ </div>

				  </div>
				  <div class="small-5 medium-5 large-5 columns  centerText precioLabel" style="background-color: rgb(43, 172, 115);padding: 10px;border-radius: 4px;">
				  	OFERTA POR TIEMPO LIMITADO

				  </div>

				 <div class="small-1 columns"style="color: transparent;">-</div>
			</div>
			<?php if( get_field('compra_alternativa') ){ ?>
			
			<?php } ?>
<?php if( get_field('compra_alternativa') ){ ?>
<div class="row">

  <div class="small-12 medium-12 large-12 columns centerText " style="margin-top:20px;">
  	<?php if(get_field('codigo_paypal')!=''){?>
		<a data-reveal-id="myModal" class=" button " style="min-width:80%;">COMPRAR</a>
					<div id="myModal" class="reveal-modal medium" data-reveal data-reveal-ajax="true" >
						
						<?php $varrForm=get_field('form_alternativo'); ?>
						<?php //echo $varrForm;?>
						<?php// echo do_shortcode('[gravityform id="'.$varrForm.'", ajax=true] ');?>
						<div class="row">
						
							<?php gravity_form($varrForm, false, false, false, '', true); ?>
						
						</div>
						  <a class="close-reveal-modal">&#215;</a>
	
					 
					</div> 
					<?php }?>
  </div>
</div>
    <?php } else { ?>


				</div>
				<div class="row">
				  <div class="small-12 medium-12 large-12 columns centerText">
				  	<!-- <a  style="" class=" button tiny" href="#">COMPRAR</a> -->
				  	 <!-- <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> -->
					<?php //echo do_shortcode('[gravityform id="3"] ');?>
					<?php if(get_field('codigo_paypal')!=''){?>
					<a data-reveal-id="myModal" class=" button " style="min-width:80%;">COMPRAR</a>
					<div id="myModal" class="reveal-modal medium" data-reveal data-reveal-ajax="true" >
						
						<?php $varrForm=get_field('formulario'); ?>
						<?php //echo $varrForm;?>
						<?php// echo do_shortcode('[gravityform id="'.$varrForm.'", ajax=true] ');?>
						<div class="row">
						<div class="medium-6 columns">
							<?php gravity_form($varrForm, false, false, false, '', true); ?>
						</div>
						<div class="medium-6 columns">
							<p>
								Curso:<?php the_title( );?>
							</p>
							<p>Modalidad: ONLINE</p>

						</div>
						</div>
						  <a class="close-reveal-modal">&#215;</a>
	
					 
					</div> 

					<?php }?>

				<?php if( have_rows('locaciones') ):?>
					 <!-- <a data-reveal-id="cursosModal" class=" button tiny" >COMPRAR</a>  -->
					<div id="cursosModal" class="reveal-modal medium"  data-reveal data-reveal-ajax="true" >
						
						<?php $varrForm=get_field('formulario'); ?>
						<?php //echo $varrForm;?>
						<?php// echo do_shortcode('[gravityform id="'.$varrForm.'", ajax=true] ');?>
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



					<?php// if(get_field('formulario')!=''){?>
					<?php //$varrForm=get_field('formulario'); ?>
					<?php //echo $varrForm;?>
					<?php //echo do_shortcode('[gravityform id="'.$varrForm.'"] ');?>
					<?php //} ?>
				  </div>








<?php }?>




			</div>
		</div>
		<div class="location">
			
		<?php if( have_rows('locaciones') ):?>
		<h5> PROXIMOS CURSOS EN TU CIUDAD</h5>
<?php
		// loop through the rows of data
			while ( have_rows('locaciones') ) : the_row();

				        // display a sub field value
		 ?>
				<div class=" row panel butCiudadPanel">
					<div class="small-12 columns butCiudad butCiudad2">
						<div class="small-5 columns ciudadSide">
							<?php the_sub_field('ciudad');?>
						</div>
						<div class="small-2 columns dateSide">
							<?php if(get_sub_field('fecha')!=''){?>
							<?php $date = DateTime::createFromFormat('Ymd', get_sub_field('fecha'));
							echo $date->format('d/m');?>
							<?php// the_sub_field('fecha');?>
							<?php }?>
						</div>
						<div class="small-5 columns buttonHolderCursos">
									<a data-reveal-id="modalNew<?php the_sub_field('codigo');?>"  class="butExpress button tiny " style=" font-size: 1.1em;padding-top: 8px;padding-bottom: 6px;">Comprar</a> 
												<div id="modalNew<?php the_sub_field('codigo');?>" class="reveal-modal" data-reveal data-reveal-ajax="true" >
													<div class="row">
													<div class="medium-6 columns">

														 <div class="unitLocation cDiv2" id="">
															 <p>Curso:<?php the_title();?></p>
															 <p>Ciudad:<?php the_sub_field('ciudad');?></p>
															 <?php $date = DateTime::createFromFormat('Ymd', get_sub_field('fecha'));?>
															
															 <p>fecha:<?php echo $date->format('d/m');?></p>

															 <p>Centro:<a href="<?php the_sub_field('centro_link');?>" target="_blank"><?php the_sub_field('lugar');?></a></p>
																
														 </div>
													</div>
													<div class="medium-6 columns panel" style="background-color: #afecf5;">
														<div class="aceptButtonDiv">
															<h6>
																Debe aceptar los terminos y condiciones antes de continuar
															</h6>
															<p><a href="http://www.nadandolibre.com/wp-content/themes/nl/imagesRoot/Descargo.pdf" target="_blank">Terminos y condiciones (abre en una ventana nueva)</ab>
															</p><a  class="button aceptButton">Acepto</a>
														</div>
														<div class="revealPPButton">
														<div class="paypayformStandard">
														<div class="paypalTitle">
														Realiza tu compra mediante PayPal
														</div>
														<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> <input type="hidden" name="cmd" value="_s-xclick"> <input type="hidden" name="hosted_button_id" value="<?php the_sub_field('codigo	');?>"> <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet."> <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1"> </form> 
														</div>
														</div>
													</div>
													</div>


												</div>
											</div>

					</div>
				</div>	
				
		<?php
		    endwhile;

		else :

		    // no rows found

		endif;

		?>
			
		</div>

		<div class="moreCursos">
		<h5> MÁS CURSOS</h5>
		<?php
			$post_object = get_field('cursos_rel');


if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;

/*
*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
*/

$post_objects = get_field('cursos_rel');

if( $post_objects ): ?>
    
    <?php foreach( $post_objects as $post_object): ?>
        <div class="panel panelMoreCursos">
				
				
            <a href="<?php echo get_permalink($post_object->ID); ?>"><h6><?php echo get_the_title($post_object->ID); ?></h6></a>
            			</div>	

    <?php endforeach; ?>
    
<?php endif;

?>
			<!-- <div class="panel panelMoreCursos">
				<h6>EL ADN DE LA FLUIDEZ</h6>
				
			</div>	
			<div class="panel panelMoreCursos">
				<h6>EL ADN DE LA FLUIDEZ</h6>
				
			</div> -->
			
		</div>
	</div>
					



	
</div>

