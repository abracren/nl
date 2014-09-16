<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="fullWidth dddBack">			
<?php get_template_part( 'partials/content', 'mainslider' ); ?>
</div>
<?php 
$rows = get_field('destacados','option');
$row_count = count($rows);
//echo $row_count;
//the_field('titulo','option');
?>


<div class="fullWidth FraseBack marginRest hide-for-small">
	<div class="row">
	  <div class="small-12 medium-12 large-12 columns">
	  	Todos o casi todos los que nadamos distinguimos el placer de nadar por tres de sus grandes atributos naturales: El Movimiento, la Sensación y la Excelencia.
	  </div>
	</div>
</div>


<div class="fullWidth aaaBack "> 
    <div class="row">
        <div class="medium-12 columns">
            <ul class=" small-block-grid-1 medium-block-grid-<?php echo $row_count;?> underSlide">
  	<?php if( have_rows('destacados','options') ):

 	// loop through the rows of data
	    while ( have_rows('destacados','options') ) : the_row();

	        // display a sub field value
	        ?>


                <li>
                    <a class="linkBlock" href="<?php the_sub_field('link');?>">
                        <div class="block">
                            <img class="imageBlock" src="<?php the_sub_field('imagen');?>"></img>
                            <h3 class="textBlock"><?php the_sub_field('titulo');?></h3>
                        </div>
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

<div class="fullWidth grayBack">
	<div class="row headerConnect">
		<div class="medium-12 columns ">
			<div class="medium-4 columns">
				    <h2 class="section-title">VIVE LA EXPERIENCIA</h2> 
			</div>
			<div class="medium-8 columns descConnect">
				    <!-- <p class="cert-cta"><span class="cert-cta-text"><b>23 Milliones</b> de ceritificaciones y creciendo</span>   -->
				    <a class="button " href="//www.nadandolibre.com/master-de-natacion-tecnico/" target="_blank">APRENDA COMO TRABAJAR CON NOSOTROS</a> 
				    </p>
			</div>
		</div>
	</div>


	<div class="row">
	    <div class="medium-6 columns small-12 bigger">
	        <a class="connect-btn connect-horiz-image" href="<?php the_field('recuadro_grande_texto_link','option');?>" target="_blank">
	            <div class="connect-btn-hover text-center biggest">
	                <p><?php the_field('recuadro_grande','option');?></p>
	                <p>
	                    <button class="button btn-lg " >SUSCRIPCIÓN</button>
	                </p>
	            </div>
	            <img src="<?php the_field('recuadro_grande_Imagen','option');?>" alt="<?php the_field('recuadro_grande','option');?>">
	        </a>
	    </div>
	    <div class=" medium-3 columns small-6">
	        <a class="connect-btn" href="<?php the_field('recuadro_facebook_link','option');?>" target="_blank">
	            <div class="connect-btn-hover text-center">
	                <p><?php the_field('facebook_button','option');?></p>
	                <p>
	                    <button class="button btn-lg btn-primary" >Síguenos!</button>
	                </p>
	            </div>
	            <img class="connect-bg-img" src="<?php the_field('recuadro_facebook_imagen','option');?>">
	        </a>
	    </div>
	      <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 1,  'cat' => 3,);
						$loop = new WP_Query( $args );
						
						while ( $loop->have_posts() ) : $loop->the_post();
						?>
							
	    <div class="medium-3 columns small-6">
			        <a class="connect-btn" href="<?php the_permalink(); ?>" target="_blank">
		            <div class="connect-btn-hover connect-news" style="padding-top:20px;">
		                <h5 class="connect-news-date"><?php the_date( );?></h5> 
		                <hr class="connect-news-rule">
		                <h3 class="connect-news-title"><?php the_field('titulo_frontpage');?></h3> 
		            </div>
		            <img class="connect-bg-img" src="<?php the_field('miniatura');?>">
		        </a>
	    </div>
	    <?php
			    endwhile;
			     
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
	</div>

	<div class="row">
	    <div class="medium-3 columns small-6">
	        <a class="connect-btn" rel="lightbox" href="https://www.youtube.com/watch?v=<?php the_field('video_1','option');?>" target="_blank">
	            <img class="yt-video-play-btn" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/yt-video-play-btn.png">
	            <img class="connect-bg-img hoverZoomLink" src="<?php the_field('video_1_imagen','option');?>">
	        </a>
	    </div>
	
			  <div class="medium-3 columns small-6">
			        <a class="connect-btn" href="<?php the_field('recuadro_promo_link','option'); ?>" target="_blank">
			            <div class="connect-btn-hover connect-news">


			             <h3 class="connect-news-title noLine centerText"><?php the_field('recuadro_promo','option'); ?></h3> 
			            </div>
			            <img class="connect-bg-img" src="<?php the_field('recuadro_promo_imagen','option'); ?>">
			        </a>
			    </div>



	    <div class=" visible-sm"></div>
	    <div class="medium-6 columns small-12 bigger ">
	        <a class="connect-btn connect-horiz-image"rel="lightbox" href="https://www.youtube.com/watch?v=<?php the_field('video_2','option');?>" target="_blank">
	            <img class="yt-video-play-btn" src="<?php echo get_template_directory_uri(); ?>/imagesRoot/yt-video-play-btn.png">
	            <img class="connect-bg-img" src="<?php the_field('video_2_imagen','option');?>">
	        </a>
	    </div>
	</div>

</div>	<!--End GRAY-->


<?php get_footer(); ?>

<script  >
	


	$(document).ready(function() {
		var owl = $("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade",
    autoPlay : 10000,

  });
 
 

});
</script>



