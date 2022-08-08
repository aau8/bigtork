<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="./assets/css/style.css" />
	</head>
	<body>
		<div class="wrapper page-products">
			<header class="header">
				<div class="header__area">
					<div class="header__container">
						<a href="#" class="logo header__logo"><img src="../assets/img/logo.svg" alt="" /></a>
						<nav class="menu">
							<div class="menu__wrap">
								<div class="menu__header">
									<span class="menu__header-title">Меню</span>
									<button class="burger is-active menu__header-close" data-menu-close>
										<span></span><span></span><span></span>
									</button>
								</div>
								<div class="menu__body">
									<ul class="menu__list">
										<li class="menu__list-item"><a href="#">Главная</a></li>
										<li class="menu__list-item has-sub-menu">
											<div class="sub-link">
												<a href="#">О компании</a>
												<span class="sub-link__arrow"></span>
											</div>
											<ul class="sub-menu">
												<li class="sub-menu__item"><a href="#">Development</a></li>
												<li class="sub-menu__item"><a href="#">Фотографии</a></li>
												<li class="sub-menu__item"><a href="#">Сертификаты</a></li>
											</ul>
										</li>
										<li class="menu__list-item"><a href="#">Продукция</a></li>
										<li class="menu__list-item has-sub-menu">
											<div class="sub-link">
												<a href="#">Документация</a>
												<span class="sub-link__arrow"></span>
											</div>
											<ul class="sub-menu">
												<li class="sub-menu__item"><a href="#">Design</a></li>
												<li class="sub-menu__item"><a href="#">Construction</a></li>
												<li class="sub-menu__item"><a href="#">After-sales</a></li>
												<li class="sub-menu__item"><a href="#">Training</a></li>
											</ul>
										</li>
										<li class="menu__list-item"><a href="#">Решения</a></li>
										<li class="menu__list-item"><a href="#">Сервис</a></li>
										<li class="menu__list-item"><a href="#">Контакты</a></li>
									</ul>
								</div>
							</div>
						</nav>
						<button class="burger header__burger" data-menu-open>
							<span></span><span></span><span></span>
						</button>
					</div>
				</div>
			</header>

			<div class="breadcrumbs">
				<div class="breadcrumbs__container">
					<ul class="breadcrumbs__list">
						<li class="breadcrumbs__item"><a class="link" href="#">Главная</a></li>

						<li class="breadcrumbs__item"><a class="link" href="#">Продукция</a></li>

						<li class="breadcrumbs__item">Angle stroke rack type AT series (new type)</li>
					</ul>
				</div>
			</div>

			<div class="content">
				<section class="product">
					<div class="product__container">
						<div class="product__visual">
							<div class="product__slider-main">
								<div class="swiper-container">
									<div class="swiper" data-swiper="product-main">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<img src="./assets/img/products/1.jpg" data-zoom alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/2.jpg" data-zoom alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/3.jpg" data-zoom alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/4.jpg" data-zoom alt="" />
											</div>
										</div>
									</div>
									<div class="swiper__arrows">
										<button class="swiper-arrow s-product-main__arrow is-prev"></button>
										<button class="swiper-arrow s-product-main__arrow is-next"></button>
									</div>
								</div>
							</div>
							<div class="product__slider-second">
								<div class="swiper-container">
									<div class="swiper is-crop" data-swiper="product-second">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<img src="./assets/img/products/1.jpg" alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/2.jpg" alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/3.jpg" alt="" />
											</div>
											<div class="swiper-slide">
												<img src="./assets/img/products/4.jpg" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product__content">
							<h1 class="title-2 product__title">
								Angle stroke <span>rack type AT series</span> (new type)
							</h1>
							<p class="product__text">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip. Ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								<br /><br />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip. Ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								<br /><br />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip. Ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								<br /><br />
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip. Ex ea commodo consequat. Duis aute irure
								dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>

							<button class="btn is-accent product__btn">Тех. характеристики</button>
						</div>
					</div>
				</section>

				<section class="section s-product">
					<div class="s-product__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Другие <b>товары</b></h2>
								<p class="s-header__text">Lorem ipsum dolor sit amet dolore consectetur adipiscing</p>
							</div>
						</div>

						<div class="s-product__body">
							<div class="s-product__list">
								<a href="#" class="c-product">
									<div class="c-product__wrap">
										<div class="c-product__img">
											<img src="./assets/img/products/1.jpg" alt="" />
										</div>
										<div class="c-product__content">
											<span class="c-product__title"
												>Angle stroke rack type AT series (new type)</span
											>

											<div class="arrow-round c-product__arrow"></div>
										</div>
									</div>
								</a>

								<a href="#" class="c-product">
									<div class="c-product__wrap">
										<div class="c-product__img">
											<img src="./assets/img/products/2.jpg" alt="" />
										</div>
										<div class="c-product__content">
											<span class="c-product__title">BG series shift fork actuator</span>

											<div class="arrow-round c-product__arrow"></div>
										</div>
									</div>
								</a>

								<a href="#" class="c-product">
									<div class="c-product__wrap">
										<div class="c-product__img">
											<img src="./assets/img/products/3.jpg" alt="" />
										</div>
										<div class="c-product__content">
											<span class="c-product__title">Straight stroke piston actuator</span>

											<div class="arrow-round c-product__arrow"></div>
										</div>
									</div>
								</a>

								<a href="#" class="c-product">
									<div class="c-product__wrap">
										<div class="c-product__img">
											<img src="./assets/img/products/4.jpg" alt="" />
										</div>
										<div class="c-product__content">
											<span class="c-product__title">Hydraulic <br />Actuator</span>

											<div class="arrow-round c-product__arrow"></div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<footer class="footer">
				<div class="footer__container">
					<div class="footer__info">
						<a href="#" class="logo footer__logo"><img src="./assets/img/logo-light.svg" alt="" /></a>
						<p class="footer__info-text">
							Lorem ipsum dolor sit amet dolore consectetur amet adipiscing elit, sed do
						</p>
					</div>
					<nav class="footer-menu">
						<ul class="footer-menu__list">
							<li class="footer-menu__item"><a href="#">Главная</a></li>
							<li class="footer-menu__item"><a href="#">О компании</a></li>
							<li class="footer-menu__item"><a href="#">Продукция</a></li>
							<li class="footer-menu__item"><a href="#">Документация</a></li>
							<li class="footer-menu__item"><a href="#">Решения</a></li>
							<li class="footer-menu__item"><a href="#">Сервис</a></li>
							<li class="footer-menu__item"><a href="#">Контакты</a></li>
						</ul>
					</nav>
					<div class="footer-contact">
						<div class="fc-block">
							<span class="fc-block__title">Телефон</span>
							<ul class="fc-block__list">
								<li class="fc-block__item"><a href="tel:">+7 983 382 912</a></li>
								<li class="fc-block__item"><a href="tel:">+7 983 382 912</a></li>
							</ul>
						</div>
						<div class="fc-block">
							<span class="fc-block__title">Электронная почта</span>
							<ul class="fc-block__list">
								<li class="fc-block__item"><a href="mailto:">gmail.com@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="./assets/js/bundle.js"></script>
	</body>
</html>
