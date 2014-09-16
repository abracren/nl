<?php 
$rows = get_field('cursos_pro','option');
$row_count = count($rows);
//echo $row_count;
//the_field('titulo','option');
?>

    <div class="fullWidth dddBack workDropdown">
        <div class="row">
            <div class="medium-5 medium-centered columns">
                <ul class="medium-block-grid-1 overSlide">
                <?php if( have_rows('cursos_pro','options') ):

                // loop through the rows of data
                    while ( have_rows('cursos_pro','options') ) : the_row();

                        // display a sub field value
                        ?>

                    <li>      <a href="<?php the_sub_field('link');?>">
                        <div class="block">
                            <div class="textBlock  textBlokcursoPremiumFrontPage">
                                <h4 class="cursoPremiumFrontPage"><?php the_sub_field('titulo');?> </h4>
                                <?php the_sub_field('texto_link');?>
                                </br>
                            </div>

                            <div class="textBlock2">
                               
                                
                                <?php the_sub_field('texto');?>
                            </div>


                            <img class="imageBlock" src="<?php the_sub_field('imagen');?>"></img>
                        </div>
                        </a>
                    </li>


                    <?php
                            endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>
                               <?php if($row_count==2){
                        echo '<li></li>';
                    }?>
                                     
                    



                </ul>
            </div>
        </div>

    </div>
