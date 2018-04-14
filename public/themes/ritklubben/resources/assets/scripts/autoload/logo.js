import paths from '../settings/paths';

(() => {

	const logo = document.querySelector('.logo');
	let i = 0;

	setInterval(() => {
		switch(i++%3) {
			case 0: nextFrame(logo, 0);
			break;
			case 1: nextFrame(logo, 1);
			break;
			case 2: nextFrame(logo, 2);
			break;
		}
	}, 100);

	function nextFrame(logo, pos) {
		let elements = logo.querySelectorAll('path');
		elements.forEach(path => {
			path.setAttribute('d', paths[path.classList[0]][pos]);
		});
	}

})();
