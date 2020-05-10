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
});
