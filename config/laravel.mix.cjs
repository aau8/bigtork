const mix = require("laravel-mix")

const manifestRemove = require('./utils/manifestRemove.cjs')
const replaceMatches = require('./utils/replaceMatches.cjs')

const PROD_DIR = './prod'
const SRC_DIR = './src'

mix.disableNotifications()

mix.js(`${SRC_DIR}/js/index.js`, `${PROD_DIR}/assets/js/bundle.js`).extract()
mix.sass(`${SRC_DIR}/scss/style.scss`, `${PROD_DIR}/assets/css/style.css`)
mix.options({
	processCssUrls: false
})
mix.after(() => {
	replaceMatches({
		path: `${PROD_DIR}/assets/css/style.css`,
		replace: [
			['@img', '../img']
		]
	})
})

mix.copy(`${SRC_DIR}/img/`, `${PROD_DIR}/assets/img/`)

mix.browserSync({
	server: PROD_DIR,
	open: false,
	watch: true,
})

// Удаляем файл mix-manifest.json
// mix.after(() => { manifestRemove() })
