<?php $countSlid=1;?>

<?php// echo "bla";?>


<div id="owl" class="owl-carousel">

	 <?php $args = array( 'post_type' => 'sliders', 'posts_per_page' => 100,);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();?>
	<?php if(get_field('link')!=''){?>
	<a href="<?php the_field('link');?>">	
	<?php } ?>

		<div class="slid slid-0<?php echo $countSlid?>" style="background:url(<?php the_field('slider-image') ?>);">
			<div class="container-S">
				<div class="caption-wrapper hide-for-small">
					<div class="row roe">
						<div class="carousel-caption <?php the_field('class');?>">
							<div class="medium-6 columns medium-offset-1">
								<?php if( get_field('class')!='Parrafo'){?>
								<h1 class="capTitulo "><?php the_field('caption-tittle') ?></h1>

								<p class="capParrafo "><?php the_field('caption-desc') ?></p>
								<?php }else {?>
								<p class="parrafo capParrafo  hide-for-medium"><?php the_field('caption-desc') ?></p>

								<?php } ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php if(get_field('link')!=''){?>
	</a>
	<?php } ?>
	<?php 
	$countSlid++;
	endwhile;?>
	
	
</div>
