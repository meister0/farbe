let cart = {};
let sum = 0;
function showCart() {
	//вывод на страницу
	$.getJSON('json/goods.json', function (data) {
		let goods = data;
		let output = '';
		let tsum = 0;

		for (let id in cart) {
			let tempSum = goods[id].price * cart[id];
			if (cart[id] != 0) {
				output += `
      <div class="center-item">
        <div class="center-item__name">
          <div class="img">
            <img src="img\\items\\${goods[id].img}" alt=""/>
          </div>
          <span>${goods[id].name}</span>
        </div>
        <div class="center-item__price">
        ${goods[id].price}&nbspР
        </div>
        <div class="center-item__quantity">
          <div class="quantity__minus" onclick="countQ('min', ${id})"></div>
          <span>${cart[id]}</span>
          <div class="quantity__plus" onclick="countQ('plus', ${id})"></div>
        </div>
        <div class="center-item__sum">
          <span class="sum__span">${tempSum}</span>&nbspР
        </div>
        <button data-id="${id}" onclick="delItem(
					event
				)" class="center-item__close">
        </button>
      </div>`;
				tsum += tempSum;
				$('.cart-main-body__center').html(output);
			} else {
				output += '';
			}
		}

		$('#cart-sum')[0].innerText = tsum;
	});
}

function countQ(type, id) {
	if (type === 'min') {
		if (cart[id] == 1) $('.quantity__minus').attr('disabled', 'disabled');
		else cart[id] = cart[id] - 1;
	} else {
		$('.quantity__minus').attr('disabled', false);
		cart[id] = cart[id] + 1;
	}
	saveCart();
	showCart();
}

function saveCart() {
	sessionStorage.setItem('cart', JSON.stringify(cart));
	let count = 0;
	for (let c in cart) {
		count += cart[c];
	}
	$('.cart-button__count')[0].innerText = count;
}

function cartSum() {
	let redSum = sum.reduce((acc, val) => acc + val, 0);
	$('#cart-sum')[0].innerText = redSum;
}

function delItem(event) {
	let id = event.target.dataset.id;
	cart[id] = 0;
	let btns = $('.item__button');
	for (let i = 0; i < btns.length; i++) {
		if (btns[i].dataset.id == id) {
			btns[i].style = '';
			btns[i].innerText = 'В корзину';
		}
	}

	saveCart();
	showCart();
	checkCart();
}

function toggleCart(event) {
	let id = event.target.dataset.id;
	if (
		event.target.innerText == 'В корзину' &&
		(cart[id] == 0 || cart[id] == undefined)
	) {
		cart[id] = 1;
		event.target.innerText = 'В корзине';
		event.target.style.backgroundColor = ' rgba(255, 223, 0, 0.75)';
		event.target.style.color = ' #333333';
	} else if (
		event.target.innerText == 'В корзине' &&
		(cart[id] == 0 || cart[id] == undefined)
	) {
		event.target.innerText = 'В корзину';
		event.target.style.backgroundColor = ' #ff3242';
		event.target.style.color = ' #ffffff';
	} else {
		cart[id] = 0;
		event.target.innerText = 'В корзину';
		event.target.style.backgroundColor = ' #ff3242';
		event.target.style.color = ' #ffffff';
	}

	saveCart();
	showCart();
	checkCart();
}

function loadCart() {
	if (sessionStorage.getItem('cart')) {
		cart = JSON.parse(sessionStorage.getItem('cart'));
		showCart();
		setTimeout(checkCart(), 0);
	} else {
		$('.cart-main-body__center').html(`
			<div class="center-wrapper">
				<span class="red center-wrapper__null">Корзина пуста :(</span>
				<p class="center-wrapper__text">Вы не выбрали ни одного товара</p> 
			</div>`);
	}
}
let toshow = false;

function toggleCartVis() {
	if (toshow === false) {
		$('.cart').animate({ right: '0' }, 400);
		toshow = true;
	} else {
		$('.cart').animate({ right: '-1100px' }, 400);
		toshow = false;
	}
}
function checkCart() {
	let temp = 0;
	let tCart = Object.values(cart);
	let btns = $('.item__button');

	for (let i = 1; i < btns.length + 1; i++) {
		if (cart[i] > 0) {
			btns[i - 1].innerText = 'В корзине';
			btns[i - 1].style.backgroundColor = ' rgba(255, 223, 0, 0.75)';
			btns[i - 1].style.color = ' #333333';
		}
	}

	for (let i = 0; i < tCart.length; i++) {
		temp += tCart[i];
	}
	console.log($('.cart-main-body'));
	console.log($('.cart-main-body__center'));

	if (temp == 0) {
		$('.dis').attr('disabled', true);
		$('.cart-main-body__center').html(`<div class="center-wrapper">
				<span class="red center-wrapper__null">Корзина пуста :(</span>
				<p class="center-wrapper__text">Вы не выбрали ни одного товара</p> 
			</div>`);
	} else {
		$('.cart-button__count')[0].innerText = temp;
		$('.dis').attr('disabled', false);
	}
}

$(document).ready(function () {
	loadCart();
});
