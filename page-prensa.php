<?php
/*
Template Name: Prensa
*/
?>
<?php



?>
<?php get_header(); ?>
<?php get_template_part( 'partials/content', 'headerShadow' ); ?>

<?php 
$rows = get_field('member');
$row_count = count($rows);?>
<?PHP $counttter=0;?>

<div class="cursosMain">

<?php //get_template_part( 'partials/content', 'blogindexheader' ); ?>

<div class="fullWidth oooBack2"> 
								
</div>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					<ul class="small-block-grid-2 medium-block-grid-3">
				 <?php $args = array( 'post_type' => 'prensa', 'posts_per_page' => 10000 );
                              

                              $loop = new WP_Query( $args );
                              while ( $loop->have_posts() ) : $loop->the_post();
                             echo' <li>';

                               echo'<div class="buttonPress">';
                                             echo'<div class="picturePress">';
                                           
                                                        if ( has_post_thumbnail() ) {
                                                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                        echo '<a rel="lightbox" href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
                                                       $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumb_prensaGallery' );
                                                        $url = $thumb[0]; 
                                                        echo  '<img style=""src="'. $url.'" alt="' . the_title_attribute( 'echo=0' ) . '" width="100%"/>';
                                                
                                                      
                                                        echo '</a>';

                                              echo '</div>';?>
                                              <a href="<?php the_permalink(); ?>">
                                            <?php
                                              echo'<div class="captionPress">';
                                              echo'<h5>';
                                                        the_title();
                                                          echo'</h5>';                                          
                                                          echo'<p class="masinfoPress">'; ?>
                                                        MÁS INFO
                                                         <?php echo'</p>';
                                                       // the_excerpt();
                                               echo '</div>';
                                               echo '</a>';
                                  echo '</div>';

                                }
                                echo  ' </li>';         
                            
                         endwhile;?>

                          </ul>
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
</div>

<?php get_footer(); ?>
