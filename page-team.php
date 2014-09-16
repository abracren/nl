<?php
/*
Template Name: Team
*/
?>
<?php



?>
<?php get_header(); ?>
<div class="teamPage">
<?php get_template_part( 'partials/content', 'headerShadow' ); ?>

<?php 
$rows = get_field('member');
$row_count = count($rows);?>
<?PHP $counttter=0;?>
<?PHP $counttter2=0;?>

<div class="cursosMain">

<?php //get_template_part( 'partials/content', 'blogindexheader' ); ?>

<div class="fullWidth oooBack2"> 
								
</div>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<div class="row ">
        <div class="small-12 medium-12 large-12 columns">
<H1>Equipo</H1>
<p></p>

      </div>
        <div class="row hide-for-small">
            <div class="small-12 small-centered columns">

                <ul class="medium-block-grid-<?php echo $row_count; ?>">
                	  <?php if( have_rows('member') ):

						 	// loop through the rows of data
							    while ( have_rows('member') ) : the_row();

							        // display a sub field value
							   

							        ?>
							          <li>
                        <div class="botonC2">
                            <div class="captionH2 captionRoll2" >
                                <h4>
                                    <?php the_sub_field('nombre');?>
                                    
                                    
                               
                                </h4>
                              <h6>  <?php the_sub_field('tarea');?></h6>
                                <p class="teamBioP">
                                   <?php the_sub_field('bio');?>
                                </p>
                                 <div class="contactoButton">
                                 <a href="#" class="button tiny" data-reveal-id="contacto<?php echo $counttter;?>">Contacto</a>
		</div>
                            </div>
                            <div class="figure2 avatar-frame,">
                                  <img src="<?php the_sub_field('imagen');?>" width="100%" alt="  <?php the_sub_field('nombre');?>"/>
                            </div>
                        </div>
                    </li>
							        <?php
							        $counttter++;
								    endwhile;

								else :

								    // no rows found

								endif;

								?>
                
                  
                </ul>





                <p></p>
	<p></p>
            </div>
        </div>



        <!-- SMALL -->
        <!-- SMALL -->
        <!-- SMALL -->
        <!-- SMALL -->


        <div class="row show-for-small">
            <div class="small-12 columns">

                	  <?php if( have_rows('member') ):

						 	// loop through the rows of data
							    while ( have_rows('member') ) : the_row();

							        // display a sub field value
							   

							        ?>
							        <?php if($counttter2==1 || $counttter2 == 3){?>
							        <div class="row" style="background-color:#ddd;padding: 30px 10px;margin-bottom:0px;">
							         
							          	<?php }else{?>
							         <div class="row" style="background-color:#eee;padding: 30px 10px;margin-bottom:0px";>
							        <?php  } ?>
							         <div class="small-12 columns" >
							          	<h1 class="">
						                                  <img src="<?php the_sub_field('imagen');?>" width="100%" alt="  <?php the_sub_field('nombre');?>"/>
						                            </h1>
						                        
						                                  <h4>  <?php the_sub_field('nombre');?>  </h4>
						                              <h6>  <?php the_sub_field('tarea');?></h6>
						                                <p >
						                                   <?php the_sub_field('bio');?>
						                                </p>
						                        
						                            
						                        </div>
						                        </div>
						                   
						                   
							        <?php
							        	$counttter2++;

								    endwhile;

								else :

								    // no rows found

								endif;

								?>
                
                  





                <p></p>
	<p></p>
            </div>
        </div>




<!-- SMALL END -->
<!-- SMALL END -->
<!-- SMALL END -->

     <!--   <div class="row">
          <div class="small-12 medium-6 large-6 columns paddedTeam">
<H2><?php the_field('titulo_'); ?></H2>        




<?php the_field('texto'); ?>

            
            
          </div> 
          <div class="small-12 medium-6 large-6 columns">
            <div class="avatar-frame">
             <img src="<?php the_field('imagen'); ?>" width="100%"/>
           </div>
            
          </div>
        </div>


        <p></p>-->
        <div class="row">
          <div class="small-12 medium-12 large-12 columns">
          	<div class="panel">
            <?php the_field('recuadro'); ?>

            </div>
          </div>

        </div>

        <div id="contacto1" class="reveal-modal" data-reveal>
  contacto
</div>
        <div id="contacto2" class="reveal-modal" data-reveal>
  contacto
</div>
        <div id="contacto3" class="reveal-modal" data-reveal>
  contacto
</div>
        <div id="contacto4" class="reveal-modal" data-reveal>
  contacto
</div>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
</div>
</div>
<?php get_footer(); ?>
