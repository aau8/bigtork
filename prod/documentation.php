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

							<li class="breadcrumbs__item">Документация</li>
						</ul>
					</div>
				</div>

				<div class="main__container">
					<div class="main-info">
						<div class="main__content">
							<h1 class="title-1 main__title">Документация <span>BIGTORK</span></h1>
							<p class="main__text">
								The BG series shift fork actuators are designed in a modular product line for operating
								quarter-turn control valves such as on-off or frequently adjusted ball, butterfly and
								plug valves.
								<br /><br />
								The connection size conforms to the ISO5211 standard and can be perfectly installed on
								the valve that conforms to the ISO standard connection size.
							</p>
						</div>
					</div>
					<div class="main-thumb">
						<div class="main-thumb__img"><img src="./assets/img/main/1.jpg" alt="" /></div>
					</div>
				</div>
			</main>

			<div class="content">
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

				<section class="section s-catalog">
					<div class="s-catalog__container">
						<div class="s-header">
							<div class="s-header__content">
								<h2 class="title-2 s-header__title">Каталог <span>продукции</span></h2>
								<p class="s-header__text">
									В данном разделе Вы можете скачать каталоги по трубопроводной арматуре
									&quot;Bigtork&quot; в формате pdf.
								</p>
							</div>
						</div>

						<div class="s-catalog__body">
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
							<a href="#" class="c-catalog">
								<div class="c-catalog__content">
									<div class="c-catalog__icon"></div>
									<div class="c-catalog__info">
										<span class="c-catalog__title">Общий каталог компании “Bigtork”</span>
										<span class="c-catalog__label">pdf</span>
									</div>
								</div>
								<div class="c-catalog__download"></div>
							</a>
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
