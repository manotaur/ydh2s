// It looks like we're not using this JS file, it should probably be deleted -Brian.


var startY = $('.header').offset.top + $('.header').outerHeight();
var startY = 158;

$(window).scroll(function(){
	checkY();
});

function checkY(){
	if( $(window).scrollTop() > startY ){
		$('.sticky').show();
	}	else{
		$('.sticky').slideUp();
	}
};
			
$( function isoFilter(){
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
});

$(document).ready(function() {
	$('.btn-group button').click( function() { // Selector Button on/off script
		$(this).addClass('active').siblings().removeClass('active');
	});
	checkY();
	isoFilter();
});
