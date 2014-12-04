$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();

$("input[type='text']").addClass('form-control');

    $("li.comment-make a").click(function(e){

		  e.preventDefault();
		  $( ".comment-wrap" ).slideToggle( "slow");
    });

    $('iframe').parent().addClass('video-container');

    $('.comment-meta').after('<br>');

 $( "#menu-main-navigation a:contains('Business')" ).click(
	  
	  function() {
	   document.location.href='category/business-advice/';
	   })
	  ;



	  
	  



});

/* 
$(window).load(function () {
    
    $('.medium-col img').each(function (idx, item) {
        var screenImage = $(this);

        // Create new offscreen image to test
        var theImage = new Image();
        theImage.src = screenImage.attr('src');

        // Get accurate measurements from that.
        var imageWidth = theImage.width;

        // Find post width
        var postWidth = screenImage.parent().innerWidth() / 2;
        
        if (imageWidth > postWidth) {
            $(item).addClass('large');
        } else {
            $(item).addClass('small');
        }
    });
});

*/