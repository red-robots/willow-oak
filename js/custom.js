// JavaScript Document


jQuery(document).ready(function ($) {
	
	
	//   Flexsliders
	// __________________________________________
	
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#slider'
  });
  
  // flexslider 2
  $('#slider').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: true,
    slideshow: true,
    sync: "#carousel"
  });
  
  // front page slider 
	$('.flexslider').flexslider({
		animation: "fade",
		slideshowSpeed: 6000,
		    controlNav: true,
	}); // end register flexslider
	
	
// End Flexsliders

/*
		Tenant Form
__________________________________________
*/
$('.top-nav li.menu-item-351 a').click(function() {
 
    $('.tenant-login').slideToggle(300);
    //$(this).toggleClass('close');
 
});

/*
		FAQ dropdowns
__________________________________________
*/

jQuery(document).ready(function ($) {
	
	
$('.question').click(function() {
 
    $(this).next('.answer').slideToggle(500);
    $(this).toggleClass('close');
 
});

$('.toggle').click(function() {
 
    $(this).next('ul.mobile-listings').slideToggle(500);
    $(this).toggleClass('close');
 
});
	// Equal heights divs
	$('.blocks').matchHeight();
	/*var byRow = $('body').hasClass('test-rows');
		$('.blocks-container').each(function() {
		 $(this).children('.blocks').matchHeight({
			   byRow: byRow
		//property: 'min-height'
		});
	});*/
	
	
});// END ########  END documet ready function
});// END #####################################    END