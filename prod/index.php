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
		<div class="wrapper">
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

			<main class="main have-slider page-main">
				<div class="main__container">
					<div class="main-info">
						<div class="main__content">
							<h1 class="title-1 main__title">
								Optimize <b>inspection system</b> operation one step ahead
							</h1>
							<p class="main__text">
								Lorem ipsum dolor <br />sit amet dolore consectetur adipiscing elit, sed do
								<br />eiusmod tempor
							</p>

							<button class="btn is-accent main__btn">More info</button>
						</div>
						<div class="main__digits">
							<div class="b-digit">
								<span class="title-1 b-digit__value">2000</span>
								<span class="b-digit__text">production capacity</span>
							</div>
							<div class="b-digit">
								<span class="title-1 b-digit__value">60000</span>
								<span class="b-digit__text">floor space</span>
							</div>
						</div>
					</div>
					<div class="main-slider">
						<div class="swiper-container">
							<div class="swiper is-crop main__slider" data-swiper="main">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="main__slide"><img src="./assets/img/main/1.jpg" alt="" /></div>
									</div>
									<div class="swiper-slide">
										<div class="main__slide"><img src="./assets/img/case/1.jpg" alt="" /></div>
									</div>
									<div class="swiper-slide">
										<div class="main__slide"><img src="./assets/img/case/2.jpg" alt="" /></div>
									</div>
								</div>
							</div>
							<div class="main__slider-tools">
								<div class="main__slider-pagin"></div>
								<div class="main__slider-lines"><span></span><span></span><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<div class="content">
				<section class="section s-product">
					<div class="s-product__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Product <b>center</b></h2>
								<p class="s-header__text">Lorem ipsum dolor sit amet dolore consectetur adipiscing</p>
							</div>
						</div>

						<div class="s-product__body">
							<div class="swiper-container">
								<div class="swiper is-crop s-product__slider" data-swiper="product">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
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
										</div>
										<div class="swiper-slide">
											<a href="#" class="c-product">
												<div class="c-product__wrap">
													<div class="c-product__img">
														<img src="./assets/img/products/2.jpg" alt="" />
													</div>
													<div class="c-product__content">
														<span class="c-product__title"
															>BG series shift fork actuator</span
														>

														<div class="arrow-round c-product__arrow"></div>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
											<a href="#" class="c-product">
												<div class="c-product__wrap">
													<div class="c-product__img">
														<img src="./assets/img/products/3.jpg" alt="" />
													</div>
													<div class="c-product__content">
														<span class="c-product__title"
															>Straight stroke piston actuator</span
														>

														<div class="arrow-round c-product__arrow"></div>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
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
								<div class="swiper__arrows">
									<button class="swiper-arrow s-product__arrow is-prev"></button>
									<button class="swiper-arrow s-product__arrow is-next"></button>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="profile">
					<div class="profile__container">
						<div class="profile__body">
							<div class="profile__content">
								<h2 class="title-1 profile__title">Company <b>profile</b></h2>
								<p class="profile__text">
									Bigtork has always focused on the sales, production, R&D and design of pneumatic
									actuators for industrial process control valves, and has signed long-term ORM
									cooperation services with foreign automatic valve companies.
									<br /><br />
									The company's main products are fork-type actuators, rack-type actuators, linear
									actuators and special actuators and other products.
									<br /><br />
									The company has a complete quality management system and complete certification
									qualifications, as well as advanced manufacturing and processing equipment and
									complete product testing methods.
								</p>

								<button class="btn is-accent profile__btn">More info</button>
							</div>
						</div>
					</div>
				</div>

				<section class="section s-case">
					<div class="s-case__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Product <br /><b>application</b> case</h2>
								<p class="s-header__text">
									Lorem ipsum dolor sit amet dolore consectetur adipiscing elit, sed do eiusmod tempor
								</p>
							</div>
						</div>

						<div class="s-case__body">
							<div class="swiper-container">
								<div class="swiper is-crop s-case__slider" data-swiper="case">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<a
												href="#"
												class="c-case"
												style="background-image: url('./assets/img/case/1.jpg')"
											>
												<div class="c-case__wrap">
													<div class="c-case__content">
														<div class="arrow-round c-case__arrow"></div>

														<span class="c-case__title">Coal chemical industry </span>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
											<a
												href="#"
												class="c-case"
												style="background-image: url('./assets/img/case/1.jpg')"
											>
												<div class="c-case__wrap">
													<div class="c-case__content">
														<div class="arrow-round c-case__arrow"></div>

														<span class="c-case__title">Coal chemical industry </span>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
											<a
												href="#"
												class="c-case"
												style="background-image: url('./assets/img/case/1.jpg')"
											>
												<div class="c-case__wrap">
													<div class="c-case__content">
														<div class="arrow-round c-case__arrow"></div>

														<span class="c-case__title">Coal chemical industry </span>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
											<a
												href="#"
												class="c-case"
												style="background-image: url('./assets/img/case/1.jpg')"
											>
												<div class="c-case__wrap">
													<div class="c-case__content">
														<div class="arrow-round c-case__arrow"></div>

														<span class="c-case__title">Coal chemical industry </span>
													</div>
												</div>
											</a>
										</div>
										<div class="swiper-slide">
											<a
												href="#"
												class="c-case"
												style="background-image: url('./assets/img/case/1.jpg')"
											>
												<div class="c-case__wrap">
													<div class="c-case__content">
														<div class="arrow-round c-case__arrow"></div>

														<span class="c-case__title">Coal chemical industry </span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="swiper__arrows">
									<button class="swiper-arrow s-case__arrow is-prev"></button>
									<button class="swiper-arrow s-case__arrow is-next"></button>
								</div>
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
