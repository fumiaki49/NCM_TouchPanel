$(function() {
	$('.example-list').paginathing({//親要素のclassを記述
		perPage: 4,//1ページあたりの表示件数
		firstText:'<<',
		lastText:'>>',
		prevText:'<',//1つ前のページへ移動するボタンのテキスト
		nextText:'>',//1つ次のページへ移動するボタンのテキスト
		activeClass: 'navi-active',//現在のページ番号に任意のclassを付与できます
	});
	
	$(".page-item.number").on("click", function() {
		let navText = $(this).text();
		console.log(navText);
		
		history.replaceState('','','/' + navText);
	});
});