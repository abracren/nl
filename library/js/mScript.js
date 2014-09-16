//check if panel open a
//if panelopen = 1 then close all panels and then open this panel.
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



	