$(document).ready(function () {
	$(window).scroll(function () {
		if ($(window).scrollTop() >= 1) {
			$('header').addClass('header-sticky')
			$('.scroll-top').addClass('active')
		} else {
			$('header').removeClass('header-sticky')
			$('.scroll-top').removeClass('active')
		}
	});

	$('.scroll-top').click(function () {
		$('html, body').animate({ scrollTop: '0px' }, 300)
	})


	$('.model-carousel').slick({
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		nextArrow: '<div class="arrow__right"><img src="/wp-content/themes/theme-password-1/assets/img/arrow-right.png" ></div>',
		prevArrow: '<div class="arrow__left"><img src="/wp-content/themes/theme-password-1/assets/img/arrow-left.png" ></div>',
		responsive: [
		  {
			breakpoint: 768,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 1
			}
		  }
		]
	});

	//TOP service carousel
	$('.carousel').slick({
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		nextArrow: '<div class="arrow__right"><img src="/wp-content/themes/theme-password-1/assets/img/arrow-right.png" ></div>',
		prevArrow: '<div class="arrow__left"><img src="/wp-content/themes/theme-password-1/assets/img/arrow-left.png" ></div>',
		fade: false
	});

	//model page tab function
	$('.tab-link').click(function(){
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
	})
	$('#tab-woman').click(function(){
		$('#panel-woman').addClass('active');
		$('#panel-woman').siblings().removeClass('active');
	})
	$('#tab-man').click(function(){
		$('#panel-man').addClass('active');
		$('#panel-man').siblings().removeClass('active');
	})
	$('#tab-group').click(function(){
		$('#panel-group').addClass('active');
		$('#panel-group').siblings().removeClass('active');
	})

	//work model
	$('.work__btn').click(function(){
		$('.work-modal').addClass('active');
	})
	$('.btn--cancel').click(function(){
		$('.work-modal').removeClass('active');
	})

	$('.hamburger').click(function(){
		$(this).toggleClass('active')
		$('.nav-link').toggleClass('active')
	})
})