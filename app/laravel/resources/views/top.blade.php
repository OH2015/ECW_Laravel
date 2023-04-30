<!-- views/common/layout.blade.phpを継承 -->
@extends('common.layout')

<!-- 継承テンプレートにタイトルを差し込む -->
@section('title','ECWINDOW')

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
  <div class="banner_area">
    <div class="kadai">
      課題#12&emsp;自由課題<br />
      jQueryプラグイン（bxSlider）を使って点線の枠内にスライドショー形式のバナーを表示してください。
    </div>
  </div>
</div>
@endsection

