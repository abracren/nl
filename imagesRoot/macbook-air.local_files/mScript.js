//check if panel open a
//if panelopen = 1 then close all panels and then open this panel.
var ExpressOpen = 0;
var CursosOpen = 0;
var OnlineOpen = 0;

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

     
$(document).ready(function() {

	 $('.equalBlog').matchHeight();

});
   

jQuery('#main, #cursosSidebar').theiaStickySidebar({
      // Settings
      additionalMarginTop: 80
    });



            // $(function() {
            //     var offset = $(".styckPanel").offset(); //Sets which element is scrollable. In this case it's the div .sidebar
            //     var topPadding = 150;  //Set how much top-padding the element has.
            //     $(window).scroll(function() {
            //         if ($(window).scrollTop() > offset.top) {
            //             $(".styckPanel").stop().animate({   //Sets which element is scrollable. In this case it's the div .sidebar
            //                 marginTop: $(window).scrollTop() - offset.top + topPadding
            //             });
            //         } else {
            //             $(".styckPanel").stop().animate({   //Sets which element is scrollable. In this case it's the div .sidebar
            //                 marginTop: 0
            //             });
            //         };
            //     });
            // });


$('.oooBack').waypoint(function() {
$('.backMenu').toggle();
if(ExpressOpen===1){
           $('.expressDropdown').toggle( "slow");
    ExpressOpen = 0;


}
if(CursosOpen===1){

$('.cusesDropdown').slideToggle( "slow" );
CursosOpen = 0;

}



}, { offset: 0 });



	