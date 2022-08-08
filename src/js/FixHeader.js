const header = document.querySelector('.header')

if (header) {
	const headerArea = header.querySelector('.header__area')
	const main = document.querySelector('.main')
	let elY = 0;
	let scrollY = 0;

	header.style.height = headerArea.clientHeight + 'px'
	// headerArea.style.height = headerArea.clientHeight + 'px'

	fixedMenu()
	window.addEventListener('scroll', fixedMenu)

	function fixedMenu() {
		const el = document.querySelector('.header');
		const height = el.offsetHeight;
		const pos = window.pageYOffset;
		const diff = scrollY - pos;

		elY = Math.min(0, Math.max(-height, elY + diff));

		if (elY < 0) {
			headerArea.classList.remove('is-show')
		}
		else {
			headerArea.classList.add('is-show')
		}

		scrollY = pos;

		if (window.scrollY > 200) {
			if (!headerArea.classList.contains('is-fixed')) {
				headerArea.classList.add('is-fixed')
				// headerArea.classList.remove('is-blur')
				// headerArea.classList.add('is-fill')

				headerArea.style.top = -headerArea.clientHeight + 'px'
			}
		}
		else if (window.scrollY === 0) {

			if (headerArea.classList.contains('is-fixed')) {
				headerArea.classList.remove('is-show')
				headerArea.classList.remove('is-fixed')
				// headerArea.classList.remove('is-fill')
				headerArea.style.top = 0
			}
		}

		// if (main) {

		// 	if (window.scrollY + headerArea.clientHeight <= main.clientHeight) {
		// 		headerArea.classList.add('is-blur')
		// 		headerArea.classList.remove('is-fill')
		// 	}
		// 	else {
		// 		headerArea.classList.add('is-fill')
		// 		headerArea.classList.remove('is-blur')
		// 	}
		// }
	}
}
