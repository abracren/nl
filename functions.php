<?php
ob_start();
/*
This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/*********************
INCLUDE NEEDED FILES
*********************/

/*
library/joints.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once(get_template_directory().'/library/joints.php'); // if you remove this, Joints will break
/*
library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
//require_once(get_template_directory().'/library/custom-post-type-accordion.php'); // you can disable this if you like
//require_once(get_template_directory().'/library/custom-post-type.php'); // you can disable this if you like
require_once(get_template_directory().'/library/custom-post-type-cursos.php'); 
require_once(get_template_directory().'/library/custom-fields-cursos.php'); 

/*
library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once(get_template_directory().'/library/admin.php'); // this comes turned off by default
/*
library/translation/translation.php
	- adding support for other languages
*/
// require_once(get_template_directory().'/library/translation/translation.php'); // this comes turned off by default



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

	    function reset_the_date()
{
global $previousday;
$previousday = '';
}
add_image_size( 'thumb_prensaGallery', '300', '390', true );



function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '
    <div class="underPass">
    <div class="passBox"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( " " ) . '
    <label for="' . $label . '">' . "Ingresa la Contraseña:" . ' </label><input name="post_password" id="' . $label . '" class="passFormBox" type="password" size="20" maxlength="20" /><input type="submit" class=" button submitFormPass" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form></div></div>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

function the_title_trim($title) {
	// También puedes usar esta función para los atributos de escape
	$title = attribute_escape($title);
	// Esto busca en el título
	$findthese = array(
		'#Protegido:#', // # esto es solo el delimitador
		'#Privado:#'
	);
	// Con lo que quieres remplazarlo
	$replacewith = array(
		'', // Con lo que remplazas las protegidas
		'' // Con lo que remplazas las privadas
	);
	// Elementos a remplazar con la clave array
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

function my_theme_add_editor_styles() {
    add_editor_style( 'editorStyles/custom-editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

add_action( 'admin_bar_menu', 'curso_link_main', 999 );

function curso_link_main( $wp_admin_bar ) {
	$args = array(
		'id'    => 'curso_online',
		'title' => 'Ingreso Curso Online',
		'href'  => 'http://www.nadandolibre.com/module-1/753/',
		'meta'  => array( 'class' => 'my-toolbar-page' )
	);
	$wp_admin_bar->add_node( $args );
}

function my_translatorr2()
{
  $your_content=ob_get_contents();
  $your_content= preg_replace('/\<label for="user_login"\>(.*?)\<br/',        'Nombre de Usuario: ',$content);
  $your_content= preg_replace('/\<label for="user_pass"\>(.*?)\<br/',        'Clave:',$content);

  ob_get_clean();
  echo $our_content;
}
add_action( 'login_form', 'my_translatorr2' );



// update the '51' to the ID of your form
add_filter('gform_pre_render_11', 'populate_posts');
function populate_posts($form){
    
    foreach($form['fields'] as &$field){
        
        if($field['type'] != 'select' || strpos($field['cssClass'], 'populate-posts') === false)
            continue;
        

      $rows = get_field('locaciones');
      //echo '<pre>';
      //print_r($rows);
        //    echo '</pre>';


        // you can add additional parameters here to alter the posts that are retreieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        //$posts = get_posts('numberposts=-1&post_status=publish');
          //  echo '<pre>';
    //print_r($posts);
///            echo '</pre>';

        // update 'Select a Post' to whatever you'd like the instructive option to be
        $choices = array(array('text' => 'Seleciona una Fecha', 'value' => ' '));
        
        foreach ($rows as $row => &$val) {
        	echo $val[nombre];
        	 $date1 = DateTime::createFromFormat('Ymd', $val[fecha]);
        	$fecha= $date1->format('d/m');
          $choices[] = array('text' => $val[ciudad].'-'.$fecha, 'value' =>  $val[codigo]);
         //  $choices[] = array('text' => $post->post_title, 'value' => $post->post_title);
        
        }
        
        $field['choices'] = $choices;
        
    }
    
    return $form;
}
add_filter('gform_pre_render_12', 'populate_posts2');

function populate_posts2($form){
    
    foreach($form['fields'] as &$field){
        
        if($field['type'] != 'select' || strpos($field['cssClass'], 'populate-posts') === false)
            continue;
        

      $rows2 = get_field('locaciones');
      echo '<pre>';
      //print_r($rows2);
          echo '</pre>';


        // you can add additional parameters here to alter the posts that are retreieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        //$posts = get_posts('numberposts=-1&post_status=publish');
          //  echo '<pre>';
    //print_r($posts);
///            echo '</pre>';

        // update 'Select a Post' to whatever you'd like the instructive option to be
        $choices = array(array('text' => 'Seleciona una Fecha', 'value' => ' '));
        if (is_array($rows2))
{
        foreach ($rows2 as $row => &$val) {
        	//echo $val[nombre];
        	 $date1 = DateTime::createFromFormat('Ymd', $val[fecha]);
        	$fecha= $date1->format('d/m');
          $choices[] = array('text' => $val[ciudad].'-'.$fecha, 'value' =>  $val[codigo]);
         //  $choices[] = array('text' => $post->post_title, 'value' => $post->post_title);
        
        }
        }
        $field['choices'] = $choices;
        
    }
    
    return $form;
}









/*********************
MENUS & NAVIGATION
*********************/
// registering wp3+ menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);

// the main menu
function joints_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// the footer menu (should you choose to use one)
function joints_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// this is the fallback for header menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// this is the fallback for footer menu
function joints_footer_links_fallback() {
	/* you can put a default here if you like */
}


//////////////////////////////////////////////////////




/*********************
SIDEBARS
*********************/

// Sidebars & Widgetizes Areas
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/*********************
COMMENT LAYOUT
*********************/

// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'jointstheme'), get_comment_author_link()) ?> el
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' j \d\e\ F \d\e\ Y \|\ g:i a', 'jointstheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'jointstheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'jointstheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

?>


