$(document).ready(function () {
	new WOW().init();
	$('.form__tel').inputmask({ mask: '+7 (999) 999-9999' }); //specifying options
	$('.eTimer').eTimer({
		etType: 0,
		etDate: '22.05.2020.0.0',
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
			'<div id="overlay"><div id="magnify"><img src="' +
				i_path +
				'"><div id="close-popup"><i></i></div></div></div>'
		);
		$('#overlay').css({
			display: 'flex',
			justifyContent: 'center',
			alignItems: 'center',
			width: '100%',
			height: '100%',
			opacity: '1',
			backgroundColor: 'rgba(0,0,0, 0.5)',
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
	$('.price-main').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		draggable: false,
		speed: 400,
	});
	$('.slick-slider .slick-dots .button').each(function () {
		$(this).text($(this).parent().index() + 1);
	});

	$('.slick-slider > button:last').on('click', function () {
		$('.slick-dots > li:first	').css({ opacity: 0 });
		$('.slick-dots > li:last	').css({ opacity: 1 });
	});
	$('.slick-slider > button:first').on('click', function () {
		$('.slick-dots > li:first	').css({ opacity: 1 });
		$('.slick-dots > li:last	').css({ opacity: 0 });
	});
});

function toggleCart(event) {
	console.log(event);

	if (event.target.innerText == 'В корзину') {
		event.target.innerText = 'В корзине';
		event.target.style.backgroundColor = ' rgba(255, 223, 0, 0.75)';
		event.target.style.color = ' #333333';
	} else {
		event.target.innerText = 'В корзину';
		event.target.style.backgroundColor = ' #ff3242';
		event.target.style.color = ' #ffffff';
	}
}

function toggleText(blockId) {
	if ($(blockId).css('display') == 'none') {
		$(blockId).animate({ height: 'show' }, 500);
	} else {
		$(blockId).animate({ height: 'hide' }, 500);
	}
}

function showHum() {
	$('.overlay').css({ opacity: '1', zIndex: '199' });
}

function hideHum() {
	$('.overlay').css({ opacity: '0' });
	setTimeout(() => {
		$('.overlay').css({ zIndex: -1 });
	}, 500);
}
