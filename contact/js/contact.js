window.addEventListener('load', function() {
	const checkBoxesInquiry = document.getElementsByName('inquiry[]');
	const checkBoxesInquiryItem = document.getElementsByName('inquiry-item[]');
	const submitBtn = document.getElementsByName('submit-btn');
	let counterInquiry = 0;
	let counterInquiryItem = 0;
	
	submitBtn.forEach(function(btn) {
		for(let i = 0; i < checkBoxesInquiry.length; i++) {
			checkBoxesInquiry[i].addEventListener('click', function() {
				if(checkBoxesInquiry[i].checked) {
					counterInquiry ++;
				} else {
					counterInquiry --;
				}
			})
			
			btn.addEventListener('click', function() {
				if (counterInquiry >= 1) {
					checkBoxesInquiry[i].removeAttribute("required", "false");
					checkBoxesInquiry[i].setCustomValidity("");
				} else {
					checkBoxesInquiry[i].setAttribute("required", "true");
					checkBoxesInquiry[i].setCustomValidity("いずれかの項目を選択してください。");
				}
			});
		}
		
		for(let i = 0; i < checkBoxesInquiryItem.length; i++) {
			checkBoxesInquiryItem[i].addEventListener('click', function() {
				if(checkBoxesInquiryItem[i].checked) {
					counterInquiryItem ++;
				} else {
					counterInquiryItem --;
				}
			})
			
			btn.addEventListener('click', function() {
				if (counterInquiryItem >= 1) {
					checkBoxesInquiryItem[i].removeAttribute("required", "false");
					checkBoxesInquiryItem[i].setCustomValidity("");
				} else {
					checkBoxesInquiryItem[i].setAttribute("required", "true");
					checkBoxesInquiryItem[i].setCustomValidity("いずれかの項目を選択してください。");
				}
			});
		}
	})
	
});