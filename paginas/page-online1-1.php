							
<?php
/*
Template Name: online-1-1
*/
?>

<?php get_header(); ?>
<div class="blogPages onlineCursoFlow">

<?php //get_template_part( 'partials/content', 'blogindexheader' ); ?>




			
			<div class="fullCurse">
				    	

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<div class="row">
							<div class="small-12 medium-12 large-12 columns">
								<header class="article-header">
									<h4 class="page-title"><?php // the_title(); ?></h4>
								</header> <!-- end article header -->
							</div>
						</div>
						<div id="owl" class="owl-carousel" >

					

					

								<div class="slid2 slid-01" style="background:url(<?php the_field('imagen') ?>);">
										<div class="caption-wrapper2 ">
											
												<div class="carousel-caption2 row">
													<div class="medium-6 columns ">
														
														
														<h1 class="capTitulo1"><?php the_field('titulo') ?></h1>
														<p><?php the_field('descripcion') ?></p>

														
														
													</div>

												</div>
												
											
										</div>
										
														<div class="row imageCourseCaption">
															<div class="large-12 columns">
																<img class="" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/icon_sidebar_curso_online.jpg">
															</div>
														</div>
														
								</div>

								
													
							
							
							
						</div>

										
						    <?php the_content(); ?>
					
													   
							<!-- 
							<div class="videoBackCursoPnline fullWidth">
							<div class="row ">
							  <div class="small-12 medium-12 large-12 columns">
							  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/AMtlVNnAkVM?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  	</div>
							  </div>
							</div>
							</div>
							<div class="row  mainheadercurso">
							<div class="row header_2">
							  <div class="small-12 medium-12 large-12 columns ">
							  	<div class="row header1_1">
							  	<h3>Ver el video del Drill Nº 1.</h3>

							  	<p>Con la visualización del vídeo, has de entender cuál es la coordinación y cuales los movimientos que necesitaras hacer para conseguir realizar el Drill a la perfección. 
								Durante todo el curso, has de intentar practicar intentando imitar con esmero cada acción y movimiento de los vídeos.
								 
								Este Drill, es uno de los más importantes, y has de dedicarle tu máxima atención.
								Durante la práctica del mismo, has de interiorizar donde están situadas tus articulaciones, memorizando dicha situación corporal durante la práctica de los diferentes puntos focales.
								 
								¡Ahora observa los videos y muy pronto engendras la función del ejercicio a la perfección!</p>

								</div>
								</div>
								</div>
							  	

							<div class="row">
							  	 <div  class="medium-7 columns">
							  	 	
							  	 	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/Ob6OU6bCmwU?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  	 	</div>
							  	 	 <div  class="medium-5 columns centerText">
							  	 		<img style=""src="//placehold.it/366x366/"/>
							  	 	</div>
							 </div>
							 </div>


							  	<div class="row panel videosPAnel1_1 ">
							  		<h2>Formación On-Line: Explicacion y detalles de los 4 puntos focales.</h2>
							  	  <ul class="medium-block-grid-2">
									<li>
									<h3>Drill 1</h3>
									<p class="overVideoPAr">Tu primera acción será la de observar la coordinación del ejercicio y memorizar los movimienos para poder luego practicarlo en la piscina. Pero no te pierdas la explicacion de cada punto focal.</p>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/-EIuIHe5ynI?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>


							  						<li class="rightText">
									<h3>Foco 1</h3>
									<p class="overVideoPAr">Cabeza mirando el fondo..</p>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/w5Fe8rvtVH8?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li >

							  						<li>
									<h3>Foco 2</h3>
									<p class="overVideoPAr overVideoPArNoHeight ">Control de los puntos de ANCLAJE.</p>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/vioalBiz_CM?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>

							  		<li class="rightText">
									<h3>Foco 3</h3>
									<p class="overVideoPAr overVideoPArNoHeight">Control de angulo de los brazos</p>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/HavalAiKcqY?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>
							  		<li>
									<h3>Foco 4</h3>
									<p class="overVideoPAr overVideoPArNoHeight">Control de los focos tras la respiración.</p>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/pSUK1l_fLo4?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>
	  	  	
							  	  </ul>
							  	  
							  	</div>
							  	<div class="row bottompanel1_1 panel">
								  	<div class="small-12 medium-12 large-12 columns ">
								  	  	<div class=" ">
								  	  		Recuerda que tras haber leído el manual y conocer los videos y sus explicaciones tendrás que ir practicando con el entrenamiento que incluye el manual Oficial.
	 
											Ahora utiliza las flechas para volver a la pagina anterior o seguir viendo los videos y sus explicaciones.
								  	  	</div>
								  	  	
								  	  </div>
								 </div>
							  	
							  </div>
							  
							</div>
							




							




						</div> 
						<div class="fullWidth footerCurse">
						<div class="row">
							  <div class="small-12 medium-12 large-12 columns navigationCursoOnline">
							  	<a href="/formacion-on-line/"><div class="cursoPrev">Anterior Lección</div></a>
							  	<a href="/formacion-on-line/drill-2-equilibrio-dorsal/"><div class="cursoNext">Siguiente Lección</div></a>
							  </div>
						</div>
						</div>

 -->
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
					</div>
			
    				

</div>
<?php get_footer(); ?>
<script  >
	


	$(document).ready(function() {
		var owl = $("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade",

  });
 
 

});
	    $('.equalSize').matchHeight();

</script>