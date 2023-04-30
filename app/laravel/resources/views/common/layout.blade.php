<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <!-- 子ビューのタイトル -->
    <title>@yield('title')</title>

    <!-- 子ビューで使いたい外部ファイルを記述 -->
    @yield('assets')
    
    
</head>
<body>
<div id="header_outline">
	<div id="header">
    <div class="logo_cell" onclick="location.href='/'">
			<div class="main_text"><span style="letter-spacing: 0.5em;">EC開発</span><br />研修セット</div>
			<div class="main_logo" style="background-image:url('images/logo/ecwindow_logo.png');"></div>
		</div>

		<!--/* 商品分類表示（スマートフォン） */-->
		<div id="item_category_dropdown">カテゴリから選ぶ<div class="arrow_icon">▼</div></div>
		<div id="item_category_dropdown_list">

			<form method="post" id="execSearchByCategory" action="search">
      <!-- CSRF（クロスサイトリクエストフォージェリ）攻撃から守るためにランダムなトークンを発行 -->
      <!-- LaravelでPOSTリクエスト行う際はこのcsrfトークンが無ければエラーになってしまう -->
      @csrf

				@foreach($itemCategory1List as $category1)
        <div text="カテゴリ1" class="item_category_name1" onclick="searchByCategory('{{$category1->item_category1_cd}}');">
          <p>{{$category1->item_category1_name}}</p>
        </div>
          @foreach($itemCategory2List as $category2)
            @if($category2->item_category1_cd == $category1->item_category1_cd)
            <div text="カテゴリ2" class="item_category_name2" onclick="searchByCategory('{{$category1->item_category1_cd}}','{{$category2->item_category2_cd}}');">
            <p>{{$category2->item_category2_name}}</p>
            </div>
            @endif
          @endforeach
        @endforeach
        <!--/* ECW全体の仕様で直接値をPOSTリクエストせず、JavaScriptを経由してhiddenに値をセットしてリクエストしています */-->
				<input type="hidden" id="hid_c1" name="c1" />
				<input type="hidden" id="hid_c2" name="c2" />	
			</form>

		</div>
		<div class="search_cell">
			<div class="keyword_wrap">

				<form method="post" id="execSearch" action="search">
          @csrf
					<div class="search_icon" style="background-image:url('images/icon/search.png');"></div>
					<input type="text" id="keyword" name="k" maxlength="50" placeholder="キーワードを入力" />
					
					<div class="search_btn" onclick="search()">検索</div>
				</form>
        
			</div>
		</div>
		<div class="joint_cell"></div>
		<div class="last_cell">ログイン不要24時間商品検索し放題！<br>ぶらぶら散策ネットショッピングならECWINDOW</div>
	</div>
</div>


<!--/* コンテンツ領域 */-->
<div id="main_content">

  <!--/* コンテンツ左 */-->
  <div class="content_left">
    <!--/* 商品分類表示 */-->
    <div class="item_category_box">
        
				@foreach($itemCategory1List as $category1)
        <div text="カテゴリ1" class="item_category_name1" onclick="searchByCategory('{{$category1->item_category1_cd}}');">
          <p>{{$category1->item_category1_name}}</p>
        </div>
          @foreach($itemCategory2List as $category2)
            @if($category2->item_category1_cd == $category1->item_category1_cd)
            <div text="カテゴリ2" class="item_category_name2" onclick="searchByCategory('{{$category1->item_category1_cd}}','{{$category2->item_category2_cd}}');">
            <p>{{$category2->item_category2_name}}</p>
            </div>
            @endif
          @endforeach
        @endforeach
    </div>

    <div class="kadai">
		課題#09&emsp;機能追加<br />価格帯指定検索機能を追加してください。
	  </div>
  </div>


  <!--/* コンテンツ中央、子ビューメイン部分 */-->
  @yield('content_center')


  <!--/* コンテンツ右 */-->
  <div class="content_right">
    <div class="kadai">
      課題#11&emsp;自由課題<br />
      点線の枠内に合うオリジナルのバナー画像を作成＆表示してください。
    </div>
  </div>

</div> 
</body>
</html>
