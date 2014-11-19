var startY = $('.header').offset.top + $('.header').outerHeight();
var startY = 158;

$(window).scroll(function(){
	checkY();
});

//collapses header and logo on scroll, expands if user scrolls to top
function headerChange(){
	$(window).scroll(function(){
		if ($(window).width() > 768) {
			if ($("nav").hasClass("expanded-header") && ($(window).scrollTop() > 50)){
				$(".navbar").animate({
					marginTop: "-54px"
					}, 1000); 
					$(".spacer").animate({
					height: "63px"
					}, 1000);
				$(".navbar-toggle").animate({
					paddingTop: "55px"
					}, 1000);
				$(".navbar-nav").animate({
					paddingTop: "20px"
					}, 1000);
				$(".logo").animate({
					width: "100px",
					}, 1000);
				$(".navbar-header").animate({
					paddingTop: "60px"
					}, 1000);
				$(".logotext").hide();
				$(".nav-share-buttons").hide(1000);
				$("nav").removeClass("expanded-header");
				$("nav").addClass("collapsed-header");
			} else if ($("nav").hasClass("collapsed-header") && ($(window).scrollTop() < 50)){
				$(".navbar").animate({
					marginTop: "0"
					}, 1000); 
				$(".spacer").animate({
					height: "117px"
					}, 1000);
				$(".navbar-toggle").animate({
					paddingTop: "0px"
					}, 1000);
				$(".navbar-nav").animate({
					paddingTop: "0px"
					}, 1000);
				$(".logo").animate({
					width: "220px"
					}, 1000);
				$(".navbar-header").animate({
					paddingTop: "0px"
					}, 1000);
				$(".logotext").show(1000);
				$(".nav-share-buttons").show(1000);
				$("nav").removeClass("collapsed-header");				
				$("nav").addClass("expanded-header");
			}
		}
	});
};

//this function makes sure the proper CSS is maintained for elements in the header
//if a user resizes the browser after the header expands/collapses on scroll:
function checkWindowResize(){
	$(window).resize(function() {
		if ($(window).width() < 768){
			$(".logo").css( "width", "100px" );
			$(".logotext").css( "display", "none" );
				if ($("nav").hasClass("collapsed-header")){
					$(".navbar").css("height", "117px");
				} 
		} else if ($(window).width() > 768 && $("nav").hasClass("expanded-header")){
			$(".logo").css( "width", "220px" );
			$(".logotext").css( "display", "block" );		
		}
	});
};

function thumbHide(){
	$("#home .featured .entry-desc").hide();
	$("#home .events .entry-desc").hide();
	$("#home .picks .entry-desc").hide();
	$("#home .entry-details").hide();
	$("#home .sharing").hide();
	if ($(window).width() > 1024){
	$("#home .entry-info").hover(function(){
		$(this).find(".entry-desc, .entry-details, .sharing").show(400);
	}, function(){
		$(this).find(".entry-desc, .entry-details, .sharing").hide(400);
	});
	}
};

//this makes sure modals are as wide as the images they contain:
function modalWidth(){
	$(".modal").each(function(){
		var $width = $(".modal-body", this).find("img").width();
		$(".modal-dialog", this).css("width", $width);
	});
};

//Neighborhood & Price fields were overlapping on iPhone5 and older in portrait, so this puts the price field on its own line:
function priceOnMobile(){
	if ($(window).width() < 320){
		$(".price").removeClass("col-xs-2").addClass("col-xs-12");
	}
};

function checkY(){
	if( $(window).scrollTop() > startY ){
		$('.sticky').show();
	}	else{
		$('.sticky').slideUp();
	}
};

function filterState(){ // Selector Button on/off script
	$(this).addClass('active').siblings().removeClass('active');
}
			
function isoFilter(){
	// Isotope setup
	var $container = $('.filter-us').isotope({
		itemSelector: '.thumb',
		layoutMode: 'fitRows'
	});
	// On click, filter whatever is in the data-filter field
	$('#filter').on( 'click', 'a', function() {
		var filterValue = $(this).attr('data-filter');
		$container.isotope({ filter: filterValue });
		$(this).closest('.btn-group').removeClass('open');
		return false;
	});
};

$(document).ready(function() {
	$('.btn-group button').click( function() {
		filterState();
	});
	$('.mc4wp-alert').click(function() {
		$('.mc4wp-alert').fadeOut("slow");
	})
	$('#all-events').click( function() { // When the All Events button is clicked, navigate to all events
		window.open("category/event/", "_self");
	})
	checkY();
	isoFilter();
	thumbHide();
	headerChange();
	checkWindowResize();
	modalWidth();
	priceOnMobile();
});

