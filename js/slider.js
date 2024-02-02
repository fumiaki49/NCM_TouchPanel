// JavaScript Document
window.addEventListener('load', function() {
	new Splide('.splide', {
		type: "loop",
		perPage: 1,
		gap: 50,
		width: "80%",
		padding: {left: "15%", right: "15%"},
		focus: "center",
		breakpoints: {
			600: {
				padding: {left: "0", right: "0"},
				gap: 10,
				fixedWidth: "100%"
			},
		}
	}).mount();
});
