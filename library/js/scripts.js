/*
Joints Scripts File

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
	
	var ExpressOpen = 0;
var CursosOpen = 0;
var WorkOpen = 0;
var OnlineOpen = 0;


$('.buttonReveal').click(function() {
  $('.compraSeccion').toggle( );
  $('.oneMenu').hide();
  console.log('bla');

});



function closePanel(panel){
    $('.'+panel).toggle();
}

//or append to a dropdown div//???? 
//cursos loclahost
$('.cursosDrop').click(function() {
        if(ExpressOpen===1){
            closePanel('expressDropdown');
           // closePanel('onlineDropdown');
           $('.cusesDropdown').toggle( );
                       CursosOpen=1;

            ExpressOpen = 0;

            }else if(WorkOpen===1){
          closePanel('workDropdown');
           // closePanel('onlineDropdown');
           $('.cusesDropdown').toggle( );
                       CursosOpen=1;

            WorkOpen = 0;

         }else{

        
            $('.cusesDropdown').slideToggle( "slow" );
            if(CursosOpen===0){
            CursosOpen=1;
            }else{
                CursosOpen=0;
            }
            }
});

//express localhost
$('.expressDrop').click(function() {
              if(CursosOpen===1){
            closePanel('cusesDropdown');
           // closePanel('onlineDropdown');
           $('.expressDropdown').toggle( );
                       ExpressOpen=1;

            CursosOpen = 0;
            
            }else if(WorkOpen===1){
          closePanel('workDropdown');
           // closePanel('onlineDropdown');
           $('.expressDropdown').toggle( );
                       ExpressOpen=1;

            WorkOpen = 0;


        }else{
            $('.expressDropdown').slideToggle( "slow" );
            if(ExpressOpen===0){
            ExpressOpen=1;
            }else{
                ExpressOpen=0;
            }
            }
            console.log(ExpressOpen);

});

$('.workDrop').click(function() {
              if(CursosOpen===1){
            closePanel('cusesDropdown');
           // closePanel('onlineDropdown');
           $('.workDropdown').toggle( );
                       WorkOpen=1;

            CursosOpen = 0;

        }else if(ExpressOpen===1){
          closePanel('expressDropdown');
           // closePanel('onlineDropdown');
           $('.workDropdown').toggle( );
                       WorkOpen=1;

            ExpressOpen = 0;

         }else{
            $('.workDropdown').slideToggle( "slow" );
            if(WorkOpen===0){
            WorkOpen=1;
            }else{
                WorkOpen=0;
            }
            }
            console.log(WorkOpen);

});

     
$(document).ready(function() {
                //$('.oneMenu').smint();
               $(function () {
    $('.oneMenu').stickyNavbar({
    activeClass: "active",          // Class to be added to highlight nav elements
    sectionSelector: "scrollto",    // Class of the section that is interconnected with nav links
    animDuration: 250,              // Duration of jQuery animation
    startAt: 0,                     // Stick the menu at XXXpx from the top of the this() (nav container)
    easing: "linear",               // Easing type if jqueryEffects = true, use jQuery Easing plugin to extend easing types - gsgd.co.uk/sandbox/jquery/easing
    animateCSS: true,               // AnimateCSS effect on/off
    animateCSSRepeat: true,        // Repeat animation everytime user scrolls
    cssAnimation: "fadeInDown",     // AnimateCSS class that will be added to selector
    jqueryEffects: false,           // jQuery animation on/off
    jqueryAnim: "slideDown",        // jQuery animation type: fadeIn, show or slideDown
    selector: "a",                  // Selector to which activeClass will be added, either "a" or "li"
    mobile: false,                  // If false nav will not stick under 480px width of window
    mobileWidth: 640,               // The viewport width (without scrollbar) under which stickyNavbar will not be applied (due usability on mobile devices)
    zindex: 98,                   // The zindex value to apply to the element: default 9999, other option is "auto"
    stickyModeClass: "sticky",      // Class that will be applied to 'this' in sticky mode
    unstickyModeClass: "unsticky"   // Class that will be applied to 'this' in non-sticky mode
  });
});

    $('.equalBlog').matchHeight();

});
   

jQuery('.fixedSidebarMain, #cursosSidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 80
    });



         
$('.oooBack').waypoint(function() {
//$('.backMenu').toggle();
if(ExpressOpen===1){
           $('.expressDropdown').toggle( "slow");
    ExpressOpen = 0;


}
if(CursosOpen===1){

$('.cusesDropdown').slideToggle( "slow" );
CursosOpen = 0;

}



}, { offset: 0 });

    jQuery(document).ready(function() {
        var owl = jQuery("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade",
    autoPlay : 10000,

  });
   var owl = jQuery("#owl");
 
  owl.owlCarousel({
    navigation : false,
    singleItem : true,
    transitionStyle : "fade",
    autoPlay : 10000,

  });
 
 

});

	
 
}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

/*
 * Load up Foundation
 */
(function(jQuery) {
  jQuery(document).foundation();
})(jQuery);
