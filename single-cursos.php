<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
<div class="singleCursos">
	  <div class="backMenu" style=""></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	  <?php// get_template_part( 'partials/content', 'blogheader' ); ?>
	  <?php //get_template_part( 'partials/content', 'cursoheader' ); ?>
	  <?php get_template_part( 'partials/content', 'cursoheaderImagen' ); ?>
<div class="fullWidth videoBack2">
<div class="row ">
	<div class="small-9 small-centered columns videoTop">
<div class="flex-video widescreen">
	        <iframe width="560" height="315" src="//www.youtube.com/embed/<?php the_field('video_cabecera');?>" frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>

<?php

$rows = get_field('seccion');
$row_count = count($rows);
//echo $row_count;
//the_field('titulo','option');
$widthher = 100/$row_count;
if($row_count>8){
	$fontSize=.7;
}else{
	$fontSize=.8;
}
?>


			<div class="fullWidth oooBack oneMenu  hide-for-small hide-for-medium">
				<div class="row">
			

		
	  <div class="magellanContainer  " >

	  	<ul class=" small-block-grid-1 medium-block-grid-<?php echo  $row_count;?>">
	    <?php if( have_rows('seccion') ):

 	// loop through the rows of data
	    while ( have_rows('seccion') ) : the_row();

	        // display a sub field value
	        ?>
	        	<?php $link =sanitize_title(get_sub_field('titulo_menu'),true);?>
	        	<li  style="width:<?php echo $widthher;?>%;font-size:<?php echo $fontSize;?>em">
	        		<a href="#<?php echo $link?> " ><?php the_sub_field('titulo_menu')?></a>
	        	</li>


	<?php
	    endwhile;

	else :

	    // no rows found

	endif;

	?>

	<ul>


</div>
</div>
</div>

			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class=" fixedSidebarMain large-8 medium-8 columns first clearfix equalBlog" role="main">
					
					
					    	<?php get_template_part( 'partials/content', 'curso' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
					</div> <!-- end #main -->
    
					<?php get_sidebar('cursos'); ?>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->
			</div> <!-- end #content -->
<!-- 			<div class="fullWidth dddBack">
			<div class="row">
			  <div class="small-12 medium-12 large-12 columns videoBottomFlow">
			  	<div class="row">
			  	  <div class="small-12 medium-4 large-4 columns">
			  	  	<div class="flex-video widescreen">
	        <iframe width="560" height="315" src="//www.youtube.com/embed/dTHk84u_rpk" frameborder="0" allowfullscreen></iframe>
</div>
			  	  </div>
			  	   	  <div class="small-12 medium-4 large-4 columns">
			  	  	<div class="flex-video widescreen">
	        <iframe width="560" height="315" src="//www.youtube.com/embed/QWB9k8wkcGk" frameborder="0" allowfullscreen></iframe>
</div>
			  	  </div>
			  	   	  <div class="small-12 medium-4 large-4 columns">
			  	  	<div class="flex-video widescreen">
	        <iframe width="560" height="315" src="//www.youtube.com/embed/_GslRkpUmCQ" frameborder="0" allowfullscreen></iframe>
</div>
			  	  </div>
			  	  
			  	</div>
			  </div>
			</div>
			</div> -->
			<?php the_field('contenido_extra');?>
	</div>		
<?php get_footer(); ?>

<script type="text/javascript">
$(document).ready(function(){
	$(document).scrollTop(0);
});
$('#closeButton').foundation('reveal', 'close');
$(".cDiv").hide();
$("select#input_11_5").change(function() {
	//console.log('change');
            var _div_id = $(this).val();
            $(".cDiv").hide();
            var endDiv = ('#'+_div_id)
            //console.log(endDiv);

            $(endDiv).toggle();
        }); 


$(document).foundation();

</script>