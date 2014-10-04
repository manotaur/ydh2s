$(document).ready(function(){

	$(".event-desc").hide();
	$(".entry-details").hide();
	$(".sharing").hide();
	
	$(".entry-info-wrap").hover(function(){
		$(this).find(".event-desc, .entry-details, .sharing").show(400);
	}, function(){
		$(this).find(".event-desc, .entry-details, .sharing").hide(400);
	});
});
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
