// DOM Ready 
var courseDetails = jQuery('#tab-container'),
paymentContainer = jQuery('#payment-container'),
formButton = jQuery('#fillForm'),
enrolmentWrap = jQuery('#enrolmentWrap.contact-form-wrap'),
gravityForm = jQuery('body.foxyshop .paymentPage').find('div#payment-container');


function twitterfix() {

    if(typeof jQuery("#twitter-widget-0").contents().find(".load-more").html() == 'undefined') {
        setTimeout(twitterfix, 500);
        }
    else {
        var head = jQuery("#twitter-widget-0").contents().find("head");
        head.append('<link type="text/css" rel="stylesheet" href="http://www.weddingandeventinstitute.com/aawep2014/wp-content/themes/aawep/assets/css/twitter.css">');
        head.append('<style>.h-entry.tweet.with-expansion.customisable-border {border-bottom: 1px solid #EFEEEE;}</style>');
       // head.append('<script type="text/javascript">window.setTimeout(function(){ document.location.reload(true); }, 60000); </script>');
        }
}



jQuery(document).ready(function(jQuery) {  

  twitterfix();


jQuery("#vsTable_62015 tr").eq(0).addClass('table-header');
jQuery("form").attr('novalidate','novalidate');




jQuery("input[type='checkbox']").addClass('styled-checkbox');
jQuery('#menu-main-navigation-1 li.menu-item-55 a').click(
  function(e) {
  e.preventDefault();
  }
);

jQuery('.affiliate-signup form').validate({
  rules: {
    username: {
      required: true,
      email: true
    }
  }
});

jQuery(".affiliate-signup input[type='text'], .affiliate-signup select, .affiliate-signup textarea").addClass('form-control');
jQuery(".input").addClass('form-control');

jQuery(".fc_text, .medium").addClass("form-control");

// jQuery(".pensylvania-state-university #tab-container li.:nth-child(2), 
//   .pensylvania-state-university #tab-container li.tab:nth-child(3), .pensylvania-state-university  #tab-container li.tab:nth-child(4)").css('display', 'none');

// jQuery( "input:not(:checked) + span" ).css( "background-color", "yellow" );

jQuery( ".pensylvania-state-university #tab-container .etabs li:not(:first-child)" ).css( "display", "none" );
jQuery( ".south-western-career-academy #tab-container .etabs li:not(:first-child)" ).css( "display", "none" );



jQuery('#tab-container .video-container').wrap("<div class='wrap-all-div' />");
jQuery('.accredited-special-event-designer-master-course #tab-container .col-md-3, .accredited-wedding-planner-master-course #tab-container .col-md-3').removeClass('col-md-3').addClass("col-md-4");





$('#video-trigger').click(function(e) {
  e.preventDefault();
  $('.parent-pageid-1830 .wei-live').fadeOut();
})

jQuery(".gform_wrapper iframe").unwrap();

 jQuery('.enrollment-links a.back').click(function(){
        parent.history.back();
        return false;
    });
  
  
// site preloader -- also uncomment the div in the header and the css style for #preloader


});




// NAV ANIMATED

var navDuration = 150; //time in miliseconds
 
 jQuery('#menu-main-navigation-1 li a').hover(function() {
          jQuery(this).animate({ paddingLeft : "35px" }, navDuration);            
      }, function() {
          jQuery(this).animate({paddingLeft : "30px" }, navDuration);
      });
    
    
// FORM SUBMISSION GRAVITY FORM
jQuery(document).on('gform_confirmation_loaded', function(e, form_id){
if(form_id == 1 || form_id == 6  ) {
paymentContainer.fadeIn();
enrolmentWrap.css('display','none');
}
});



// FORM PAYPAL

jQuery(".paypalCheck").click(function (e) {
                
                var all_answered = true;
                //Selecting Each radio button
                jQuery("input:radio").each(function () {
                    var name = jQuery(this).attr("name");
                    //Checking whether radio button is selected and based on selection setting variable to true or false
                    if (jQuery("input:radio[name=" + name + "]:checked").length == 0) {
                        all_answered = false;
                    }
                });
                //Show the error message to user if all questions are not answered
                if (all_answered == false) {
          e.preventDefault();
                    alert('You need to select a payment option');
                }
            })
      
      

jQuery(function() {

jQuery('.gfield_select option').eq(0).attr('disabled','disabled');


/*
    Solution posted by John :: http://stackoverflow.com/users/1420197/john
    =====================================
    http://stackoverflow.com/questions/5404839/how-can-i-refresh-a-page-with-jquery/17259514#17259514
    
    Follow me on Github: https://github.com/IonicaBizau

*/

var solutions = [
    function () { location.reload(); },
    function () { history.go(0); },
    function () { location.href = location.href; },
    function () { location.href = location.pathname; },
    function () { location.replace(location.pathname); },
    function () { location.reload(false); },
];

jQuery("[data-func]").on("click", function () {
    solutions[parseInt(jQuery(this).attr("data-func"))]();
});




 jQuery('iframe').each(function() {
        jQuery(this).attr('src', jQuery(this).data('src'));
    });
  
  
// SHOW GRAVITY FORM ON BTN CLICK
// jQuery('form.foxyshop_product').attr('target','_blank');

formButton.click(function(e) { 
e.preventDefault();
courseDetails.remove();
window.scroll(0, 600);
jQuery('div#enrolmentWrap').fadeIn();

}
);


jQuery('#tab-container').easytabs({animate: false});
jQuery('#payment-container').easytabs({animate: false});



// TABBED NAV




jQuery("table").addClass("table table-striped");
jQuery("form").addClass("form-inline");

jQuery(".fc_text, .medium").addClass("form-control");
jQuery("label").addClass("control-label");


  // SVG fallback
  // toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
  
  /* if (!Modernizr.svg) {
    var imgs = document.getElementsByTagName('img');
    for (var i = 0; i < imgs.length; i++) {
      if (/.*\.svgjQuery/.test(imgs[i].src)) {
        imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
      }
    }
  }
*/


});









jQuery(document).ready(function () {

 jQuery('li.required input').addClass('required');
jQuery("input.required").prop('required',true);
/*
jQuery("#gform_1").validate(

{

rules: {
input_1: "required",    
input_2: "required",

},

messages: {
input_1: "Please Enter a Company Name",
input_2: "Please Enter Your First Name",

},

submitHandler: function(form2){
jQuery(form2).ajaxSubmit({
success: function() { 
  
  jQuery('#payment-container').fadeIn();
  jQuery('#enrolmentWrap.contact-form-wrap').hide();


} 
}); 
}
    
    
}


);
*/

if ( jQuery( "#gform_confirmation_wrapper_1").is( ".gform_confirmation_wrapper" ) ) {
  jQuery("#tab-container").hide();
  paymentContainer.fadeIn();
  enrolmentWrap.hide();
 
}

// jQuery("#gform_1").validate();


/*

    
var courseDetails = jQuery('#tab-container'),
paymentContainer = jQuery('#payment-container'),
enrolmentWrap = jQuery('#enrolmentWrap.contact-form-wrap');
  
var validInput = jQuery('input.required-field');


jQuery('#gform_1').submit(function() {
    var errors = 0;
    validInput.map(function(){
         if( !jQuery(this).val() ) {
              jQuery(this).addClass('error');
              errors++;
        } else if (jQuery(this).val()) {
              jQuery(this).removeClass('error');
        }   
    });
    if(errors > 0){
       alert('Fields Rquired');
        return false;
    }
  alert('Success');
  return true;
});
*/



/*
jQuery('#gform_1').on(  'submit', function(e) {


    // check validation
  if (jQuery(validInput).val() =='' ) {
    validInput.addClass('error');
    alert('Please enter required fields');
    return false;
    }
  
  
  else if (jQuery(validInput).val() > 5 ) {
    validInput.removeClass('error');

    }

  alert('Success');
  paymentContainer.fadeIn();
  enrolmentWrap.hide();

  return true;

  
});

*/


/*


jQuery('li.gfield_contains_required input').addClass('required');

jQuery('#gform_1').submit(function() {
    var errors = 0;
    jQuery("#gform_1 input").map(function(){
         if( !jQuery(this).val() ) {
              jQuery(this).addClass('error');
              errors++;
        } else if (jQuery(this).val()) {
              jQuery(this).removeClass('error');
        }   
    });
    if(errors > 0){
       alert('Fields Rquired');
        return false;
    }
    // do the ajax..    
});



jQuery('li.gfield_contains_required input').addClass('required-field');
    
var courseDetails = jQuery('#tab-container'),
paymentContainer = jQuery('#payment-container'),
enrolmentWrap = jQuery('#enrolmentWrap.contact-form-wrap');
  
var validInput = jQuery('input.required-field');



*/


 

jQuery('.foxyshop_addon_container').prepend('<p class="full-width"><strong>ADDITIONAL PRODUCTS:</strong></p>')


jQuery("a[title='Logout']").addClass('logout-link');


  
jQuery('select.variation-payment-plan-options, .variation-select-the-amount-of-hours, select.variation-payment-plans,  .foxyshop_quantity').addClass('form-control');

  jQuery('#gform_wrapper_2').addClass('container');


jQuery('#myTab a').click(function (e) {
e.preventDefault()
jQuery(this).tab('show')
});






var positiveMargin = false;

jQuery('#display-nav').click(function () {

 if(jQuery(window).scrollTop() > 300 ) {
       jQuery('html,body').animate({ scrollTop: jQuery('body').offset().top }, 'slow').delay(700);
       // getData();
   }
   
   

    if (!positiveMargin) {
        var marginLeft = "225px";
        positiveMargin = true;
    }
    else {
        var marginLeft = "0px";
        positiveMargin = false;
    }
     jQuery('#sidebar-links').animate({
               marginLeft: marginLeft
               }, {
               duration: 1000,
               specialEasing: {
               marginLeft: 'easeOutBounce'
               },
               complete: function () {
               }
             });
 });
 
 
jQuery('div.answer' ).hide();

jQuery('div.answer').eq(0).show();

jQuery('h3.question').click(function() {
   jQuery(this).next().animate( 
      {'height':'toggle'}, 'slow', 'easeOutBounce'
);
});
  
  
  
  
 jQuery('.close-btn').click(
 function() { 
 jQuery(this).parent().fadeOut();
 }) 
 
 
 // This is a functions that scrolls to #{blah}link


jQuery('#scroll-lower').click(function(e) { 
e.preventDefault();
jQuery('html,body').animate({ scrollTop: jQuery('.online-chat').offset().top }, 'slow');
});

  jQuery('.launch-window').click(function(e) {
    e.preventDefault();
    var id = '#post-' + jQuery(this).attr("href");
  jQuery('html,body').animate({ scrollTop: jQuery('.online-chat.top-area').offset().top }, 'slow');
  jQuery(id).delay(400).fadeIn();     
});


  
  


 
/*jQuery('#display-nav').click( function() {
        var toggleWidth = jQuery("#sidebar").width() == 225 ? "0" : "225px";
    
    jQuery('#sidebar').animate({ width: toggleWidth });
    });
  */

    jQuery('iframe[src*="youtube.com"], iframe[src*="viddler.com"]').wrap("<div class='video-container' />");
});