var startY = $('.header').offset.top + $('.header').outerHeight();
var startY = 158;

$(window).scroll(function(){
	checkY();
});

//collapses header and logo on scroll
function headerCollapse(){
	$(window).scroll(function(){
	$(".navbar").animate({
		marginTop: "-54px"
			}, 1000); 
		$(".spacer").animate({
		height: "0"
			}, 1000);
		$(".navbar-collapse").animate({
		paddingTop: "36px"
			}, 1000);
		$(".navbar-toggle").animate({
		paddingTop: "40px"
			}, 1000);
		$(".logo").animate({
			width: "100px",
			}, 1000);
		$(".navbar-header").animate({
			paddingTop: "50px"
			}, 1000);
		$(".logoText").animate({
			fontSize: "14px",
			marginTop: "5px"
			}, 1000);
		$(".nav-share-buttons").hide(1000);
	});
};

function thumbHide(){
	$("#home .featured .entry-desc").hide();
	$("#home .events .entry-desc").hide();
	$("#home .picks .entry-desc").hide();
	$("#home .entry-details").hide();
	$("#home .sharing").hide();
	$("#home .entry-info-wrap").hover(function(){
		$(this).find(".entry-desc, .entry-details, .sharing").show(400);
	}, function(){
		$(this).find(".entry-desc, .entry-details, .sharing").hide(400);
	});
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
	$('#all-events').click( function() { // When the All Events button is clicked, navigate to all events
		window.open("http://localhost/ydh2s.com/category/event/", "_self");
	})
	checkY();
	isoFilter();
	thumbHide();
	headerCollapse();
});

