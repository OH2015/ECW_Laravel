<!-- views/common/layout.blade.phpを継承 -->
@extends('common.layout')

<!-- 継承テンプレートにタイトルを差し込む -->
@section('title','ECWINDOW BtoC 商品一覧')

<!-- css等の外部ファイル読み込みを差し込む -->
@section('assets')
<link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="{{asset('css/ecwpc.css')}}">
<link rel="stylesheet" type="text/css" media="screen and (max-width: 767px)" href="{{asset('css/ecwsp.css')}}">
<script src="{{asset('js/lib/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/itemlist.js')}}" ></script>
@endsection

<!-- メイン要素を差し込む -->
@section('content_center')
<div class="content_center">

  <!-- カテゴリ検索　表示/非表示 -->
  @if($req['c1'] != null)
  <div class="item_category_info">	
    <div class="cat1">{{$currentItemCategory1->item_category1_name}}</div>
    @if ($req['c2'] != null)
      <div class="arrow">&gt;</div>
      <div class="cat2">{{$currentItemCategory2->item_category2_name}}</div>
    @endif
  </div>
  @endif
		

  <!--/* 商品検索結果 表示/非表示 */-->
  @if($items != null && $items->count() > 0)

  <!-- キーワード表示/非表示 -->
  @if($req['k'] != null && $req['k'] != '')
  <div class="search_result_by">キーワード{{$req['k']}}で</div>
  @endif

  <div class="search_result_wrap">
    <div class="count_info">検索結果が{{$itemTotal}}件ありました</div>
    <div class="page_info">20件ずつ表示しています。({{$p}}ページ目)</div>
  </div>

  
  <div class="pager">
    <form method="post" action="search" id="execPaging">
      @csrf
      <!--/* 総ページ数が10ページ未満の場合は、全ページ表示 */-->
      @if($maxPage < 10)
        @for($i=1;$i<=$maxPage;$i++)
          <div class="page_num {{($i==$p) ? 'active' : ''}}" onclick="paging({{$req['c1']?:'null'}},{{$req['c2']?:'null'}},{{$req['k']?:'null'}},{{$i}})">{{$i}}</div>
        @endfor
      <!-- 総ページ数10ページ以上 -->
      @else
        @for($i=1;$i<=$maxPage;$i++)
          @if($i == 1 || $i == $maxPage)
          <div class="page_num {{($i==$p) ? 'active' : ''}}" onclick="paging({{$req['c1']?:'null'}},{{$req['c2']?:'null'}},{{$req['k']?:'null'}},{{$i}})">{{$i}}</div>     
          @elseif(($i - 7 <= $p) && ($p <= $i + 7) || ($p < 8 && $i < 17) || (($p - 1 > $maxPage) && $i > $maxPage - 17))
          <div class="page_num {{($i==$p) ? 'active' : ''}}" onclick="paging({{$req['c1']?:'null'}},{{$req['c2']?:'null'}},{{$req['k']?:'null'}},{{$i}})">{{$i}}</div>
          @endif
        @endfor
      @endif
        
      <input type="hidden" id="hid_p_c1" name="c1" />
      <input type="hidden" id="hid_p_c2" name="c2" />
      <input type="hidden" id="hid_p_k" name="k"/>
      <input type="hidden" id="hid_p_page" name="p" />
      
    </form>
  </div>


  @foreach($items as $item)
    <div class="item_box">
      <div class="item_container">
        <div class="item_cell">
          <div class="item_image">
            <div class="item_image" style="background-image:url('images/{{$item->item_image1}}')"></div>
          </div>
          <div class="brand_name">{{$item->brand_name}}</div>
          <div class="item_name">{{$item->item_name1}}　{{$item->item_name2}}</div>
          <div class="price">&yen;&nbsp;{{number_format($item->no_tax_wholesale_price)}}</div>
          
          @if($item->stock_num <= 0)
            <div class="no_stock">在庫なし</div>
          @elseif($item->stock_num <= 10)
            <div class="in_stock">在庫残少</div>
          @else
            <div class="in_stock">在庫あり</div>
          @endif
          
        </div>
      </div>
    </div>
  @endforeach
    

  @endif

  <!-- 検索結果0件のメッセージ -->
  @if ($itemTotal <= 0)
  <div class="no_result">{{$common_msg['item_search_no_result']}}</div>
  @endif
</div>
@endsection