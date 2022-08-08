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

			<main class="main have-thumb have-breadcrumbs">
				<div class="breadcrumbs">
					<div class="breadcrumbs__container">
						<ul class="breadcrumbs__list">
							<li class="breadcrumbs__item"><a class="link" href="#">Главная</a></li>

							<li class="breadcrumbs__item">О компании</li>
						</ul>
					</div>
				</div>

				<div class="main__container">
					<div class="main-info">
						<div class="main__content">
							<h1 class="title-1 main__title">About <span>BIGTORK</span></h1>
							<p class="main__text">
								Bigtork has always focused on the sales, production, R&D and design of pneumatic
								actuators for industrial process control valves, and has signed long-term ORM
								cooperation services with foreign automatic valve companies.
								<br /><br />
								The company's main products are fork-type actuators, rack-type actuators, linear
								actuators and special actuators and other products. The company has a complete quality
								management system and complete certification qualifications, as well as advanced
								manufacturing and processing equipment and complete product testing methods.
								<br /><br />
								Bigtork provides the best technical services and solutions for industrial process
								control valves, dedicated to improving the control performance and stability of control
								valves.
								<br /><br />
								• Quick response services improve operational efficiency, always one step ahead of the
								competition.
								<br /><br />
								• Leverage our expertise to help you quickly and correctly select products, extend
								control valve maintenance intervals, and enhance your competitive advantage
								<br /><br />
								• The technical team is constantly striving to find the best solution, providing
								technical support services according to needs at every stage of the project.
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
					<div class="main-thumb">
						<div class="main-thumb__img"><img src="./assets/img/main/1.jpg" alt="" /></div>
					</div>
				</div>
			</main>

			<div class="content">
				<section class="section company-dev">
					<div class="company-dev__container">
						<div class="company-dev__img"><img src="./assets/img/company-development.jpg" alt="" /></div>
						<div class="company-dev__content">
							<h2 class="title-2 company-dev__title">Company <b>Development</b></h2>
							<p class="company-dev__text">
								The BG series shift fork actuators are designed in a modular product line for operating
								quarter-turn control valves such as on-off or frequently adjusted ball, butterfly and
								plug valves.
								<br /><br />
								The connection size conforms to the ISO5211 standard and can be perfectly installed on
								the valve that conforms to the ISO standard connection size.
								<br /><br />
								The BG series shift fork actuators are designed in a modular product line for operating
								quarter-turn control valves such as on-off or frequently adjusted ball, butterfly and
								plug valves.
							</p>
						</div>
					</div>
				</section>

				<div class="section s-photo">
					<div class="s-photo__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Фотографии <b>производства</b></h2>
								<p class="s-header__text">Lorem ipsum dolor sit amet dolore consectetur adipiscing</p>
							</div>
						</div>

						<div class="s-photo__body">
							<div class="swiper-container">
								<div class="swiper is-crop s-photo__slider" data-swiper="photo">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="c-photo">
												<div class="c-photo__img">
													<img src="./assets/img/case/1.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-photo">
												<div class="c-photo__img">
													<img src="./assets/img/case/2.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-photo">
												<div class="c-photo__img">
													<img src="./assets/img/case/3.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-photo">
												<div class="c-photo__img">
													<img src="./assets/img/case/4.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-photo">
												<div class="c-photo__img">
													<img src="./assets/img/case/3.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper__arrows">
									<button class="swiper-arrow s-photo__arrow is-prev"></button>
									<button class="swiper-arrow s-photo__arrow is-next"></button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section s-cert">
					<div class="s-cert__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Сертификаты</h2>
								<p class="s-header__text">Lorem ipsum dolor sit amet dolore consectetur adipiscing</p>
							</div>
						</div>

						<div class="s-cert__body">
							<div class="swiper-container">
								<div class="swiper is-crop s-cert__slider" data-swiper="certificate">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="c-cert">
												<div class="c-cert__img">
													<img src="./assets/img/docs/1.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-cert">
												<div class="c-cert__img">
													<img src="./assets/img/docs/2.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-cert">
												<div class="c-cert__img">
													<img src="./assets/img/docs/3.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-cert">
												<div class="c-cert__img">
													<img src="./assets/img/docs/4.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="c-cert">
												<div class="c-cert__img">
													<img src="./assets/img/docs/3.jpg" alt="" data-zoom />
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper__arrows">
									<button class="swiper-arrow s-cert__arrow is-prev"></button>
									<button class="swiper-arrow s-cert__arrow is-next"></button>
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
