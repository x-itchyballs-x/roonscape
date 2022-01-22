$(document).ready(function() {
	// Loader 
	$(window).on("load", function () {
		$(".loader").fadeOut();
		$("body").removeClass("overflow-hidden");
		
		Window > 1024
		if ($(window).width() > 1024) {
	        wow = new WOW({});
	        wow.init();
	    }
	});

    // Menu Mobile
	var menuMobileButton = '.menu-mobile';
	var menuMobileOptions = 'header nav';
	var menuMobileLink = 'header nav a';

	$(document).on('click', menuMobileButton, function () {
		$(this).toggleClass('active');
		$(menuMobileOptions).toggleClass('active');
		//$('body').toggleClass('overflow-hidden');
	});
	$(document).on('click', menuMobileLink, function () {
		$(menuMobileButton).removeClass('active');
		$(menuMobileOptions).removeClass('active');
		//$('body').removeClass('overflow-hidden');
	});

    // Anchors Navigation
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();

		var url = $(this).attr('href');
		var cuttedUrl = url.substr(url.indexOf("#") + 1);

		$('html, body').animate({
			scrollTop: $('#'+cuttedUrl).offset().top
		}, 500);
	});
	
    // Scroll anchor classes
    $(window).scroll(function() {
        var winTop = $(window).scrollTop() + 91;

		var oneH = $('#home').offset().top; 
		var twoH = $('.about').offset().top; 
		var treeH = $('.playtoearn').offset().top; 
		var fourH = $('.rsgcoin').offset().top; 
		var fiveH = $('.roadmap').offset().top; 
		var sixH = $('.purchase').offset().top; 

		if (winTop >= oneH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(1) a').addClass('active');
		}
		if (winTop >= twoH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(2) a').addClass('active');
		}	
		if (winTop >= treeH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(3) a').addClass('active');
		}	
		if (winTop >= fourH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(4) a').addClass('active');
		}	
		if (winTop >= fiveH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(5) a').addClass('active');
		}	
		if (winTop >= sixH){
        	$('header nav ul li a').removeClass('active');
			$('header nav ul li:nth-child(6) a').addClass('active');
		}	
    });
});