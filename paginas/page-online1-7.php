							
<?php
/*
Template Name: online-1-7
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
							<div class="videoBackCursoPnline2 fullWidth">
							<div class="row ">
							  <div class="small-12 medium-12 large-12 columns">
							  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/da2RAzY4f6o?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  	</div>
							  </div>
							</div>
							</div>
							<div class="row  mainheadercurso integracionCurso">
							
															  	

							<div class="row">
							  	 <div  class="medium-7 columns">
							  	 	
							  	 	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/iJH9rGz83sA?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  	 	</div>
							  	 	 <div  class="medium-5 columns ">
							  	 		<h3>La integración al nado natural.</h3>
 
										<p>Como te comentamos en el vídeo, ahora es el momento de trasladar la información aprendida en los Drills en tu nado natural.</p>
							  	 	</div>
							 </div>
							 <div class="row">
							  	 <div  class="medium-7 columns">
							  	 	
							  	 	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/oSq0JIdbmYQ?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  	 	</div>
							  	 	 <div  class="medium-5 columns ">
							  	 		<h3>Los 4 puntos focales de la integración.</h3>
 
										<p>Gracias a la practica de los Drills cada uno de tus movimientos han mejorado. Ahora podrás incluir en tu nado natural una cadencia de brazada ideal para deslizar y seguir enfocandote en la integración y cada uno de sus puntos focales para conseguir consagrarte como un nadador de Nivel 1.
 
											¡Este estilo, este baile, este control del Timic, no tiene como objetivo llegar ha realizar un punto muerto al nadar. Nadar con un Timic adecuado es algo que se puede llegar a conseguir, con una practica sofisticada!</p>
							  	 	</div>
							 </div>
							 </div>


							  	<div class="row ">
							  		<h5 class=" centerText">Veamos algunos ejemplos de mejora en nuestros alumnos y como han cambiado su timic para conseguir deslizar mejor.</h5>
						`	  	  <ul class="medium-block-grid-2">
									<li>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/QWB9k8wkcGk?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>


							  		<li class="">
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/cYNT3_Rl5WU?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li >

							  		
	  	  	
							  	  </ul>
							  	  
							  	  
							  	</div>
							  								  	<div class="row ">
							  		<h5 class=" centerText">Hay mucho trabajo por hacer, pero gracias a la inspiración de los grandes campeones y el sistema de entrenamiento Flow&Training tu meta cada vez esta más cerca..</h5>
						`	  	  <ul class="medium-block-grid-2">
									<li>
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/hHlD0Z5Adhg?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li>


							  		<li class="">
							  	  	<div class="flex-video widescreen videoFull ">
							  		
							  			        <iframe width="560" height="315" src="//www.youtube.com/embed/1e870cc8u_A?vq=hd1080" frameborder="0" allowfullscreen></iframe>

							  		</div>
							  		</li >

							  		
	  	  	
							  	  </ul>
							  	  
							  	  
							  	</div>
							  	<div class="row ">
							  		<h4 class="blueText centerText">Y ahora, sigue el entrenamiento, vuelve a repasar este curso y pronto estaras nadando en el siguiente NIVEL. </h4>
						`	  	  
							  	  
							  	  
							  	</div>
							  	
							  </div>
							  
							</div>
							




							




						</div> 

						<div class="fullWidth footerCurse">
						<div class="row">
							  <div class="small-12 medium-12 large-12 columns navigationCursoOnline">
							  	<div class="cursoPrev"><a href="/formacion-on-line/drill-6-super-combo-lateral/">Anterior Lección</a></div>
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