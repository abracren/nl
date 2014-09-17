<?php get_header(); ?>
<div class="blogPages onlineCursoFlow">


				    	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
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
			
					
					
					    	<?php get_template_part( 'partials/loop', 'courseinit' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
				
</div>

<?php get_footer(); ?>
<script  >
	


	jQuery(document).ready(function() {
		var owl = jQuery("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade",

  });
 
 

});
	    jQuery('.equalSize').matchHeight();

</script>