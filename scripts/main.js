
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

			$(document).ready(function() {
				$('#photo-sel').carouFredSel({
					auto: false,
					pauseOnHover: true,
					items: 5,
					prev: '#prev2',
					next: '#next2',
					mousewheel: true,
					scroll : {
						items           : 2,
						duration        : 200,                         
						pauseOnHover    : true
					},
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
				checkY();
			});