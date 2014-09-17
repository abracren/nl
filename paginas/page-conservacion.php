<?php
/*
Template Name: conservacion
*/
?>
<?php



?>
<?php $countSlid=1;?>
<?php get_header(); ?>
<?php get_template_part( 'partials/content', 'headerShadow' ); ?>

<?php 
$rows = get_field('member');
$row_count = count($rows);?>
<?PHP $counttter=0;?>

<div class="cursosMain todosCursos">

<?php //get_template_part( 'partials/content', 'blogindexheader' ); ?>

					

<div id="owl" class="owl-carousel">

<?php if( have_rows('slider') ):

                              // loop through the rows of data
                                  while ( have_rows('slider') ) : the_row();

                                      // display a sub field value
                                      ?>


    <div class="slid slid-0<?php echo $countSlid?>" style="background:url(<?php the_sub_field('slider'); ?>);">
      <div class="container-S">
        <div class="caption-wrapper ">
          <div class="row roe">
            <div class="carousel-caption <?php the_sub_field('class');?>">
              <div class="medium-6 columns medium-offset-1">
                <?php if( get_sub_field('class')!='Parrafo'){?>
                <h1 class="capTitulo"><?php the_sub_field('caption-tittle') ?></h1>

                <p class="capParrafo "><?php the_sub_field('caption-desc') ?></p>
                <?php }else {?>
                <p class="parrafo capParrafo "><?php the_sub_field('caption-desc') ?></p>

                <?php } ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 

   <?php
                                  $countSlid++;

                                  endwhile;

                              else :

                                  // no rows found

                              endif;

                              ?>
 </div>

			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					

                           <?php if( have_rows('seccion') ):

                              // loop through the rows of data
                                  while ( have_rows('seccion') ) : the_row();

                                      // display a sub field value
                                      ?>
                                       <div class="row">
                                       <div class="small-12 medium-8 columns">
                                          <h2><?php the_sub_field('titulo')?></h2>
                                          <?php the_sub_field('mensaje')?>
                                        </div>
                                        <div class="small-12 medium-4 columns">
                                          <?php if(get_sub_field('video')!=''){?>
                                          <div class="flex-video widescreen">
                                            <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_sub_field('video');?>" frameborder="0" allowfullscreen></iframe>

                                          </div>
                                          <?php } ?>
                                        </div>
                                        </div>
                                        


                              <?php
                                  endwhile;

                              else :

                                  // no rows found

                              endif;

                              ?>
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
</div>

<?php get_footer(); ?>

<script  >
  


 jQuery(document).ready(function() {
   
 
 

});
</script>
