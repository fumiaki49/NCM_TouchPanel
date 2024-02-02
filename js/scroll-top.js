window.addEventListener('load', function() {
	function PageTopAnime() {
		let scroll = window.pageYOffset;
		let getUpArrow = document.querySelector('.page-top');
		if (scroll >= 200) {
			getUpArrow.classList.remove('DownMove');
			getUpArrow.classList.add('UpMove');
		} else {
			if(getUpArrow.classList.contains('UpMove')) {
				getUpArrow.classList.remove('UpMove');
				getUpArrow.classList.add('DownMove');
			}
		}
	}
	
	window.addEventListener('scroll', function() {
		PageTopAnime();
	});
	
	document.querySelector('.page-top').addEventListener('click', function() {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		});
	});
});
	
	

