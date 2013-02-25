;jQuery.noConflict();

//Variables
var window_width = -1; //Used to work out maximum width of page
var window_height = -1; //Used to work out maximum height of page
var page_padding = 10; //Padding around edges of page
var main_page_index = 0; //Start at 0;
var current_main_page = "home";
var gallery_direction = "none"; //Used to calculate which direction we are moving on the page

var home = jQuery("#home");
/*var backgrounditems = jQuery("#home .background-image");
var maxbackgrounds = backgrounditems.length;
var navigationitems = jQuery(".navigation-item");*/

/* Elements */

jQuery(document).ready(function($)
{
	//Start script here
	//initNavigation($, navigationitems);
	//initBackground($, backgrounditems);

	$('#navigation-buttons li a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
	});
});

jQuery(window).load(function()
{
	var $ = jQuery;

	//Window Data
	window_width = $(window).width();
	window_height = $(window).height();
	padding = 10;
	$(home).data('loaded', false);
	ResizeAllPages($, ".main-page", -1, window_height, 0);
	ResizeAllPages($, ".parallax-layer", -1, window_height, 0);
	ResizeAllPages($, ".parallax-viewport", window_width, window_height, 0); 
	ResizeAllPages($, ".resizeheight", -1, window_height, 0);
	//ResizeAllPages($, "[class^='container']", -1, window_height, 0);

	//Loading of page resize things we need to and update page
	//Resize all pages
	//ResizeAllPages($, ".page", window_width, window_height, padding);
	
	/*ResizeAllPages($, ".layer", -1, window_height, 0);
	//ResizePage($, ".background-slider-static", window_width, window_height, padding);
	/*MovePageController($, "#" + current_main_page, 
					GetPageWidth($,"#" + current_main_page),
					100, null);*/

	//Attach window resize functionality
	$(window).resize(function(){
		window_width = GetWindowWidth($);
		window_height = GetWindowHeight($);

		//Resize all pages
		ResizeAllPages($, ".main-page", -1, window_height, 0);
		ResizeAllPages($, ".parallax-layer", -1, window_height, 0);
		ResizeAllPages($, ".parallax-viewport", window_width, window_height, 0);
		ResizeAllPages($, ".resizeheight", -1, window_height, 0);
		//ResizeAllPages($, "[class^='container']", -1, window_height, 0);
		//ResizeAllPages($, ".page", window_width, window_height, padding);
		//ResizePage($, ".background-slider-static", window_width, window_height, padding);
		/*MovePageController($, "#" + current_main_page, 
					GetPageWidth($,"#" + current_main_page),
					100, null);*/
	});
});


/* extra functions */
function ResizeAllPages($, page, width, height, padding)
{
	//grabs the div tag page, and resizes it to what the window size is
	var pages = $(page);

	$.each(pages, function(index, value)
	{
		ResizePage($,$(value),width, height, padding);
	});
}

/*function ResizePageWithMaxHeight($, page, width, height, padding)
{
	var padded_width = width - (padding * 2);
	var height = 100
}*/

function ResizePage($, page, width, height, padding)
{
	//Work out padding for width and height
	var padded_width = width - (padding * 2);
	var padded_height = height - (padding * 2);

	if(width != -1)
	{
		$(page).width(padded_width);
	}

	if(height != -1)
	{
		$(page).height(padded_height);
	}
}

function GetWindowWidth($)
{
	return $(window).width();
}

function GetWindowHeight($)
{
	return $(window).height();
}

function GetPageWidth($, page_id)
{
	return $(page_id).width();
}

function GetPageHeight($, page_id)
{
	return $(page_id).height();
}

function FindIndexOfPage($, pagename)
{
	//This function finds which index the element is according to its parent
	var object = $(pagename);
	var index = $(".page").index(object);
	return (index - 1); //subtract one to get true index
}

/* Sliding functionality */
function MovePageController($, pagename, amount, speed, completefunction)
{
	var index = FindIndexOfPage($, pagename);
	amount = (amount * index) * -1;

	$("#page_controller").animate({
		left : amount
	},
	speed, 'linear', function(){
		pagename = pagename.replace('#','');
		current_main_page = pagename;
		PageCompleteSlide($, current_main_page);
	});

}

function PageCompleteSlide($, current_page_name)
{
	//////console.log('complete');
	var current_page = current_page_name;
	//Check when page has moved, and load images accordingly
	//////console.log(current_page);
	switch(current_page)
	{
		case "home":
		break;
	}
}
