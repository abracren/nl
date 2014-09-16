<?php
/*
Template Name: Libros
*/
?>
<?php



?>
<?php get_header(); ?>
<div class="teamPage">
<?php get_template_part( 'partials/content', 'headerShadow' ); ?>
<div class="cursosMain">

    <?php //get_template_part( 'partials/content', 'blogindexheader' ); ?>

    <div class="fullWidth oooBack2">

    </div>

    <div id="content">

        <div id="inner-content" class="row clearfix">
            <div id="main" class="large-12 medium-12 columns" role="main">

                <div class="row">
                    <div class="small-12 medium-12 large-12 columns">
                        <h1>Libros </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-12 large-12 columns">
                        <p></p>
                         </div>
                </div>




 <?php if( have_rows('libro') ):

						 	// loop through the rows of data
							    while ( have_rows('libro') ) : the_row();

							        // display a sub field value
							        ?>


								

                <div class="row itemBook">
                    <div class="small-12 medium-4 large-4 columns imagenLibro">

                        <img src="<?php the_sub_field('imagen');?>" />
                       
                    </div>
                    <div class="small-12 medium-8 large-8 columns">
                        <H3><?php the_sub_field('titulo');?></H3>
                        <p><?php the_sub_field('sinopsis');?></p>
                        <div class="small-12 medium-8 columns ">
                            <div class="flex-video widescreen equalBook">
                                <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_sub_field('video');?>" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div class="small-12 medium-4 columns panel equalBook mainPanelBooks " style="">
                            <div class="panel bookPricePanel ">
                                <div class="precioSeccion">
             			<div class="priceBookSince">
             				Desde:


             			</div>     
             			 <div class="precioBookTag">
             				<?php the_sub_field('precio_ebook');?>€


             			</div>     
             			  <div class="pricePapel">
             			  		<?php if(get_sub_field('precio_papel')!=''){?>
					Papel: <?php the_sub_field('precio_papel');?>€
					     <?php } ?>


             			</div>                   	
	

                                </div>
                            </div>
                            <div class="panel bookPricedown"
                           	<div class="getITSeccion">
	                                    <div class="row ">
	                                        <div class="small-12 medium-12 large-12 columns">
	                                            <div class="getIt">CONSIGUELO EN:</div>
	                                        </div>
	                                    </div>

                                    <div class="row iconSeccion">
                                        <div class="small-6 medium-6 large-6 columns kolima">
                                        	

                                        	<?php if(get_sub_field('link_kolima')!=''){?>
                                           <a href="<?php the_sub_field('link_kolima');?>" ><img src="//tagmethis.com.ar/wp-content/themes/nl/imagesRoot/kolima.png" /></a>
                                            <?php } ?>


                                        </div>
                                        <div class="small-6 medium-6 large-6 columns">

                                            <div class="row amazon">
                                            	<?php if(get_sub_field('link_amazon')!=''){?>
                                                 <a href="<?php the_sub_field('link_amazon');?>" ><img src="//tagmethis.com.ar/wp-content/themes/nl/imagesRoot/amazon.jpg" /></a>
				     <?php } ?>

                                            </div>
                                            <div class="row ibooks">
                                           	<?php if(get_sub_field('link_ibooks')!=''){?>

                                                <a href="<?php the_sub_field('link_ibooks');?>" > <img src="//tagmethis.com.ar/wp-content/themes/nl/imagesRoot/ibooks.png" /></a>
						  <?php } ?>

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
        <!-- end #main -->

    </div>
    <!-- end #inner-content -->

</div>
<!-- end #content -->
</div>
</div>
<?php get_footer(); ?>

<script>

	$('.equalBook').matchHeight();
</script>

			