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

			<main class="main have-thumb have-breadcrumbs page-contacts">
				<div class="breadcrumbs">
					<div class="breadcrumbs__container">
						<ul class="breadcrumbs__list">
							<li class="breadcrumbs__item"><a class="link" href="#">Главная</a></li>

							<li class="breadcrumbs__item">Контакты</li>
						</ul>
					</div>
				</div>

				<div class="main__container">
					<div class="main-info">
						<div class="main__content">
							<h1 class="title-1 main__title">Contact <span>Us</span></h1>
							<div class="main-contact">
								<div class="main-contact__block">
									<span class="main-contact__block-title">Телефон:</span>
									<div class="main-contact__block-list">
										<a href="#" class="link main-contact__block-link">+7 993 823 283</a>
										<a href="#" class="link main-contact__block-link">+7 993 823 283</a>
									</div>
								</div>
								<div class="main-contact__block">
									<span class="main-contact__block-title">Электронная почта:</span>
									<div class="main-contact__block-list">
										<a href="#" class="link main-contact__block-link">sales@bigtork.com3</a>
										<a href="#" class="link main-contact__block-link">gmail@gmail.com</a>
									</div>
								</div>
								<div class="main-contact__block">
									<span class="main-contact__block-title">Адрес:</span>
									<p class="main-contact__block-text">
										998 Yuanqu Avenue, Anfeng Industrial Zone, Oubei, Yongjia, Zhejiang, China.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="main-thumb">
						<div class="main-thumb__img">
							<iframe
								src="https://yandex.ru/map-widget/v1/-/CCURyUv7CB"
								width="560"
								height="400"
								frameborder="1"
								allowfullscreen="true"
							></iframe>
						</div>
					</div>
				</div>
			</main>

			<div class="content">
				<div class="section"></div>
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
