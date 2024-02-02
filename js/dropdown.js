window.addEventListener('load', function() {
	let get_dropDown_btn = document.querySelector('.drop-down #button');
	get_dropDown_btn.addEventListener("click", function() {
		let get_dropDown_ul = document.querySelector('.drop-down ul');

		get_dropDown_ul.classList.toggle('active');
		this.classList.toggle('range-expansion');
	});	
});
