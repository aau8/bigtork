import Swiper, { Navigation, Pagination, EffectFade, Autoplay, Thumbs } from "swiper";

const optFourthCards = {
	modules: [Navigation],

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

const certificateSwiper = new Swiper("[data-swiper=certificate]", {
	...optFourthCards,

	navigation: {
		nextEl: ".s-cert__arrow.is-next",
		prevEl: ".s-cert__arrow.is-prev",
	},
});

const photoSwiperElems = document.querySelectorAll('[data-swiper=photo]')

for (let i = 0; i < photoSwiperElems.length; i++) {
	const photoSwiperContainer = photoSwiperElems[i].parentElement

	const photoSwiper = new Swiper(photoSwiperElems[i], {
		modules: [Navigation],

		centeredSlides: true,
		loop: true,

		breakpoints: {
			900: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
			600: {
				slidesPerView: 3,
				spaceBetween: 16,
			},
			0: {
				slidesPerView: 1,
				spaceBetween: 16,
			},
		},
		navigation: {
			nextEl: photoSwiperContainer.querySelector('.s-photo__arrow.is-next'),
			prevEl: photoSwiperContainer.querySelector('.s-photo__arrow.is-prev'),
		},
	});
}

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

const productSecondSwiper = new Swiper("[data-swiper=product-second]", {
	modules: [EffectFade, Navigation, Pagination],

	slidesPerView: 3,
	spaceBetween: 20,
	loop: true,
	centeredSlides: true,
	allowTouchMove: false,
});

const productMainSwiper = new Swiper("[data-swiper=product-main]", {
	modules: [EffectFade, Navigation, Pagination, Thumbs],

	slidesPerView: 1,
	effect: 'fade',
	loop: true,

	navigation: {
		nextEl: ".s-product-main__arrow.is-next",
		prevEl: ".s-product-main__arrow.is-prev",
	},

	thumbs: {
		swiper: productSecondSwiper,
	}
});