var startY = $('.header').offset.top + $('.header').outerHeight();
var startY = 158;

$(window).scroll(function(){
	checkY();
});

//collapses header and logo on scroll
function headerCollapse(){
	$(window).scroll(function(){
		$("nav").addClass("collapsed");
		$(".logo").addClass("logoCollapsed");
		$(".logoText").addClass("logoTextCollapsed");
	});
};

function thumbHide(){
	$("#home .featured .entry-desc").hide();
	$("#home .events .entry-desc").hide();
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
			
function isoFilter(){
	// Isotope setup
	var $container = $('.filter-us').isotope({
		itemSelector: '.thumb',
		layoutMode: 'fitRows'
	});
	// On click, filter whatever is in the data-filter field
	$('#filter').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');
		$container.isotope({ filter: filterValue });
	});
};

$(document).ready(function() {
	$('.btn-group button').click( function() { // Selector Button on/off script
		$(this).addClass('active').siblings().removeClass('active');
	});
	checkY();
	isoFilter();
	thumbHide();
	headerCollapse();
});
