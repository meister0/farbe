<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|PT+Serif|Roboto:400,500&display=swap&subset=cyrillic"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
		/>
		<link rel="shortcut icon" href="img/favicon.png" />
		<link rel="stylesheet" href="css/index.css" />
		<script src="js/pace.min.js"></script>
		<script data-pace-options='{ "ajax": false }' src="pace.js"></script>
		<title>Антисептик №1 в Тюмени</title>
	</head>
	<body>
		<?php
			$zaschita = md5(md5(time())."ivan");
			$vremya = md5(time());
		?>
		<header class="header">
			<div class="wrapper">
				<a class="header-logo" href="#main"
					><img
						src="img/logo.png"
						ondrag="return false"
						ondragstart="return false"
						alt="Farbe"
				/></a>
				<div class="header-links">
					<a href="#advantages" class="header-link">Почему мы</a>
					<a href="#usage" class="header-link">Применение</a>
					<a href="#price" class="header-link">Цена</a>
					<a href="#howto" class="header-link">Доставка</a>
				</div>
				<div class="header-button-wrapper">
					<a href="#form" class="button header-button">Оставить заявку</a>
				</div>
			</div>
		</header>
		<main class="main" id="main">
			<div class="wrapper">
				<div class="main-leftside">
					<header class="main-leftside__header">
						Антисептик
						<span class="yellow"> №1</span>
					</header>
					<!-- /.main-leftside__header -->
					<div class="main-leftside__text">
						Создан и разработан<br />с любовью по уникальной рецептуре
						специально для Вас и Ваших близких
					</div>
					<!-- /.main-leftside__text -->
					<small class="main-leftside__small"
						><span class="yellow">*</span>Сделано по ГОСТу</small
					>
					<!-- /.main-leftside__small -->
				</div>
				<!-- /.main-leftside -->
				<div class="main-rightside">
					<div class="main-rightside-lists">
						<div
							class="main-rightside__list main-rightside__list1 wow fadeIn"
							data-wow-delay=".3s"
							data-wow-duration="1.5s"
						>
							<img
								class="list__img"
								src="img/icons/bacteria.svg"
								ondrag="return false"
								ondragstart="return false"
								alt="Bacteria icon"
							/>
							Убивает 99,9 %<br />
							бактерий и вирусов
						</div>
						<!-- /.main-rightside__list main-rightside__list1 -->
						<div
							class="main-rightside__list main-rightside__list2 wow fadeIn"
							data-wow-delay=".4s"
							data-wow-duration="1.5s"
						>
							<img
								class="list__img"
								src="img/icons/food.svg"
								ondrag="return false"
								ondragstart="return false"
								alt="Food icon"
							/>
							Без содержания спирта, не сушит кожу
						</div>
						<!-- /.main-rightside__list main-rightside__list2 -->
						<div
							class="main-rightside__list main-rightside__list3 wow fadeIn"
							data-wow-delay=".5s"
							data-wow-duration="1.5s"
						>
							<img
								class="list__img"
								src="img/icons/smell.svg"
								ondrag="return false"
								ondragstart="return false"
								alt="Smelt icon"
							/>
							Без цвета<br />
							и запаха
						</div>
						<!-- /.main-rightside__list main-rightside__list3 -->
					</div>

					<div class="main-rightside__septic-wrapper">
						<img
							src="img/items/anti.png"
							ondrag="return false"
							ondragstart="return false"
							alt="Antiseptic"
							class="main-rightside__septic wow fadeIn"
							data-wow-delay=".1s"
							data-wow-duration="1.5s"
						/>
						<img
							src="img/icons/Vector.svg"
							ondrag="return false"
							ondragstart="return false"
							alt="icon"
							class="main-rightside__gost wow fadeIn"
							data-wow-delay=".2s"
							data-wow-duration="1s"
						/>
					</div>
					<img
						src="img/circles/dashed-circles.png"
						ondrag="return false"
						ondragstart="return false"
						alt="Dashed circles"
						class="main-rightside__d-circles"
					/>
					<div class="main-rightside__ellipse">
						<img
							src="img/ellipses/Ellipse_1.png"
							ondrag="return false"
							ondragstart="return false"
							alt="Ellipse"
						/>
					</div>
				</div>
				<!-- /.main-rightside -->
			</div>
		</main>
		<!-- /.main -->
		<div
			class="wrapper wow fadeInUp"
			data-wow-delay=".6s"
			data-wow-duration="1s"
			id="wrap"
		>
			<div class="form" id="form">
				<div class="form-header">
					<div class="form-header-prices">
						<div class="form-header-prices__old">619 ₽</div>
						<!-- /.form-header-prices__old -->
						<strong class="form-header-prices__new">479 ₽</strong>
						<!-- /.form-header-prices__new -->
					</div>
					<!-- /.form-header-prices -->
					<div class="eTimer"></div>
					<!-- /.form-header-timer -->
				</div>
				<!-- /.form-header -->
				<div class="form-footer">
					<div class="form-footer__header">
						<span class="yellow">Заполните</span> форму
					</div>
					<!-- /.form-footer__header -->
					<div class="form-footer__text">
						Мы свяжемся с Вами в течение 29 секунд
					</div>
					<!-- /.form-footer__text -->
					<form action="send.php?p=<?=$vremya?>" method="POST" class="form-footer__form">
						<input
							type="text"
							name="Name"
							class="form__name"
							placeholder="Имя"
							required
						/>
						<input
							type="tel"
							name="Tel"
							class="form__tel"
							placeholder="Телефон"
							required
						/>
						<input type="hidden" name="zf" value="<?=$zaschita?>">
						<input type="text" name="last_name" id="last_name" value="">
						<input
							type="submit"
							class="form__submit button"
							value="Оставить заявку"
						/>
						<div class="form__policy">
							<input type="checkbox" class="form__checkbox" id="cb" required />
							<label for="cb">
								Нажимая на кнопку “Оставить заявку”, Вы соглашаетесь с
								<a href="#" class="yellow">политикой конфиденциальности</a>
							</label>
						</div>
						<!-- /.form__policy -->
					</form>
					<!-- /.form-footer__form -->
				</div>
				<!-- /.form-footer -->
			</div>
			<!-- /.form -->
		</div>
		<section class="advantages" id="advantages">
			<div class="wrapper">
				<h2 class="advantages-title section-title">
					Почему наш<br />
					продукт уникален
				</h2>
				<!-- /.advantages-title -->
				<div class="advantages-main">
					<div class="advantages-main-advantage">
						<div class="advantages-main-advantage__title">
							Не содержит спирт
						</div>
						<!-- /.advantages-main-advantage__title -->
						<div class="advantages-main-advantage__number">01</div>
						<!-- /.advantages-main-advantage__number -->
						<div class="advantages-main-advantage__text">
							Спирт сушит кожу, вследствие чего появляются трещины,<br />
							в которые может проникнуть коронавирус
						</div>
						<!-- /.advantages-main-advantage__text -->
					</div>
					<!-- /.advantages-main-advantage -->
					<div class="advantages-main-advantage">
						<div class="advantages-main-advantage__title">
							Без цвета и запаха
						</div>
						<!-- /.advantages-main-advantage__title -->
						<div class="advantages-main-advantage__number">02</div>
						<!-- /.advantages-main-advantage__number -->
						<div class="advantages-main-advantage__text">
							Благодаря уникальному составу антисептик не имеет запаха, цвета,
							не оставляет следы<br />
							на одежде и гиппоаллергенен
						</div>
						<!-- /.advantages-main-advantage__text -->
					</div>
					<!-- /.advantages-main-advantage -->
					<div class="advantages-main-advantage">
						<div class="advantages-main-advantage__title">
							Долговременный эффект
						</div>
						<!-- /.advantages-main-advantage__title -->
						<div class="advantages-main-advantage__number">03</div>
						<!-- /.advantages-main-advantage__number -->
						<div class="advantages-main-advantage__text">
							Длительное время сохраняет свои защитные свойства в широком
							диапозоне температур,<br />
							что является удобным <br />для любых перемещений
						</div>
						<!-- /.advantages-main-advantage__text -->
					</div>
					<!-- /.advantages-main-advantage -->
					<div class="advantages-main-advantage">
						<div class="advantages-main-advantage__title">
							Защита от всех вирусов
						</div>
						<!-- /.advantages-main-advantage__title -->
						<div class="advantages-main-advantage__number">04</div>
						<!-- /.advantages-main-advantage__number -->
						<div class="advantages-main-advantage__text">
							Уничтожает 99.99% всех вирусов<br />
							и бактерий, в числе которых коронавирус, ВИЧ, герпес, грипп<br />
							и т.п.
						</div>
						<!-- /.advantages-main-advantage__text -->
					</div>
					<!-- /.advantages-main-advantage -->
				</div>
				<!-- /.advantages-main -->
			</div>
		</section>
		<!-- /.advantages -->
		<section class="usage" id="usage">
			<div class="wrapper">
				<h2 class="usage-title section-title">Широкое применение</h2>
				<!-- /.usage-title section-title -->
				<div class="usage-main">
					<div class="usage-main__list">
						детские учреждения (школы, детсады и т.д.)
					</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">косметические, массажные салоны</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">предприятия мясной промышленности</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">вирусологические лаборатории</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">предприятия общественного питания</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">профилактические учреждения</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">
						предприятия продовольственной торговли
					</div>
					<!-- /.usage-main__list -->
					<div class="usage-main__list">учреждения соцобеспечения</div>
					<!-- /.usage-main__list -->
					<div class="virus-1 virus">
						<img
							src="img/viruses/virus__green.png"
							ondrag="return false"
							ondragstart="return false"
							alt="Green virus"
						/>
					</div>
					<!-- /.virus-1 -->
					<div class="virus-2 virus">
						<img
							src="img/viruses/coronavirus-orang.png"
							ondrag="return false"
							ondragstart="return false"
							alt="Orange virus"
						/>
					</div>
					<!-- /.virus-2 -->
					<div class="virus-3 virus">
						<img
							src="img/viruses/virus__blue.png"
							ondrag="return false"
							ondragstart="return false"
							alt="Blue virus"
						/>
					</div>
					<!-- /.virus-3 -->
				</div>
				<!-- /.usage-main -->
			</div>
			<!-- /.wrapper -->
		</section>
		<!-- /.usage -->
		<section class="price" id="price">
			<div class="wrapper">
				<h2 class="price-title section-title">Цена равная качеству</h2>
				<!-- /.price-title section-title -->
				<div class="price-main">
					<div class="price-main__item">
						<h3 class="item__title">В поездку</h3>
						<!-- /.item__title -->
						<p class="item__volume">1 л.</p>
						<!-- /.item__volume -->
						<div class="item__img">
							<img src="img/items/1litr.png" alt="1 liter bottle" />
						</div>
						<!-- /.item__img -->
						<div class="item__price">1000 ₽</div>
						<!-- /.item__price -->
						<div class="item__button button">Оставить заявку</div>
						<!-- /.item__button -->
					</div>
					<!-- /.price-main__item -->
					<div class="price-main__item hot">
						<h3 class="item__title">Всегда и везде</h3>
						<!-- /.item__title -->
						<p class="item__volume">225 мл.</p>
						<!-- /.item__volume -->
						<div class="item__hot"><img src="img/hot.png" alt="Hot" /></div>
						<div class="item__img">
							<img src="img/items/anti.png" alt="225 milliliters bottle" />
						</div>
						<!-- /.item__img -->
						<div class="item__price_old">619 ₽</div>
						<div class="item__price"><strong>449 ₽</strong></div>
						<!-- /.item__price -->
						<div class="item__button button">Оставить заявку</div>
						<!-- /.item__button -->
					</div>
					<!-- /.price-main__item -->
					<div class="price-main__item">
						<h3 class="item__title">Для помещений</h3>
						<!-- /.item__title -->
						<p class="item__volume">5 л.</p>
						<!-- /.item__volume -->
						<div class="item__img">
							<img src="img/items/5litr.png" alt="5 liters bottle" />
						</div>
						<!-- /.item__img -->
						<div class="item__price">4500 ₽</div>
						<!-- /.item__price -->
						<div class="item__button button">Оставить заявку</div>
						<!-- /.item__button -->
					</div>
					<!-- /.price-main__item -->
					<div class="virus-4 virus">
						<img src="img/viruses/virus_yellow.png" alt="Virus" />
					</div>
					<div class="virus-5 virus">
						<img src="img/viruses/virus_yellow.png" alt="Virus" />
					</div>
				</div>
				<!-- /.price-main -->
			</div>
			<!-- /.wrapper -->
		</section>
		<!-- /.price -->
		<section class="howto" id="howto">
			<div class="wrapper">
				<h2 class="howto-title section-title">
					Легко
					<span class="yellow">и</span> быстро
					<!-- /.yellow -->
				</h2>
				<!-- /.howto-title section-title -->
				<div class="howto-main">
					<div
						class="howto-main__item wow fadeInRight"
						data-wow-delay=".1s"
						data-wow-duration="1s"
					>
						<h3 class="item__title">Заказ</h3>
						<!-- /.item__title -->
						<div class="item__point">
							<img src="img/point.png" alt="Point" />
						</div>
						<!-- /.item__point -->
						<div class="item__img">
							<img src="img/circles/circle_1.png" alt="Photo" />
						</div>
						<!-- /.item__img -->
						<p
							class="item__text wow fadeInDown"
							data-wow-delay=".3s"
							data-wow-duration="1s"
						>
							Отправьте заявку на сайте, мы свяжемся с вами и за пару минут
							оформим заказ
						</p>
					</div>
					<!-- /.howto-main__item -->
					<div
						class="howto-main__item wow fadeIn"
						data-wow-delay="0"
						data-wow-duration="1s"
					>
						<h3 class="item__title">Доставка</h3>
						<!-- /.item__title -->
						<div class="item__point">
							<img src="img/point.png" alt="Point" />
						</div>
						<!-- /.item__point -->
						<div class="item__img">
							<img src="img/circles/circle_2.png" alt="Photo" />
						</div>
						<!-- /.item__img -->
						<p
							class="item__text second wow fadeInDown"
							data-wow-delay=".4s"
							data-wow-duration="1s"
						>
							Мы доставим ваш товар всего за 100 ₽ в любую точку города
						</p>
					</div>
					<!-- /.howto-main__item -->
					<div
						class="howto-main__item wow fadeInLeft"
						data-wow-delay=".1s"
						data-wow-duration="1s"
					>
						<h3 class="item__title">Оплата</h3>
						<!-- /.item__title -->
						<div class="item__point">
							<img src="img/point.png" alt="Point" />
						</div>
						<!-- /.item__point -->
						<div class="item__img">
							<img src="img/circles/circle_3.png" alt="Photo" />
						</div>
						<!-- /.item__img -->
						<p
							class="item__text third wow fadeInDown"
							data-wow-delay=".5s"
							data-wow-duration="1s"
						>
							Вы оплачиваете заказ только после его получения
						</p>
					</div>
					<!-- /.howto-main__item -->
				</div>
				<!-- /.howto-main -->
			</div>
			<!-- /.wrapper -->
		</section>
		<!-- /.howto -->
		<div class="small-adv">
			<div class="wrapper">
				<div class="small-adv-main">
					<div class="small-adv-main-lists">
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>Экологически безопасен</p>
						</div>
						<!-- /.small-adv-main__list -->
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>Химически нейтрален, не сушит кожу</p>
						</div>
						<!-- /.small-adv-main__list -->
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>Не оставляет следов, разводов, пятен</p>
						</div>
						<!-- /.small-adv-main__list -->
					</div>
					<img
						src="img/circles/dashed-circled_2.png"
						alt="Dashed circle"
						class="small-adv-main-circles"
					/>
					<div class="small-adv-main-lists">
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>Обладает широким спектром антимикробного действия</p>
						</div>
						<!-- /.small-adv-main__list -->
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>
								Санитарная обработка<br />
								различных поверхностей
							</p>
						</div>
						<!-- /.small-adv-main__list -->
						<div class="small-adv-main-lists__list">
							<img src="img/tip.png" alt="Tick" />
							<p>
								Сохраняет свои свойства <br />в герметичной упаковке до 2 лет
							</p>
						</div>
						<!-- /.small-adv-main__list -->
					</div>
				</div>
				<!-- /.small-adv-main -->
			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.small-adv -->
		<div class="wrapper" id="wrap-2">
			<div class="form form-2">
				<div class="form-header form-2-header">
					<div class="form-2-header-text">
						<div class="form-footer__header form-2-header-text__header">
							<span class="yellow">Заполните</span> форму
						</div>
						<!-- /.form-footer__header -->
						<div class="form-footer__text form-2-header-text__text">
							Мы свяжемся с Вами<br />
							в течение 29 секунд
						</div>
					</div>
					<div class="form-header-prices form-2-header-prices">
						<div class="form-header-prices__old form-2-header-prices__old">
							619 ₽
						</div>
						<!-- /.form-header-prices__old -->
						<strong class="form-header-prices__new form-2-header-prices__new"
							>479 ₽</strong
						>
						<!-- /.form-header-prices__new -->
					</div>
					<!-- /.form-header-prices -->
					<div class="eTimer"></div>
					<!-- /.form-header-timer -->
				</div>
				<!-- /.form-header -->
				<div class="form-footer form-2-footer">
					<!-- /.form-footer__text -->
					<form
						action="send.php?p=<?=$vremya?>"
						method="POST"
						class="form-footer__form form-2-footer__form"
					>
						<input
							type="text"
							name="Name"
							class="form__name"
							placeholder="Имя"
							required
						/>
						<input
							type="tel"
							name="Tel"
							class="form__tel"
							placeholder="Телефон"
							required
						/>
						<input type="hidden" name="zf" value="<?=$zaschita?>">
						<input type="text" name="last_name" id="last_name" value="">
						<input
							type="submit"
							class="form__submit button"
							value="Оставить заявку"
						/>
						<div class="form__policy">
							<input type="checkbox" class="form__checkbox" id="cb2" required />
							<label for="cb2">
								Нажимая на кнопку “Оставить заявку”, Вы соглашаетесь с
								<a href="#" class="yellow">политикой конфиденциальности</a>
							</label>
						</div>
						<!-- /.form__policy -->
					</form>
					<!-- /.form-footer__form -->
				</div>
				<!-- /.form-footer -->
			</div>
			<!-- /.form -->
		</div>
		<section class="certificates">
			<div class="wrapper">
				<h2 class="section-title certificates-title">Все честно и прозрачно</h2>
				<!-- /.section-title certificates-title -->
				<div class="certificates-main">
					<div class="certificates-main__certificate">
						<img
							src="img/certif/doc__1.png"
							class="minimized"
							alt="Certificate"
						/>
						<img src="img/angle.png" alt="Angle" />
					</div>
					<!-- /.certificates-main__certificate -->
					<div class="certificates-main__certificate">
						<img
							src="img/certif/doc__2.png"
							class="minimized"
							alt="Certificate"
						/>
						<img src="img/angle.png" alt="Angle" />
					</div>
					<!-- /.certificates-main__certificate -->
					<div class="certificates-main__certificate">
						<img
							src="img/certif/doc__3.png"
							class="minimized"
							alt="Certificate"
						/>
						<img src="img/angle.png" alt="Angle" />
					</div>
					<!-- /.certificates-main__certificate -->
				</div>
				<!-- /.certificates-main -->
			</div>
			<!-- /.wrapper -->
		</section>
		<!-- /.certificates -->
		<div class="footer">
			<div class="wrapper">
				<div class="footer-header">
					<p>
						Общество с ограниченной ответственностью “Битекс-Сибирь”. ОГРН:
						1127232053850, ИНН:7207023279.
					</p>
					<p>
						Адрес: 627142, Россия, Тюменская область, город Заводоуковск, улица
						Щорса, дом 1
					</p>
				</div>
				<!-- /.footer-header -->
				<div class="footer-footer">
					<a href="">Политика конфиденциальности</a>
					<span class="yellow">© 2020</span>
					<!-- /.yellow -->
				</div>
				<!-- /.footer-footer -->
			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.footer -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="js/jquery.inputmask.min.js"></script>
		<script src="https://e-timer.ru/js/etimer.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>