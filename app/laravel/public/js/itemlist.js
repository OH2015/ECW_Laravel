$(function(){
	$("#item_category_dropdown").click(function(){
		if($("#item_category_dropdown_list").css("display") == "none"){
			$("#item_category_dropdown").addClass("open");
			$("#item_category_dropdown_list").slideDown({duration: 16});
		}else{
			$("#item_category_dropdown").removeClass("open");
			$("#item_category_dropdown_list").slideUp({duration: 16});
		}
	});
});

$(window).resize(function() {
	$("#item_category_dropdown").removeClass("open");
	$("#item_category_dropdown_list").css("display", "none");
});

// 検索窓から検索実行
function search(){
	$("#execSearch").submit();
}

// カテゴリ選択から検索実行
function searchByCategory(c1, c2){
	// 商品分類1コードをhiddenにセット
	$("#hid_c1").val(c1);
	// 商品分類2コードをhiddenにセット
	$("#hid_c2").val(c2);
	$("#execSearchByCategory").submit();
}

// ページング
function paging(c1, c2, k, page){
	// 商品分類1コードをhiddenにセット
	$("#hid_p_c1").val(c1);
	// 商品分類2コードをhiddenにセット
	$("#hid_p_c2").val(c2);
	// キーワードをhiddenにセット
	$("#hid_p_k").val(k);
	// ページ番号をhiddenにセット
	$("#hid_p_page").val(page);
	$("#execPaging").submit();
}

// 課題#09 税抜下代単価の上限・下限を指定して絞り込み可能にする
//         ここに「条件で絞り込んで検索」ボタンのクリックで呼び出される関数を追加します。
//         hiddenに値をセットしてsubmitする方法は、既にある関数「検索窓から検索実行」「カテゴリ選択から検索実行」「ページング」と同様です。
//
//         価格帯上限／下限で絞り込んだ状態でページング可能にするため、
//         このjsファイルにあるpaging関数の引数に、価格帯上限／下限の引数を追加する考慮も必要です。
//
//         javascriptの document.getElementById("ID名")と、jQueryの $("#ID名") は等価で（※厳密には$("#ID名")[0] と等価）、指定したID名のオブジェクトを取得します。
//         javascriptの document.getElementByIdはブラウザ依存（動かないブラウザがある）ですが、jQueryはクロスブラウザに対応しており、
//         特定のブラウザで動かないといった問題がないため、開発現場ではjQueryの$("#ID名")の方を使います。

