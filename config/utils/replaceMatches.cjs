const fs = require('fs')

function replaceMatches(opt) {

	opt.path.forEach(path => {

		console.log(path)

		fs.readFile(path, 'utf-8', (err, data) => {

			if (err) throw err

			let newData = data

			opt.replace.forEach(e => {
				const regexp = new RegExp(e[0], 'g')
				newData = newData.replace(regexp, e[1])
			})

			fs.writeFile(path, newData, err => { if (err) throw err })
		})
	})
}

module.exports = replaceMatches