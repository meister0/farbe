$(document).ready(function () {
	new WOW().init();
	$('.form__tel').inputmask({ mask: '+7 (999) 999-9999' }); //specifying options
	$('.eTimer').eTimer({
		etType: 0,
		etDate: '16.05.2020.0.0',
		etTitleText: '',
		etTitleSize: 14,
		etShowSign: 1,
		etSep: ':',
		etFontFamily: 'Verdana',
		etTextColor: '#333333',
		etPaddingTB: 15,
		etPaddingLR: 15,
		etBackground: 'white',
		etBorderSize: 0,
		etBorderRadius: 14,
		etBorderColor: 'white',
		etShadow: 'inset 0px 0px 0px 1px #ff3242',
		etLastUnit: 4,
		etNumberFontFamily: 'Arial',
		etNumberSize: 40,
		etNumberColor: '#333333',
		etNumberPaddingTB: 2,
		etNumberPaddingLR: 5,
		etNumberBackground: 'rgba(255, 50, 66, 0.3)',
		etNumberBorderSize: 2,
		etNumberBorderRadius: 5,
		etNumberBorderColor: 'white',
		etNumberShadow: 'inset 0px 0px 0px 0px rgba(0, 0, 0, 0.5)',
	});
	$('.minimized').click(function (event) {
		var i_path = $(this).attr('src');
		$('body').append(
			'<div id="overlay"></div><div id="magnify"><img src="' +
				i_path +
				'"><div id="close-popup"><i></i></div></div>'
		);
		$('#magnify').css({
			left: ($(document).width() - $('#magnify').outerWidth()) / 2.5,
			// top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
			top: ($(window).height() - $('#magnify').outerHeight()) / 2,
		});
		$('#overlay, #magnify').fadeIn('fast');
	});

	$('body').on('click', '#close-popup, #overlay', function (event) {
		event.preventDefault();

		$('#overlay, #magnify').fadeOut('fast', function () {
			$('#close-popup, #magnify, #overlay').remove();
		});
	});

	$('a[href^="#"]').bind('click.smoothscroll', function (e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);

		$('html, body').stop().animate(
			{
				scrollTop: $target.offset().top,
			},
			900,
			'swing'
		);
	});
	$('a[href^="#form"]').bind('click.smoothscroll', function (e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);

		$('html, body')
			.stop()
			.animate(
				{
					scrollTop: $target.offset().top - $(window).outerHeight() / 3,
				},
				900,
				'swing'
			);
	});
	$('a[href^="#usage"]').bind('click.smoothscroll', function (e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);

		$('html, body')
			.stop()
			.animate(
				{
					scrollTop: $target.offset().top - $(window).outerHeight() / 5.5,
				},
				900,
				'swing'
			);
	});
});
