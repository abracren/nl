							
<?php
/*
Template Name: online-1-0
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
								</header>
								<!-- end article header -->
							</div>
						</div>
						<div id="owl" class="owl-carousel">


							<div class="slid2 slid-01" style="background:url(<?php the_field('imagen') ?>);">
								<div class="caption-wrapper2 ">

									<div class="carousel-caption2 row">
										<div class="medium-6 columns ">


											<h1 class="capTitulo1"><?php the_field('titulo') ?></h1>
											<p>
												<?php the_field( 'descripcion') ?>
											</p>



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




						<!-- <div class="videoBackCursoPnline fullWidth">
							<div class="row ">
								<div class="small-12 medium-12 large-12 columns">
									<div class="flex-video widescreen videoFull ">

										<iframe width="560" height="315" src="//www.youtube.com/embed/ArslD36eVBo?vq=hd1080" frameborder="0" allowfullscreen></iframe>

									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 columns equalSize">
								<p></p>
								<h1>Presentación</h1>
								<p>Tu primera y más sabia lección sera la de descargar y "estudiar" el manual Oficial de entrenamiento.</p>

								<div class="  button">DESCARGA EL MANUAL</div>


								<ul>
									<li class="redText">TODO CARECERÁ DE SENTIDO SI NO LEES DETENIDAMENTE ANTES ESTE MANUAL DE FORMACIÓN.</li>
								</ul>
								<p>
									Tras la descarga lee atentamente sus capítulos, los cuales te transportaran a otro nivel de comprension sobre la practica y el aprendizaje en natación.</p>

								<p>Cuando llegues a los capítulos de los Drills observa los ejercicios en vídeo, y lee atentamente el contenido de los mismos. Recuerda que el libro esta lleno de enlaces para que puedas acceder a los vídeos y a todo el contenido digital del mismo.</p>
								<p>En el interior del manual tambien encontraras los entrenamientos SI, así es entrenamientos para 3 meses de formación.</p>
								<p>Imprimelos y plastificalos para poder llevarlos a la piscina y tenerlos a pie de bordillo, ESTO ES MUY IMPORTANTE, para una correcta formación.</p>
								<p>Una vez tengas este primer paso dado, podrás entender con claridad toda la información que vamos a ofrecerte en este curso On-Line, pues gracias a los videos que encontraras en este apartado vas a conseguir comprender con mayor profundidad como has de practicar cada Drill y cada punto focal.</p>
								<p>El manual es parte principal de este curso de formación.</p>
								<ul>
									<li>NUESTRA RECOMENDACIÓN PARA GARANTIZARTE EL RESULTADO DE ESTE CURSO: <span class="redText">¡NO SIGAS ADELANTE ANTES DE LEER EL MANUAL!</span>
									</li>
									<li>UNA VEZ LO HAYAS LEIDO VUELVE PARA RECOPILAR LA INFORMACIÓN EXTRA DE CADA UNA DE LAS LECCIONES!</li>
								</ul>
								<p></p>
								<p></p>
								<div class="whiteText centerText panel destacOnline">NUESTRO PROPÓSITO ES HACERTE MEJORAR EN NATACIÓN Y PARA ELLO VAS A NECESITAR ENTENDER LA FILOSOFIA DE ENTRENAMIENTO FLOW&TRAINING.</div>
								<p class=" advisePanel panel">Nota importante: Una vez salgas del navegador y quieras volverla a entrar en tu curso On-line, podrás hacerlo desde la opción de Curso On-line para Miembros en la página principal.</p>

							</div>
							<!-- <div class="small-12 medium-4 large-4 columns centerText one_sidebar panel equalSize" style="display:none">
													  	<h5 class="redText  button" >DESCARGA EL MANUAL AQUI</h5>

													  	<img class="" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/icon_sidebar_curso_online.jpg">
														<p class=" advisePanel panel">Nota importante: Una vez salgas del navegador y quieras volverla a entrar en tu curso On-line, tendrás que hacerlo desde la opción de curso On-line para miembros, la cual está disponible en la pagina principal a la derecha,con una flecha igual a esta.</p>

													  	
													  </div> -->
													  <!--
						</div>





						</div>
						<!-- end article section --><!--

						<div class="fullWidth footerCurse">
							<div class="row">
								<div class="small-12 medium-12 large-12 columns navigationCursoOnline">
									<!-- <a href="/"><div class="cursoPrev">Anterior Lección</div></a> --><!--
									<a href="/formacion-on-line/drill-1-equilibrio-ventral/">
										<div class="cursoNext">Siguiente Lección</div>
									</a>
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