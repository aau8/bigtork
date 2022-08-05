import Swiper, { Navigation, Pagination, EffectFade, Autoplay } from "swiper";

const optFourthCards = {
	modules: [Navigation, Pagination],

	breakpoints: {
		1200: {
			slidesPerView: 4,
			spaceBetween: 24,
		},
		900: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
		550: {
			slidesPerView: 2,
			spaceBetween: 16,
		},
		0: {
			slidesPerView: 1,
			spaceBetween: 16,
		},
	},
}

const caseSwiper = new Swiper("[data-swiper=case]", {
	...optFourthCards,

	navigation: {
		nextEl: ".s-case__arrow.is-next",
		prevEl: ".s-case__arrow.is-prev",
	},
});

const productSwiper = new Swiper("[data-swiper=product]", {
	...optFourthCards,

	navigation: {
		nextEl: ".s-product__arrow.is-next",
		prevEl: ".s-product__arrow.is-prev",
	},
});

const mainSwiper = new Swiper("[data-swiper=main]", {
	modules: [EffectFade, Navigation, Pagination, Autoplay],

	slidesPerView: 1,
	effect: 'fade',
	loop: true,
	autoplay: {
		delay: 5000,
	},

	navigation: {
		nextEl: ".s-product__arrow.is-next",
		prevEl: ".s-product__arrow.is-prev",
	},
});