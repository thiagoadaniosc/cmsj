$(function(){   
	var navFixed = $('#nav-menu-fixed');
	var navbarNav = $("#navbar-nav-fixed");
	var navImg = $("#nav-img");
	var navItem = $(".nav-item-fixed");
	var buttonScrollTop = $('#button-scroll-top');

	$(window).scroll(function () { 
		if ($(this).scrollTop() > 150) { 
			navFixed.addClass("nav-fixed-show"); 
			navFixed.removeClass("fadeOutUp");
			navFixed.removeClass("fadeOutUp");
			navFixed.addClass("fadeInDown");

			buttonScrollTop.removeClass('fadeOut')
			buttonScrollTop.addClass('fadeIn');
			buttonScrollTop.removeClass('hidden');

		} else { 
			navFixed.addClass("nav-fixed-hide");
			navFixed.removeClass("fadeInDown");
			navFixed.addClass('animated');
			navFixed.addClass("fadeOutUp");

			buttonScrollTop.addClass('fadeOut');
			
		} 
	});  


	

});

function goToTop() {
	$('html,body').animate({
		scrollTop: 0
	}, 700);
	console.log("ola");
}

