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
			<div class="row">
				  <div class="small-4 medium-4 large-4 columns precioLabel">
				  	Precio:

				  </div>
				  <div class="small-4 medium-4 large-4 columns precioNumber">
				  	<?php the_field('precio'); ?>€ 

				  </div>


<?php if( get_field('compra_alternativa') ){ ?>

  <div class="small-4 medium-4 large-4 columns">
  	bla
  </div>
    <?php } else { ?>



				  <div class="small-4 medium-4 large-4 columns">
				  	<!-- <a  style="" class=" button tiny" href="#">COMPRAR</a> -->
				  	 <!-- <a><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/paypal2.png" border="0" alt="Marcas de aceptación" /></a> -->
					<?php //echo do_shortcode('[gravityform id="3"] ');?>
					<?php if(get_field('codigo_paypal')!=''){?>
					<a data-reveal-id="myModal" class=" button tiny" >COMPRAR</a>
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
					<a data-reveal-id="cursosModal" class=" button tiny" >COMPRAR</a>
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
					<div class="small-12 columns butCiudad">
						<div class="small-9 columns ciudadSide">
							<?php the_sub_field('ciudad');?>
						</div>
						<div class="small-3 columns dateSide">
							<?php if(get_sub_field('fecha')!=''){?>
							<?php $date = DateTime::createFromFormat('Ymd', get_sub_field('fecha'));
							echo $date->format('d/m');?>
							<?php// the_sub_field('fecha');?>
							<?php }?>
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