
						
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">


	
  <?php if( have_rows('seccion') ):

 	// loop through the rows of data
    while ( have_rows('seccion') ) : the_row();

        // display a sub field value
        ?>
        	<?php $link =sanitize_title(get_sub_field('titulo_menu'),true);?>
        	<div id="<?php echo $link?>" class="scrollto seccionCurso">
        	<h2 class=""><?php the_sub_field('titulo');?></h2>
        	<?php the_sub_field('contenido');?>
        </div>





<?php
    endwhile;

else :

    // no rows found

endif;

?>

	




	


	    <?php// the_content(); ?>
	    <?php //wp_link_pages(); ?>
	
		



	
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php //comments_template(); ?>
					
</article> <!-- end article -->
