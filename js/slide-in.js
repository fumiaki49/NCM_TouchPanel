function titleAnimation() {
	let animation_elements_leftRight = document.getElementsByClassName('leftAnime');
	let elementsArray = Array.from(animation_elements_leftRight);
	
	elementsArray.forEach(function(element) {
		element.classList.add("slideAnimeLeftRight");
		
		let childElement = element.children;
		let childElementArray = Array.from(childElement);
		
		childElementArray.forEach(function(childElement) {
			childElement.classList.add("slideAnimeRightLeft");
		});
	});
}

function slideInFromRight() {
	let animation_elements_rightLeft = document.getElementsByClassName('rightAnime');
	let elementsArray = Array.from(animation_elements_rightLeft);
	
	elementsArray.forEach(function(element) {
		element.classList.add("slideAnimeRightLeft");
		
		let childElement = element.children;
		let childElementArray = Array.from(childElement);
		
		childElementArray.forEach(function(childElement) {
			childElement.classList.add("slideAnimeLeftRight");
		});
	});
}

function slideDown() {
	let animation_elements_down = document.getElementsByClassName('downAnime');
	let elementsArray = Array.from(animation_elements_down);
	
	elementsArray.forEach(function(element) {
		element.classList.add("slideAnimeUpDown");
		
		let childElement = element.children;
		let childElementArray = Array.from(childElement);
		
		childElementArray.forEach(function(childElement) {
			childElement.classList.add("slideAnimeDownUp");
		});
	});
}

window.addEventListener('load', function() {
	titleAnimation();
	setTimeout("slideInFromRight()", 500);
	setTimeout("slideDown()", 1000);
});

/*スクロールしたら横からスライドイン*/
window.addEventListener('scroll', function() {
	let targetElement = document.querySelectorAll(".fadein-RightLeft, .fadein-LeftRight");
	for (let i = 0; i< targetElement.length; i++) {
		let windowHight = window.innerHeight; //windowの高さを取得
		let scroll = window.pageYOffset;//Y軸のスクロール量を取得
		let targetPosition = targetElement[i].getBoundingClientRect().top; //画面の上からtargetElementの上部までの距離を取得	
		let offset = targetPosition + scroll;
		if(scroll > offset - windowHight + 200){
			targetElement[i].classList.add("active");
		}
	}
	
});


