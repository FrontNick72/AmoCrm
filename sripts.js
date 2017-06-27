$(document).ready(function(){
				var touch = $('.logo_btn') ;
				var menu = $('.info');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
					$(".side_menu").toggleClass('click');
				});
				
			});
			$(document).ready(function(){
				var touch = $('.set') ;
				var menu = $('.settings');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();

				});
				
			});
			$(document).ready(function(){
				var touch = $('.btn_menu_settings') ;
				var menu = $('.settings');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.hide();
				});
				
			});
			$(document).ready(function(){
				var touch = $('.prod');
				var menu = $('.products');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();

				});
				
			});
			$(document).ready(function(){
				var touch = $('.btn_menu_products') ;
				var menu = $('.products');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.hide();
				});
				
			});
			$(document).ready(function(){
			$(".side_menu ul li").click(function(e) {
			  e.preventDefault();
			  $(".side_menu ul li").removeClass('active');
			  $(this).addClass('active');
			});
			});