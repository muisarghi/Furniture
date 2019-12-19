//flexslider
$(document).ready(function() {
    $('.flexslider').flexslider({
          //animation: "slide",
          //controlsContainer: ".flex-container"
		 // directionNav: false,
			   //start: function(slider){
          //$('body').removeClass('loading');
        //}
		animation: "slide",
		directionNav: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
			
    });
  });


//
  $(function(){
      $("#slider").slides({
        effect: 'slide, fade',
		generateNextPrev: false

      });
    });